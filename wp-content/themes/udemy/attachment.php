<?php get_header(); 
//if I want to have different headers i can create header-v2.php and just use 
//get_header('v2');
//this way you can have different headers and footers 
?>

<!-- Content
============================================= -->
<section id="content">

  <div class="content-wrap">

    
    <div class="container clearfix">

      <!-- Post Content
      ============================================= -->
      <div class="postcontent nobottommargin clearfix">

      <?php
      if( have_posts() ){
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

                            <!-- Entry Title
                                            ============================================= -->
                            <div class="entry-title">
                                <h2><?php the_title(); ?></h2>
                            </div><!-- .entry-title end -->

                           
                        

                            <!-- Entry Content
                                            ============================================= -->
                            <div class="entry-content notopmargin">

                                    <a href="<?php echo $post->guid; ?>">Direct Download</a>
                                    <?php 
                                
                                    the_content(); 
                                    
                                    ?>


                               
                                <!-- Post Single - Content End -->

                            </div>
                </div><!-- .entry end -->
                            
                            <?php  
                            
                            if( comments_open() || get_comments_number() ) {
                                comments_template();
                            }
                            
                            ?>

                          

             </div>

        </div>



        <?php
        }
      }
      
      ?>

     
      <!-- .postcontent end -->

     <?php get_sidebar(); ?>

    </div>

  </div>

</section><!-- #content end -->

<?php get_footer(); ?>
   