<?php
/**
 * content-tile.php
 * Template for displaying post tiles
 */

?>

<section id="journal">
<?php
    $new_query_offer = new WP_Query(
        array(
            'category_name'            => 'pierwsza', // Numer kategorii
            'posts_per_page' => 3   // ilość wpisów do wyświetlenia
        )
    );
    	
if (have_posts()) :
    while (have_posts()) : the_post();
        ?>
    
<div class="row">


<div class="twelve-journal columns">

   <div id="blog-wrapper" class="bgrid-third s-bgrid-half mob-bgrid-whole group">
 
   
      <article class="bgrid"> 
      <a href="<?php the_permalink(); ?>">
 <?php the_post_thumbnail(); ?>
</a>    <h3 class=""><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <div class=""><?php the_excerpt(); ?></div>
                     
         <p></p>
                  
      </article>                     
     
   </div> <!-- /blog-wrapper -->

</div> <!-- /twelve -->
<?php
    endwhile;
else : 
    wp_reset_postdata();

endif;

?>

</div> <!-- /row -->

</section> <!-- /blog -->


