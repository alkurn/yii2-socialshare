<?php

namespace alkurn\socialshare;

use yii\web\AssetBundle;

/**
 * Class ShareAsset
 * @package alkurn\socialshare
 */
class ShareAsset extends AssetBundle {
    
    public $sourcePath = '@vendor/alkurn/yii2-socialshare/src';
    
    public $js = [
        'assets/js/social-share.js',
    ];
    
    public $depends = [
        'alkurn\socialshare\BootstrapSocialAsset',
        'alkurn\socialshare\FontAwesomeAsset'
    ];
    
}
