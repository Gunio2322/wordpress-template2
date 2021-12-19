

<section id="journal-cat">


<div class="row">

<div class="section-head"><h5>Latest posts<span>.</span></h5></div>
                  
        <?php
        $new_query_blog = new WP_Query([
            'cat' => 1,
            'posts_per_page' => 3,
        ]);
        if ($new_query_blog->have_posts()):
            while ($new_query_blog->have_posts()):
                $new_query_blog->the_post(); ?>
  
  
  <div class="flexb flexb-9">
     
  <div class="twelve-journalc">  
      

            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('standard-image'); ?>
    

                    <h3 class="p-cat h3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                  <div class="p-cat">
                        <?php the_excerpt(''); ?>
            </div>
            </div>
                        
           
            </div>
            </article>
            <?php
            endwhile;
            wp_reset_postdata();
        else:
        endif;
        ?>
        

        
                
    </div>
     
</section>
