<?php

namespace backend\assets;
use yii\web\AssetBundle;

class PortalAsset extends AssetBundle {
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
    ];
    public $js = [
    ];

    public $depends = [
        'common\assets\CommonAsset',
    ];

}