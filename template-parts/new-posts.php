<?php
/*
*Template Name: New-posts
*/
?>
<section id="journal">

<div class="row">

        <h1 class=""><?php echo get_cat_name(1); ?></h1>
       
        <?php
        $new_query_blog = new WP_Query(
            array(
                'cat'            => 1,
                'posts_per_page' => 3 
            )
        );
        if ($new_query_blog->have_posts()) :
            while ($new_query_blog->have_posts()) : $new_query_blog->the_post();
        ?>


            <div class="twelve-journal columns">   

            <div id="blog-wrapper" class="bgrid-third 1s-bgrid-half mob-bgrid-whole 1group">
        	<article class="bgrid">   

            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?>

           
            
                    <h3 class=""><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                  
                        <?php the_excerpt(''); ?>
                    </div>
                </div>
                
        

                
            </article>
            <?php
            endwhile;
            wp_reset_postdata();

        else : 
          
        endif;
        ?>
        <!-- <p class=""><a href="<?php echo get_category_link(1); ?>" class="button_read_more button_read_more_big">ZOBACZ WSZYSTKIE WPISY</a></p> -->
    </div>
    </div>
   
</section>
