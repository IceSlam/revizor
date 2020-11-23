<?php

$post = $wp_query->post;
if ( in_category( 'news' ) ) {
    include( TEMPLATEPATH.'/templates/single-news.php' );
} else if  ( in_category( 'services' ) ) {
    include( TEMPLATEPATH.'/templates/single-services.php' );
} else {
    include( TEMPLATEPATH.'/templates/single-default.php' );
};

?>
