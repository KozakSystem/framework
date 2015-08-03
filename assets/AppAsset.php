<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $sourcePath = '@vendor';
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'css/site.css',
        'css/magnific-popup.css',
        'css/reg_form.css',
        'css/style.css',
    ];
    public $js = [
        'js/jquery.min.js',
        'js/jquery.easing.min.js',
        'js/jquery.mixitup.min.js',
        'js/jquery.magnific-popup.js',
        'js/classie.js',
        'js/easyResponsiveTabs.js',
        'js/jquery.contentcarousel.js',
        'js/jquery.easing.min.js',
        'js/jquery.mousewheel.js',
        'js/responsive.menu.js',
        'js/uisearch.js',
        'js/global.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
