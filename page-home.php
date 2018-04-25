<?php 

get_header();
?>
<?php
if(have_posts()) : 
	while (have_posts()) : the_post(); ?>
<article class="post">
<div class="container2"><?php the_content(); ?></div>
</article>
<?php 
	endwhile;
	else : 
		echo '<p> No content found</p>';
	endif;
	get_footer();
?>