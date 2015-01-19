<?php

/**
 * holder Assets
 */

namespace xj\holder;

use yii\web\AssetBundle;
use yii;

class HolderAssets extends AssetBundle {

    public $basePath = '@webroot/assets';
    public $publishOptions = ['forceCopy' => YII_DEBUG];
    public $js = [];
    public $css = [];
    public $depends = [
//'yii\web\JqueryAsset',
    ];

    private function getJs() {
        return [
            YII_DEBUG ? 'holder.js' : 'holder.min.js',
        ];
    }

    public function init() {
        $this->sourcePath = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'assets';
        if (empty($this->js)) {
            $this->js = $this->getJs();
        }
        return parent::init();
    }

}
