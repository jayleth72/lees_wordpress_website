<?php
/*
    Template Name: Gallery Page
*/

// Custom Fields
// $myStory = get_post_meta(42,'my-story', true);

get_header(); ?>

<!-- ====================================================== PAGE CONTENT ====================================================== -->        
            
        <!-- Page Content -->
        <div class="container">

            <div class="row" id="thumbnail-gallery">

                <div class="col-lg-12">
                    <h1 class="page-header">Lee's Art Shop</h1>
                </div>

                 <?php // <!-- indicators -->
                if( has_shortcode( $post->post_content, 'gallery' ) ) { ?>

                        <?php $gallery = get_post_gallery( $post, false );
                        $gids = explode( ",", $gallery['ids'] ); ?>
                       

                         <?php foreach( $gids as $id ){ ?>
              
                            <?php  /* get information about each image for display in slide show */  
                                $attachment_meta = wp_get_attachment($id);
                            ?>    
                                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                    <a class="thumbnail" href="picture1.html">
                                        <img class="img-responsive" src="<?php echo $attachment_meta['src']; ?>" alt="<?php echo $attachment_meta['description']; ?>">
                                    </a>
                                </div>
                        
                    <?php  } ?>
             
                <?php } ?>  
                
            </div><!-- row -->
        </div><!-- container -->


<?php get_footer(); ?>