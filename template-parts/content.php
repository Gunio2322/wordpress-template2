

<section id="content">

<div class="row">

    <div id="main" class="tab-whole">

      <article class="entry">

             <header class="">

                
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>

  


<a href="<?php the_permalink(); ?>">
 <?php the_post_thumbnail('standard-image'); ?>
</a>

<div class="container-box">
<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
<?php the_content(); ?>
</div>
</div>

</div>
</article>

 <?php endwhile; ?>
<?php endif; ?> 
