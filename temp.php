 <?php
            $query = new WP_Query('category_name=Featured');
            $query_count = $query->post_count;
        ?>

        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#leeCarousel" data-slide-to="0" class="active"></li>
        <?php for ( $i = 1; $i < $query_count; $i++ ) : ?>
            <li data-target="#carousel-featured" data-slide-to="<?= $i ?>"></li>
        <?php endfor; ?>
        </ol>

        <?php if(is_front_page()) {?> 
        <?php query_posts('showposts=4&post_type=post'); ?>

            <div id="leeCarousel" class="carousel slide" data-ride="carousel">
                
                <!-- indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#leeCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#leeCarousel" data-slide-to="1"></li>
                    <li data-target="#leeCarousel" data-slide-to="2"></li>
                    <li data-target="#leeCarousel" data-slide-to="2"></li>
                </ol>

                <!-- wrapper for the slides -->
                <div class="carousel-inner" role="listbox">

                    <?php if (have_posts() ) : while ( have_posts() ) : the_post(); $i++; ?>
                        <?php if ($i==1) {  ?>
                            <div class="item active">    
                        <?php } else { ?>
                            <div class="item"> 
                        <?php }  ?>
                           
                        <?php if ( has_post_thumbnail() ) {  ?>
                        <?php    $url = wp_get_attachment_url(get_post_thumbnail_id() ); ?>
                                                
                            <a href="<?php the_title(); ?>.html">
                                <img class="img-responsive picture-gallery" src="<?php echo $url; ?>" alt="<?php the_title(); ?>">
                            </a>
                        <?php  } ?>    
                            <div class="carousel-caption hidden-xs">
                                <h4><?php the_title(); ?></h4>
                            </div>    
                        </div>
                      </div> 

                    <?php endwhile; endif; ?>

                </div><!-- carousel-inner -->  

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
          <?php } wp_reset_query(); ?>

    </div><!-- container --> 