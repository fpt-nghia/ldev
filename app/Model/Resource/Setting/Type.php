<?php
namespace App\Model\Resource\Setting;

class Type
{
    const COMMON = 0;
    const SYSTEM = 1;

    public static function getOptions()
    {
        return array(
            self::COMMON => 'common',
            self::SYSTEM => 'system'
        );
    }

    public static function getLabel($type)
    {
        $options = self::getOptions();
        return $options[$type];
    }
}
