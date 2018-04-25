<?php 


get_header();



if(have_posts()) :
	while(have_posts()) : the_post(); ?>

<nav class=" site-nav children-links clearfix">
<span class="parent-link"><a href="#"><?php echo get_the_title(get_top_ancestor_id()); ?></a></span>
<ul>
<?php 
	$args = array('child_of' => get_top_ancestor_id(),
	'title_li' => '' );
	?>

	<?php wp_list_pages($args); ?>
</ul>
</nav>

<article class ="post page">
	<div class="column-container clearfix">

		<div class="title-column">

			<p class="post-info"><?php the_time('F jS, Y g:i a'); ?> | <?php the_author(); ?></p>
		</div>

	
		<div class="text-column">
			<?php the_content(); ?>
		</div>

	</div>


</article>

<?php endwhile;

else : echo '<p>No content found</p>'; 

	endif;

	get_footer();


?>