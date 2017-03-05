<?php
namespace App\Lib\Log;

class ClassLevel
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
            self::EMERGENCY => 'danger',
            self::ALERT     => 'danger',
            self::CRITICAL  => 'info',
            self::ERROR     => 'info',
            self::WARNING   => 'warning',
            self::NOTICE    => 'primary',
            self::INFO      => 'muted',
            self::DEBUG     => 'success'
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
