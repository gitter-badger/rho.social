<?php

/**
 *  _   __ __ _____ _____ ___  ____  _____
 * | | / // // ___//_  _//   ||  __||_   _|
 * | |/ // /(__  )  / / / /| || |     | |
 * |___//_//____/  /_/ /_/ |_||_|     |_|
 * @link http://vistart.name/
 * @copyright Copyright (c) 2016 vistart
 * @license http://vistart.name/license/
 */

namespace common\assets;

use yii\web\AssetBundle;
/**
 * Description of SparklinesAsset
 *
 * @author vistart <i@vistart.name>
 */
class SparklinesAsset extends AssetBundle
{
    public $sourcePath = "@bower/sparklines/source";
    public $js = [
        'sparkline.js',
    ];
}
