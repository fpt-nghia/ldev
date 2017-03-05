<?php
namespace App\Lib\Log;

class ImgLevel
{
    const EMERGENCY = 'emergency';
    const ALERT     = 'alert';
    const CRITICAL  = 'critical';
    const ERROR     = 'error';
    const WARNING   = 'warning';
    const NOTICE    = 'notice';
    const INFO      = 'info';
    const DEBUG     = 'debug';

    public static function getOptions()
    {
        return array(
            self::EMERGENCY => 'fire',
            self::ALERT     => 'alert',
            self::CRITICAL  => 'certificate',
            self::ERROR     => 'question-sign',
            self::WARNING   => 'warning-sign',
            self::NOTICE    => 'info-sign',
            self::INFO      => 'exclamation-sign',
            self::DEBUG     => 'flag'
        );
    }

    /**
     *
     * @param string $type
     */
    public static function getLabel($type)
    {
        $options = self::getOptions();
        return $options[$type];
    }
}