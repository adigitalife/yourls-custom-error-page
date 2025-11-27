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

        // We can use the session variable on the custom error page
        session_start();
        $_SESSION['keyword'] = $keyword['0'];

        header("Location: /error");
        die();
}
