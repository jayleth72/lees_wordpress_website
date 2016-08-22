<?php
/*
    Template Name: Art Description Page
*/

// Advanced Custom Fields
$art_image	        = get_field('art_image');
$art_caption	    = get_field('art_caption');
$art_description	= get_field('art_description');
$art_materials   	= get_field('materials');
$art_size       	= get_field('size_of_artwork');
$art_price      	= get_field('artwork_price');


get_header(); ?>

<!-- ====================================================== PAGE CONTENT ====================================================== -->             
        <!-- Page Content -->
        <div class="container">

            <div class="row">

                <div class="col-lg-12">
                    <h1 class="page-header"><?php echo $art_caption; ?></h1>
                </div>

                <div class="col-lg-12">
                     <img class="img-responsive picture-gallery" src="<?php echo $art_image[url]; ?>" alt="<?php echo $art_image[alt]; ?>">
                </div>

                <div class="col-lg-12" >
                    
                    <!-- Information about artwork -->
                    <h3 class="page-header">Piece description and Information</h3>

                    <ul id="art_description">
                        <li><strong>Desciption of Work: </strong><?php echo $art_description; ?></li>
                        <li><strong>Mareials Used: </strong><?php echo $art_materials; ?></li>
                        <li><strong>Size of Work: </strong><?php echo $art_size; ?></li>
                        <li><strong>Price: </strong><?php echo $art_price; ?><small> excluding delivery</small></li>
                    </ul>
                    
                    <?php
                         /* get link of contact page */
                        $page = get_page_by_title( 'contact' );
                    ?> 

                    <div class="call-to-action">
                        <a href="<?php echo get_page_link($page->ID); ?>">Contact Lee</a> if you want to buy this painting or want more information
                    </div>        
                </div>
                               
            </div><!-- row -->
        </div><!-- container -->


<?php get_footer(); ?>