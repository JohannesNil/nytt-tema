<?php 

get_header();
?>

<?php
if(have_posts()) : 
	while (have_posts()) : the_post(); ?>
<article class="post">
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<p class="post-info"><?php the_time('F jS, Y g:i a'); ?> | <?php the_author(); ?> </p> 
<div class="container2"><?php the_content(); ?></div>
<?php wp_delete_post_link('Delete post', '<p id ="p-delete-link">', '</p>'); ?>

</article>

<?php 
endwhile;
	else : 
		echo '<p> No content found</p>';
	endif;
echo paginate_links();
get_footer();
?>