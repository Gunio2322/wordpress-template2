<?php
/*
*Template Name: home
*Template Post Type: post
*/

global $post;
$args = array('posts_per_page'=>64);
$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

<!-- Kod miniaturki posta -->

<?php endforeach;
