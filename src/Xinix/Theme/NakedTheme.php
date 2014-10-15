<?php

namespace Xinix\Theme;

use \Bono\Theme\Theme;
use \ROH\Util\Inflector;

class NakedTheme extends Theme
{

    public function __construct($config)
    {
        parent::__construct($config);

        $app = \Bono\App::getInstance();

        $d = explode(DIRECTORY_SEPARATOR.'src', __DIR__);
        $this->addBaseDirectory($d[0], 5);

        $this->resolveAssetPath('vendor/img');


        $appConfig = $app->config('application');

        $app->filter('page.title', function ($key) use ($app, $appConfig) {
            if (isset($app->controller)) {
                $module = Inflector::humanize($app->controller->getClass());
                return $key .' - '. $module;
            }
            return $key;
        });

        $app->filter('page.header', function ($key) use ($appConfig) {
            if (isset($appConfig['title'])) {
                return $appConfig['title'];
            }
            return $key;
        });

        $app->filter('page.subheader', function ($key) use ($app, $appConfig) {
            if (isset($app->controller)) {
                return Inflector::humanize($app->controller->getClass());
            }
            if (isset($appConfig['subtitle'])) {
                return $appConfig['subtitle'];
            }
            return $key;
        });
    }
}
