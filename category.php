<?php
/*
 *Template Post Type: category
 */
?>
<?php get_template_part('template-parts/header-blog'); ?>

<div class="blog-category">
<?php
$categories = get_the_category();
$category_id = $categories[0]->cat_ID;
global $post;
$args = ['category' => $category_id, 'posts_per_page' => 64];
$myposts = get_posts($args);
foreach ($myposts as $post):
    setup_postdata($post); ?>




<div class="post__thumbnail">

<a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(
    ''
); ?>"></a>
</div>
<div class="content-category">
             <h6><?php echo get_the_date('j F Y'); ?></h6>
             <h3><a class="b-h3" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
             <p>
                 <?php the_excerpt(); ?>
             </p>

             </div>


<?php
endforeach;
?>
</div>
</div>
<?php wp_reset_postdata(); ?>
<?php get_footer(); ?> 
