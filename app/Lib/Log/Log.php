<?php
namespace App\Lib\Log;

use File;
use Psr\Log\LogLevel;
use ReflectionClass;

class Log
{
    /**
     * @var string
     */
    private $logPath;

    /**
     * @var array all log files
     */
    private $files = [];

    /**
     * @var string current file name
     */
    private $file;

    public function __construct()
    {
        $this->setLogPath(storage_path('logs/'));
        $this->setFiles();

        $files = $this->getFiles();
        if(!empty($files)) {
            $this->setFile($files[0]);
        }
    }

    /**
     * @param string $logPath
     */
    public function setLogPath($logPath)
    {
        $this->logPath = $logPath;
    }

    /**
     * @return string
     */
    public function getLogPath()
    {
        return $this->logPath;
    }

    private function setFiles()
    {
        chdir($this->getLogPath());
        $files = glob('*.log{*}', GLOB_BRACE);
        $this->files = array_reverse($files);
    }

    /**
     * List all log files (not include diretory)
     *
     * @return array of log files
     */
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * @param string $file
     */
    public function setFile($file)
    {
        $this->file = $file;
    }

    /*
     * @return string current file name
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Show all logs detailed information
     *
     * @return array all logs detailed information
     */
    public function all()
    {
        $logs = array();
        $logLevels = $this->getLogLevels();
        $pattern = '/\[\d{4}-\d{2}-\d{2} \d{2}:\d{2}:\d{2}\].*/';

        if (!$this->file) {
            return [];
        }

        $fileContent = File::get($this->file);
        preg_match_all($pattern, $fileContent, $headings);
        $logData = preg_split($pattern, $fileContent);
        array_shift($logData);

        foreach ($headings as $heading) {
            for ($i=0, $j = count($heading); $i < $j; $i++) {
                foreach ($logLevels as $levelKey => $levelValue) {
                    if (strpos(strtolower($heading[$i]), '.' . $levelValue)) {
                        preg_match('/^\[(\d{4}-\d{2}-\d{2} \d{2}:\d{2}:\d{2})\].*?(\w+)\.' . $levelKey . ': (.*?)( in .*?:[0-9]+)?$/', $heading[$i], $current);

                        if (!isset($current[3])) continue;

                        $logs[] = array(
                            'context'    => $current[2],
                            'level'      => $levelValue,
                            'classLevel' => ClassLevel::getLabel($levelValue),
                            'imgLevel'   => ImgLevel::getLabel($levelValue),
                            'date'       => $current[1],
                            'text'       => $current[3],
                            'inFile'    => isset($current[4]) ? $current[4] : null,
                            'stack'      => preg_replace("/^\n*/", '', $logData[$i])
                        );
                    }
                }
            }
        }

        return array_reverse($logs);
    }

    /**
     * Gets defined constants from LogLevel class
     *
     * @return array of constants. Constant name in key, constant value in value.
     */
    private function getLogLevels()
    {
        $class = new ReflectionClass(new LogLevel);
        return $class->getConstants();
    }
}
