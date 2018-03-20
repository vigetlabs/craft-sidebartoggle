<?php
namespace viget\sidebartoggle;

use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

class SidebarToggleBundle extends AssetBundle
{
    public function init()
    {
        // define the path that your publishable resources live
        $this->sourcePath = '@viget/sidebartoggle/resources';

        // define the dependencies
        $this->depends = [
            CpAsset::class,
        ];

        // define the relative path to CSS/JS files that should be registered with the page
        // when this asset bundle is registered
        $this->js = [
            'js/script.js',
        ];

        $this->css = [
            'css/style.css',
        ];

        parent::init();
    }
}
