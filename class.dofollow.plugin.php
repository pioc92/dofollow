<?php
/**
 * An example plugin.
 *
 * @copyright 2008-2014 Vanilla Forums, Inc.
 * @license GNU GPLv2
 */

/**
 * Class ExamplePlugin
 *
 * This plugin excerpt every discussion/announcement body
 * before adding it under their title in the discussions list.
 *
 * @see http://docs.vanillaforums.com/developers/plugins
 * @see http://docs.vanillaforums.com/developers/plugins/quickstart
 */
class ExamplePlugin extends Gdn_Plugin {

    /**
     * Plugin constructor
     *
     * This fires once per page load, during execution of bootstrap.php. It is a decent place to perform
     * one-time-per-page setup of the plugin object. Be careful not to put anything too strenuous in here
     * as it runs every page load and could slow down your forum.
     */
    public function __construct() {

    }


    public function format_links_handler($sender, $args) {

    if( strstr($args['Mixed'], 'https://yourdomain.com/')) {
    {
    // Now we do some transformation
    $args['Mixed'] = str_replace('nofollow', 'dofollow', $args['Mixed']);
    }

}
}
}
