<?php

namespace alkurn\socialshare;

use yii\web\AssetBundle;

/**
 * Class FontAwesomeAsset
 * @package alkurn\socialshare
 */
class FontAwesomeAsset extends AssetBundle {
    
    public $sourcePath = '@bower/font-awesome/';
    
    public $css = [
        'css/font-awesome.css',
    ];
    
}
