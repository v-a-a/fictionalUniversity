<?php
get_header();
while (have_posts(  ))
{
	the_post(); ?>
	<h1>This is a page</h1>
	<h2><?PHP the_title();?></h2>
	<br>
	<?PHP the_content();?>
	
	<?php 
}
get_footer();
?>