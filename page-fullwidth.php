<?php
/* Template Name: Full-width Template */

    get_header();
?>

    


<!-- MAIN CONTENT
	================================================== -->
    <div class="container">
	    <div class="row" id="primary">
	    
            <div class="col-lg-12">
                <h1 class="page-header"><?php the_title(); ?></h1>
            </div>
            
		    <div id="content" class="col-sm-12">
			    
			    <section class="main-content">
			    	
                    <?php while ( have_posts() ) : the_post(); ?>

                        <?php the_content(); ?>

                    <?php  endwhile; // emd of the loop ?>

			    </section>
		    	
		    </div><!-- content -->
		    	    
	    </div><!-- primary -->
    </div><!-- container -->

<?php get_footer(); ?>