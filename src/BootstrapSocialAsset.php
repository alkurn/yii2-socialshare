<?php

namespace alkurn\socialshare;

use yii\web\AssetBundle;

/**
 * Class BootstrapSocialAsset
 * @package alkurn\socialshare
 */
class BootstrapSocialAsset extends AssetBundle{
    
    public $sourcePath = '@bower/bootstrap-social/';
    
    public $css = [
        'bootstrap-social.css',
    ];
    
}
