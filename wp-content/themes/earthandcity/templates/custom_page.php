<?php

/*This template is: page-about.php*/


is_custom_page( array( 'Our Mission' ,'About', 'In The Press' ) ) ;

if ( is_custom_page() && $post->post_parent > 0 ) { 
    echo "This is a child custom_page";
};

?>
