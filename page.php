<?php
	get_header();
?>

page of dfwp_child

<?php 
	if ( have_posts() ) : 
		while ( have_posts() ) : the_post();
			the_content();
		endwhile;  
	endif; 
?>


<?php
	get_footer();
?>