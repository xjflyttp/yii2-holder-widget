<?php

/**
 * holder Assets
 */

namespace xj\holder;

use yii\web\AssetBundle;
use yii;

class HolderAssets extends AssetBundle {

    public $sourcePath = '@vendor/xj/yii2-holder/assets';
    public $basePath = '@webroot/assets';
    public $js = [];
    public $css = [
    ];
    public $depends = [
//'yii\web\JqueryAsset',
    ];

    private function getJs() {
        return [
            YII_DEBUG ? 'holder.js' : 'holder.min.js',
        ];
    }

    public function init() {
        if (empty($this->js)) {
            $this->js = $this->getJs();
        }
        return parent::init();
    }

}
