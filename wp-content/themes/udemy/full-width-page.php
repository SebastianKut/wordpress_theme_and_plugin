<?php 
/*
Template Name: Full Width Page
*/
get_header(); ?>

<!-- Page Title
============================================= -->
<section id="page-title">
  <div class="container clearfix">
    <h1><?php single_post_title(); //temple tag function to use outside the loop?></h1>
    <span><?php 

    //to prevent printing error check if subtitle plugin is activated using function_exists
    if ( function_exists( 'the_subtitle' ) ){
    the_subtitle(); //function from the plugin WP Subtitle
    }

    ?></span>
  </div>
</section><!-- #page-title end -->


<!-- Content
============================================= -->
<section id="content">

  <div class="content-wrap">

    
    <div class="container clearfix">

      <!-- Post Content
      ============================================= -->

      <?php

        while( have_posts() ){
          the_post();  
          
          global $post;  //wordpress variable that contains info about the post;
          $author_ID            =   $post->post_author;
          $author_URL           =   get_author_posts_url( $author_ID ); //we use this for author href

          ?>
          
          <div class="single-post nobottommargin">

                            <!-- Single Post
                                        ============================================= -->
                            <div class="entry clearfix">

                           


                            <!-- Entry Image
                                            ============================================= -->
                            <div class="entry-image">
                                <?php 
                                    if( has_post_thumbnail() ) { 
                                    ?>

                                    <div class="entry-image">
                                        <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail( 'full' ) ?>
                                        </a>
                                    </div>

                                    <?php
                                    }        
                                    ?>
                            </div><!-- .entry-image end -->

                            <!-- Entry Content
                                            ============================================= -->
                            <div class="entry-content notopmargin">

                                    <?php 
                                    
                                    the_content(); 
                                    $defaults = array(
                                        'before'        =>  '<p class="text-center">' .__( 'Pages:', 'udemy' ),
                                        'after'         =>  '</p>',
                                    );
                                    wp_link_pages();
                                    
                                    ?>


                               
                                <!-- Post Single - Content End -->

                                <div class="clear"></div>

                            </div>
                            </div><!-- .entry end -->


                            <div class="line"></div>

                            
                            <?php  
                            
                            if( comments_open() || get_comments_number() ) {
                                comments_template();
                            }
                            
                            ?>

                          

                            </div>

        </div>



        <?php
        }
      ?>

     
      <!-- .postcontent end -->

    </div>

  </div>

</section><!-- #content end -->

<?php get_footer(); ?>