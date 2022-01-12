<?php
/*
*Template Name: New-posts
*/
?>
<section id="blog">


        <h1 class=""><?php echo get_cat_name(1); ?></h1>
        <div class="content-blog">

        <?php
        $new_query_blog = new WP_Query([
            'cat' => 1,
            'posts_per_page' => 4,
        ]);
        if ($new_query_blog->have_posts()):
            while ($new_query_blog->have_posts()):
                $new_query_blog->the_post(); ?>


          <div class="item-blog">
             
             
          <!-- <div class="item-blog">  -->
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?>
          
            
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                   
                        <!-- <?php the_excerpt(''); ?> -->
                     
                        </div>
                    
            <?php
            endwhile;
            wp_reset_postdata();
        else:
        endif;
        ?>
         </div>
        <p class=""><a href="<?php echo get_category_link(1); ?>" class="button_read_more button_read_more_big">ZOBACZ WSZYSTKIE WPISY</a></p>
    
   
           
</section>
