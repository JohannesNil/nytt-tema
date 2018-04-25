<?php 
get_header();
?>


<?php
if(have_posts()) : 
	while (have_posts()) : the_post(); ?>
<article class="post">
<h2><?php the_title(); ?></h2>

<div class="container2"><div class="admin-quick-add">
	<h3>Add post</h3>
	<input type="text" name="title" placeholder="title">
	<textarea name="content" placeholder="Content"></textarea>
	<button id="quick-add-button">Create a post</button>
</div>

<div id="portfolio-posts"></div>
<button id="button-load">Load posts</button>
</div>
</article>

<?php 
endwhile;
	else : 
		echo '<p> No content found</p>';
	endif;

get_footer();
?>