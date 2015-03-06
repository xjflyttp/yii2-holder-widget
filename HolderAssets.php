<?php

/**
 * holder Assets
 */

namespace xj\holder;

use yii\web\AssetBundle;

class HolderAssets extends AssetBundle {

    public $sourcePath = '@vendor/xj/yii2-holder-widget/assets';
    public $basePath = '@webroot/assets';
    public $js = ['holder.js'];

}
