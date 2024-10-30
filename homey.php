<?php

/*
Plugin Name: Homey
Version: 1.0
Description: Adds support to embed shared Homey Flows
Author: Athom B.V.
Author URI: https://homey.app
*/

wp_oembed_add_provider('https://homey.app/*/flow/*/', 'https://homey.app/api/oembed/flow');
wp_oembed_add_provider('https://homey.app/f/*', 'https://homey.app/api/oembed/flow');