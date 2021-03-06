<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace common\assets;

use yii\web\AssetBundle;

/**
 * @author vistart <i@vistart.name>
 * @since 2.0
 */
class CommonAsset extends AssetBundle
{

    public $sourcePath = "@common/assets/common";
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/style.css',
        'css/theme.css',
        'css/Lato.woff2',
    ];
    public $js = [
        'rho' => 'js/rho.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'common\assets\FontAwesomeAsset',
        'common\assets\OpenSansAsset',
        'common\assets\HolderAsset',
    ];

}
