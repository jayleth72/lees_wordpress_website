<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lees_Art
 */

?>

	
<?php wp_footer(); ?>

    <!-- ====================================================== FOOTER ====================================================== --> 

    <div id="footer">
        <div class='container'>
            <div class='row'>
                <div class='col-sm-4 col-md-3 col-xs-6'>
                    <h4>What is Lee's Art all About</h4>
                    <p><i>Surf, beach and dream inspired art</i></p>
                    <p><a href='my-story.html'>More...</a></p>
                </div>

                <div class='col-sm-2 col-xs-6 col-md-offset-1'>
                    <h4>Links</h4>
                        <ul class='list-unstyled'>
                            <li><a href='index.html'>Home</a></li>
                            <li><a href='my-story.html'>Lee's Story</a></li>
                            <li><a href='virtual-gallery.html'>Gallery</a></li>
                            <li><a href='contact-me.html'>Contact Lee</a></li>     
                        </ul>
                </div>

                <div class='clearfix visible-xs'></div>

                <div class='col-sm-2 col-xs-6'>
                        <h4>I'm Social</h4>
                        <ul class='list-unstyled'>
                        <li><a href='https://twitter.com/lees_Art'>Twitter</a></li>
                        <li><a href='https://www.facebook.com/linda.l.art/' target="_blank" >Facebook</a></li>
                        </ul>
                </div>

                <div class='col-sm-4 col-md-3 col-md-offset-1 col-xs-6'>
                        <h4>Contact Lee</h4>
                        <ul class='list-unstyled'>
                            <li><i class='glyphicon glyphicon-phone'></i>0414908677<li>
                            <li><i class='glyphicon glyphicon-envelope'></i> <a href='mailto:#'>linda.letheby@gmail.com</a><li>
                        </ul>

                        <p>OTG Web Solutions &copy; 2016.</p>
                </div>
            </div>
        </div>
    </div>     
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-2.2.3.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
    <!--<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>-->  

     <!-- TypeKit Fonts --> 
     <script src="https://use.typekit.net/jze7bdo.js"></script>
     <script>try{Typekit.load({ async: true });}catch(e){}</script>  
</body>
</html>
