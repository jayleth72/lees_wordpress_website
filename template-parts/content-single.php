<?php
/**
 * @package Bootstrap to WordPress
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		
		<?php
		if ( is_single() ) :
			the_title( '<h3 class="entry-title">', '</h3>' );
		else :
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		endif;
		
		if ( 'post' === get_post_type() ) : ?>
			<div class="post-details">
				<i class="glyphicon glyphicon-user"></i><?php the_author(); ?>
				<i class="glyphicon glyphicon-time"></i><time><?php the_date(); ?></time>
				<i class="glyphicon glyphicon-folder-open"></i> <?php the_category(','); ?>
				<i class="glyphicon glyphicon-tags"></i><?php the_tags(); ?>
			
				<div class="post-comments-badge">
					<a href=""><i class="glyphicon glyphicon-comment"></i><?php comments_number(0, 1, "%"); ?></a>
					
				</div><!-- post-comments-badge --> 

				<!-- this is to enable admin of website to edit posts -->
				<?php edit_post_link('Edit', '<div><i class="glyphicon glyphicon-pencil"></i>' , '</div>'); ?>

            </div><!-- post-details-->  	

	  <?php	endif; ?>
	</header><!-- .entry-header -->

	<?php if ( has_post_thumbnail()) { // check for feature image ?> 
		 <div class="post-image">
		    
    		<?php the_post_thumbnail( '', array( 'class' => 'img-responsive' ) ); ?>
         </div><!-- post-image -->
	<?php } ?>
	
	<div class="post-body">
		<?php the_content(); ?>
	</div><!-- post-body -->

</article><!-- #post-## -->
