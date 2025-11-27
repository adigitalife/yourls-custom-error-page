<?php

// Make sure we're in YOURLS context
if( !defined( 'YOURLS_ABSPATH' ) ) {
        // Attempt to guess URL via YOURLS
        $url = 'https://' . $_SERVER['HTTP_HOST'] . str_replace( array( '/pages/', '.php' ) , array ( '/', '' ), $_SERVER['REQUEST_URI'] );
        echo "Try this instead: <a href='$url'>$url</a>";
        die();
}

// Display page content. Any PHP, HTML and YOURLS function can go here.
$url = YOURLS_SITE . '/error';

yourls_html_head( 'error', 'Error page' );

session_start();
?>
        </br></br>
        <ul style="margin-top:0px; margin-bottom:15px; line-height:150%;">
        <font size="5" color="#585440">Sorry, the link <font color=red><?php echo YOURLS_SITE."/".$_SESSION['keyword']; ?></font> does not exist.</font>
        </ul>
        <ul style="margin-top:0px; margin-bottom:15px; line-height:170%;">
        <font size="4" color="#585440">A typo perhaps? If not, then please contact the person who gave you this link or the owner of the webpage where you found this link.</font>
        </ul>
        <ul style="margin-top:0px; margin-bottom:15px; line-height:150%; width:600px;">
        <font size="3" color="#585440">Note: If you can see this page then the site is working fine.  It's just that the link you're you're trying to use is incorrect.</font>
        </ul>
<?php

yourls_html_footer();
