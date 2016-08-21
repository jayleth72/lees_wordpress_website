<?php
/*
    Template Name: Home Page
*/

get_header(); ?>

    <!-- ====================================================== PAGE CONTENT ====================================================== -->

    <div class="container" id="carousel-container">
        <div class="page-header">
          <h1><?php bloginfo('description'); ?></h1>   
        </div><!-- page-header --> 

        <!-- ====================================================== CAROUSEL ====================================================== -->

       <div id="leeCarousel" class="carousel slide" data-ride="carousel">
            
        <?php // <!-- indicators -->
            if( has_shortcode( $post->post_content, 'gallery' ) ) {                     
                $gallery = get_post_gallery_images( $post->ID );


                $indicator_list = "\t".'<ol class="carousel-indicators">'."\r\n"; 
                $image_number = 0;

                foreach( $gallery as $image ) {// Loop through each image in each gallery

                    if ($image_number == 0)
                    {
                        $indicator_list .= "\t\t\t\t".'<li data-target="#leeCarousel" data-slide-to='.'"'.$image_number.'" class="active"></li>'."\r\n";
                    }
                    else
                    {
                        $indicator_list .= "\t\t\t\t".'<li data-target="#leeCarousel" data-slide-to='.'"'.$image_number.'"></li>'."\r\n";
                    }

                    $image_number++;
                }

                $indicator_list .= "\t\t\t".'</ol>';                     
                echo $indicator_list;                       
                $image_number = 0;

                $gallery = get_post_gallery( $post, false );
                $gids = explode( ",", $gallery['ids'] ); ?>
                <div class="carousel-inner" role="listbox">

               <?php foreach( $gids as $id ){ ?>

                    <?php if($image_number == 0)
                    { ?>
                        <div class="item active">
                    <?php }
                    else
                    { ?>
                        <div class="item">
                    <?php } ?>

                    <?php  /* get information about each image for display in slide show */  
                         $attachment_meta = wp_get_attachment($id);
                     ?>    
                            <a href="<?echo $attachment_meta['href'];?>">
                                <img class="img-responsive picture-gallery" src="<?php echo $attachment_meta['src']; ?>" alt="<?php echo $attachment_meta['description']; ?>">
                           </a>
                            <div class="carousel-caption hidden-xs">
                                <h4><?echo $attachment_meta['caption'];?></h4>
                            </div>    
                        </div>
                
                     
                    <?php $image_number++; ?>

              <?php  } ?>
               
                     </div><!-- carousel-inner --> 
           <?php } ?>
                  
            <!-- controls -->
            <a class="left carousel-control" href="#leeCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#leeCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>

        </div><!-- carousel slide -->  
           
    </div><!-- container --> 

<?php get_footer(); ?>
