<?php

namespace edofre\ckeditor;

/**
 * Class CoreAsset
 * @package edofre\fullcalendar
 */
class CoreAsset extends \yii\web\AssetBundle
{
    /** @var string */
    public $sourcePath = '@bower/ckeditor';
    /** @var array */
    public $js = [
        'ckeditor.js',
        'adapters/jquery.js',
    ];
    /** @var array */
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}