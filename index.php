<?php/*
* index.php
 */
?>
<?php get_header(); ?>

<?php while(have_posts()) : the_post(); ?>
<main>
    <!-- <div class="row">
    

<div class="body-container"> -->
<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
<div><?php the_content(); ?></div>
<?php endwhile; ?>
<?php get_footer(); ?>