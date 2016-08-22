<?php
/*
    Template Name: Gallery Page
*/

// Custom Fields
$galleryShopName = get_post_meta(46,'gallery-shop-name', true);

get_header(); ?>

<!-- ====================================================== PAGE CONTENT ====================================================== -->        

        <!-- Gallery pages much have same name as the title of images uploaded - e.g Surfing-Dream is name of linking page and 
             and title of image - otherwise thumbnail images will not work -->    
        <!-- Page Content -->
        <div class="container">

            <div class="row" id="thumbnail-gallery">

                <div class="col-lg-12">
                    <h1 class="page-header"><?php echo $galleryShopName  ?></h1>
                </div>

                 <?php // <!-- indicators -->
                if( has_shortcode( $post->post_content, 'gallery' ) ) { ?>

                        <?php $gallery = get_post_gallery( $post, false );
                        $gids = explode( ",", $gallery['ids'] ); ?>
                       

                         <?php foreach( $gids as $id ){ ?>
              
                            <?php  /* get information about each image for display in slide show */  
                                $attachment_meta = wp_get_attachment($id);
                                /* get page where photo is displayed in full and use it link from thumbnail in gallery */
                                $page = get_page_by_title( $attachment_meta['title'] );
                            ?>    
                                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                    <a class="thumbnail" href="<?php echo get_page_link($page->ID); ?>">
                                        <img class="img-responsive" src="<?php echo $attachment_meta['src']; ?>" alt="<?php echo $attachment_meta['description']; ?>">
                                    </a>
                                </div>
                        
                    <?php  } ?>
             
                <?php } ?>  
                
            </div><!-- row -->
        </div><!-- container -->


<?php get_footer(); ?>