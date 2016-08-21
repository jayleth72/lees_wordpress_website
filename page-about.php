<?php
/*
    Template Name: About Page
*/

// Advanced Custom Fields
$lee_painting_image	= get_field('lee_painting_image');
$lees_story	= get_field('lees_story');

get_header(); ?>

    <div id="lees-story">
            <div class="container">

                <div class="page-header center">
                        <h1>My Story</h1>   
                </div><!-- page-header --> 

                <div class='row'>
                        <div class="col-md-6 feature">

                            <?php $image_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

                            <img src="<?php echo $lee_painting_image[url]; ?>" class="img-responsive" id="my-story-photo" alt="<?php echo $lee_painting_image[alt]; ?>"/>
                        </div>
                        <div class="col-md-6 feature">
                            <p><?php echo $lees_story; ?></p>    
                        </div>
                </div><!-- row -->    
                
            </div><!-- container -->  
      <div><!-- lee's-story -->      


<?php get_footer(); ?>
