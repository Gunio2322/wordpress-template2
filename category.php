
<?php
/*
*Template Name: Category
*/
?>
<?php 
$categories = get_the_category();
$category_id = $categories[0]->cat_ID;
global $post;
 $args = array('category'=> $category_id, 'posts_per_page'=>64);
$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

// Ten sam kod miniaturki posta który jest w przykładzie powyżej

<?php endforeach;
wp_reset_postdata();?>