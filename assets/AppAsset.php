<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "volt/dist/vendor/@fortawesome/fontawesome-free/css/all.min.css",
        "volt/dist/css/volt.css",
        'css/toastr.min.css',
        "css/custom.css"
    ];
    public $js = [
        "volt/dist/vendor/popper.js/dist/umd/popper.min.js",
        "volt/dist/vendor/bootstrap/dist/js/bootstrap.min.js",
        "volt/dist/vendor/onscreen/dist/on-screen.umd.min.js",
        "volt/dist/vendor/nouislider/distribute/nouislider.min.js",
        "volt/dist/vendor/jarallax/dist/jarallax.min.js",
        "volt/dist/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js",
        "volt/dist/vendor/simplebar/dist/simplebar.min.js",
        "volt/dist/assets/js/volt.js",
        'js/toastr.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
