<?php

function css($path) {
    echo App\Helper\App::css($path);
}

function js($path) {
    echo App\Helper\App::js($path);
}

function font($path) {
    echo App\Helper\App::font($path);
}

function active($path) {
    echo App\Helper\Menu::isActive($path);
}

function settingTypeIsReadonly($value) {
     return ($value == App\Model\Resource\Setting\Type::SYSTEM);
}

function settingTypeLabel($value) {
    return App\Model\Resource\Setting\Type::getLabel($value);
}

function buildSortUrl($orderBy, $direction) {
    $url = url()->current() . '?o=' . $orderBy . '&d=' . $direction;
    $appends = request()->except(['o', 'd']);

    if ($appends) {
        $url .= '&' . http_build_query($appends);
    }

    return $url;
}

function isEmpty($value) {
    if (is_array($value)) {
        return App\Lib\Util\Arr::isEmpty($value);
    }
    return App\Lib\Util\Str::isEmpty($value);
}

function isNotEmpty($value) {
    if (is_array($value)) {
        return App\Lib\Util\Arr::isNotEmpty($value);
    }
    return App\Lib\Util\Str::isNotEmpty($value);
}