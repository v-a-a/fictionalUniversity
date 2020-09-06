<?php
get_header();

while (have_posts(  ))
{
	the_post(); ?>
	<h2><?PHP the_title();?></h2>
	<br>
	<?PHP the_content();?>
	
	<?php 
}
get_footer();
?>