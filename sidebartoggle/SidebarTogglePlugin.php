<?php
/**
 * Sidebar Toggle plugin for Craft CMS
 *
 * Add the ability to toggle the sidebar
 *
 * @author    Trevor Davis
 * @copyright Copyright (c) 2018 Trevor Davis
 * @link      https://www.viget.com/
 * @package   SidebarToggle
 * @since     1.0.0
 */

namespace Craft;

class SidebarTogglePlugin extends BasePlugin
{
    /**
     * @return mixed
     */
    public function init()
    {
        parent::init();

        if (craft()->request->isCpRequest() && !craft()->request->isAjaxRequest()) {
            craft()->templates->includeJsResource('sidebartoggle/js/script.js');
            craft()->templates->includeCssResource('sidebartoggle/css/style.css');
        }
    }

    /**
     * @return mixed
     */
    public function getName()
    {
         return Craft::t('Sidebar Toggle');
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return Craft::t('Add ability to toggle the sidebar on element edit screens');
    }

    /**
     * @return string
     */
    public function getDocumentationUrl()
    {
        return 'https://github.com/vigetlabs/craft-sidebartoggle/blob/master/README.md';
    }

    /**
     * @return string
     */
    public function getReleaseFeedUrl()
    {
        return 'https://raw.githubusercontent.com/vigetlabs/craft-sidebartoggle/master/sidebartoggle/releases.json';
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return '1.0.1';
    }

    /**
     * @return string
     */
    public function getSchemaVersion()
    {
        return '1.0.0';
    }

    /**
     * @return string
     */
    public function getDeveloper()
    {
        return 'Trevor Davis';
    }

    /**
     * @return string
     */
    public function getDeveloperUrl()
    {
        return 'https://www.viget.com/';
    }

    /**
     * @return bool
     */
    public function hasCpSection()
    {
        return false;
    }
}
