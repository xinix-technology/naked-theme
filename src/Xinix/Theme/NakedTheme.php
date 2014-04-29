<?php

namespace Xinix\Theme;

use \Bono\Theme\Theme;

class NakedTheme extends Theme {

    public function __construct($config) {
        parent::__construct($config);

        $d = explode(DIRECTORY_SEPARATOR.'src', __DIR__);
        $this->addBaseDirectory($d[0], 5);

        // $this->resolveAssetPath('vendor/platform');
        // $this->resolveAssetPath('vendor/naked-theme');
        // $this->resolveAssetPath('vendor/x-select');
        // $this->resolveAssetPath('vendor/img');
    }

}
