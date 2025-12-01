<?php

/*
Plugin Name: error-page
Plugin URI: https://github.com/adigitalife/yourls-custom-error-page/
Description: Redirect to a custom error page
Version: 1.0
Author: Aylwin Cal
Author URI:
*/

yourls_add_action( 'redirect_keyword_not_found', 'error_page' );

function error_page( $keyword ) {

        yourls_html_head( 'error', 'Error page' );

        echo '</br></br>';
        echo '<ul style="margin-top:0px; margin-bottom:15px; line-height:150%;">';
        echo '<font size="5" color="#585440">Sorry, the link <font color=red>'.YOURLS_SITE.'/'.$keyword[0].'</font> does not exist.</font>';
        echo '</ul>';
        echo '<ul style="margin-top:0px; margin-bottom:15px; line-height:170%;">';
        echo '<font size="4" color="#585440">A typo perhaps? If not, then please contact the person who gave you this link or the owner of the webpage where you found this link.</font>';
        echo '</ul>';
        echo '<ul style="margin-top:0px; margin-bottom:15px; line-height:150%; width:600px;">';
        echo '<font size="3" color="#585440">Note: If you can see this page then the site is working fine.  It\'s just that the link you\'re trying to use is incorrect.</font>';
        echo '</ul>';

        yourls_html_footer();
        die();
}
