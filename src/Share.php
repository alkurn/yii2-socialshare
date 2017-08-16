<?php

namespace alkurn\socialshare;

use alkurn\socialshare\Widget;
use yii\helpers\Html;

/**
 * Class Share
 * @package alkurn\socialshare
 */
class Share extends Widget {

    /**
     * Build the HTML
     */
    public function run() {
        echo Html::beginTag($this->tag, $this->htmlOptions);

        $networks = $this->getNetworks();
        $networks_available = $this->include ?: array_keys($networks);

        foreach ($networks_available as $network) {
            echo $this->parseTemplate($network);
        }
        echo Html::endTag($this->tag);
    }

}
