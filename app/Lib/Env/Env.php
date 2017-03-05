<?php
namespace App\Lib\Env;

Use \Illuminate\Support\Facades\App;

/**
 * It's responsible for loading & update a `.env` file in the given directory and.
 */
class Env
{

    /**
     * The file path.
     * @var string
     */
    private $filePath;

    public function __construct()
    {
        $this->filePath = $this->getFilePath();
    }

    /**
     * Update .env file
     *
     * @param array $data
     */
    public function update(array $data)
    {
        $envArray = array_merge($this->loadData(), $data);
        file_put_contents($this->filePath, $this->translateEnvToSave($envArray));
    }

    /**
     * Returns the full path to the file.
     *
     * @return string
     */
    private function getFilePath()
    {
        return rtrim(App::environmentPath(), DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . App::environmentFile();
    }

    /**
     * Load data of .env file in given directory
     *
     * @return array
     */
    private function loadData() {
        $configs = [];

        $lines = $this->readLinesFromFile();
        foreach ($lines as $line) {
            list($name, $value) = explode('=', $line);
            $configs[$name] = $value;
        }

        return $configs;
    }

    /**
     * Read lines from the file
     *
     * @return array
     */
    private function readLinesFromFile()
    {
        // yes, laravel is support Dotenv
        if (class_exists('\Dotenv\Dotenv')) {
            return (new \Dotenv\Dotenv(App::environmentPath(), App::environmentFile()))->load();
        }
        return file($this->filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    }

    /**
     *
     * @param array $envArray
     * @return string
     */
    private function translateEnvToSave(array $envArray) {
        $envStr = '';
        foreach ($envArray as $key => $value) {
            $envStr .= $key . '=' . $value . "\n";
        }

        return $envStr;
    }
}