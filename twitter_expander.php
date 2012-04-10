<?php
/*
Plugin Name: Twitter Expander
Plugin URI: http://www.maechler.me
Description: Expand your Twitter-Name @something in your Posting with Twitterlink http://twitter.com/something
Version: 2.0
Author: Eric-Oliver M&auml;chler
Author URI: http://www.maechler.me
*/

function twitter_name($content) {
        $text = preg_replace("/(?!\!)(\W)\@(\w+)/i",
                     "$1<a href=\"https://twitter.com/$2\" target=\"_blank\" >@$2</a>", $content);
        $text = preg_replace("/(\W)\!\@(\w+)/i",
                     "$1@$2", $text);
        return ($text);
}


add_filter('the_content', 'twitter_name');
?>