<?php get_header(); ?>
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<main>
    <div class="row">
    

<div class="body-container">
<a href="<?php the_permalink(); ?>">
 <?php the_post_thumbnail('standard-image'); ?>
</a>
<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
<?php the_content(); ?>
</div>
</div>
</main>
<?php endwhile; ?>
<?php endif; ?> 
