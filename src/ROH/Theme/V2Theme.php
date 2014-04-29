<?php

namespace ROH\Theme;

use \Bono\Theme\Theme;

class V2Theme extends Theme {

    public function __construct($config) {
        parent::__construct($config);

        $d = explode(DIRECTORY_SEPARATOR.'src', __DIR__);
        $this->addBaseDirectory($d[0], 5);

        $this->resolveAssetPath('vendor/platform');
        $this->resolveAssetPath('vendor/v2-theme');
        $this->resolveAssetPath('vendor/x-select');
        $this->resolveAssetPath('vendor/img');
    }

}
