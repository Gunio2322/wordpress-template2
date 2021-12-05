<?php/*
* home.php dp sytony blog
 */
?>
<?php get_header(); ?>

<?php while(have_posts()) : the_post(); ?>
<main>
    <!-- <div class="row">
    

<div class="body-container"> -->
<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
<div><?php the_excerpt(); ?></div>
<?php endwhile; ?>
<?php get_footer(); ?>
