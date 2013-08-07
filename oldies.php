<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php echo get_bloginfo('name') . ' | ' . get_bloginfo('description'); ?></title>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="generator" content="WordPress" />
    
    <link href="<?php echo get_option('home');?>/wp-content/plugins/stop-oldies/style/stop-oldies.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
    <div id="wrap" class="clear">
        <div id="container" class="clear">
            <div id="holder">
                <div id="entry" class="clear">
                    <h1><?php _e('Your Web Browser is really old', 'stop_oldies'); ?></h1>
                    <p><?php _e('To view this site you should have a modern browser', 'stop_oldies'); ?></p>
                    <p><?php _e('You could download one of these recent softwares', 'stop_oldies'); ?></p>
                </div>
            </div>
			
            <div id="icons" class="clear">
                <div class="logo">
                    <a href="http://www.mozilla.com/firefox/">
                        <img src="<?php echo get_option('home');?>/wp-content/plugins/stop-oldies/style/images/firefox.png" alt="Firefox" /></a>
                </div>

                <div class="logo">
                    <a href="http://www.apple.com/safari/download/">
                        <img src="<?php echo get_option('home');?>/wp-content/plugins/stop-oldies/style/images/safari.png" alt="Safari" /></a>
                </div>

                <div class="logo">
                    <a href="http://www.google.com/chrome/">
                        <img src="<?php echo get_option('home');?>/wp-content/plugins/stop-oldies/style/images/chrome.png" alt="Chrome" /></a>
                </div>

                <div class="logo">
                    <a href="http://www.opera.com/download/">
                        <img src="<?php echo get_option('home');?>/wp-content/plugins/stop-oldies/style/images/opera.png" alt="Opera" /></a>
                </div>

                <div class="logo">
                    <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx">
                        <img src="<?php echo get_option('home');?>/wp-content/plugins/stop-oldies/style/images/ie.png" alt="Internet Explorer" /></a>
                </div>
            </div><!-- /#icons -->
        </div><!-- /#container -->
    </div><!-- /#wrap -->
</body>
</html>