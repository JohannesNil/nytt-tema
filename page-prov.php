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
		</div>
		<div class="text-column">
			<?php the_content(); ?>
		</div>
	</div>

<?php 
if (wp_get_post_parent_id(get_the_ID()) == FALSE){ ?>
	<h1> farsan är i huset</h1>

<?php }?>


</article>

<?php endwhile;

else : echo '<p>No content found</p>'; 

	endif;

	get_footer();


?>	