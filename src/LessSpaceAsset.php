<?php

namespace hiqdev\assets\lessspace;

use yii\web\AssetBundle;

class LessSpaceAsset extends AssetBundle
{
    public $sourcePath = '@bower/less-space';

    public $css = [
        'dist/less-space.min.css',
    ];
}
