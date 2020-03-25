<?php
/**
 * Sidebar Toggle plugin for Craft CMS 3.x
 *
 * Add the ability to toggle the sidebar
 *
 * @link      https://www.viget.com/
 * @copyright Copyright (c) 2018 Trevor Davis
 */

namespace viget\sidebartoggle;


use Craft;
use craft\base\Plugin;
use craft\services\Plugins;
use viget\sidebartoggle\SidebarToggleBundle;

/**
 * Class SidebarToggle
 *
 * @author    Trevor Davis
 * @package   SidebarToggle
 * @since     2.0.0
 *
 */
class SidebarToggle extends Plugin
{
    // Static Properties
    // =========================================================================

    /**
     * @var SidebarToggle
     */
    public static $plugin;

    // Public Properties
    // =========================================================================

    public $changelogUrl = 'https://raw.githubusercontent.com/vigetlabs/craft-sidebartoggle/master/CHANGELOG.md';
    public $downloadUrl = 'https://github.com/vigetlabs/craft-sidebartoggle/archive/master.zip';

    /**
     * @var string
     */
    public $schemaVersion = '2.0.0';

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        self::$plugin = $this;

        if (Craft::$app->getRequest()->getIsCpRequest() && !Craft::$app->getRequest()->getIsAjax()) {
            $this->view->registerAssetBundle(SidebarToggleBundle::class);
        }

        Craft::info(
            Craft::t(
                'sidebar-toggle',
                '{name} plugin loaded',
                ['name' => $this->name]
            ),
            __METHOD__
        );
    }
}
