<?php
get_header();
if (have_posts()) : ?>
<h2>

	<?php 
	if (is_category()){
		singe_cat_title();
	}elseif (is_tag()){
		single_tag_title();
	}elseif (is_author()){
		the_post();
		echo "author archives" . get_the_author();
		rewind_posts();
	}elseif (is_day()){
		echo "daily archives" .  get_the_date();
	}elseif (is_month()){
		echo "monthly archives" .  get_the_date('F Y');
	}elseif (is_year()){
		echo "Yearly archives" .  get_the_date('Y');
	} else {
		echo "archives";
	}
	?>
</h2>
<article class ="post page">
<nav class=" site-nav children-links clearfix">
<ul>
<?php 
	$args = array('child_of' => get_top_ancestor_id(),
	'title_li' => '' );
	?>
	<?php wp_list_pages($args); ?>
</ul>
</nav>
	<div class="column-container clearfix">
		<div class="title-column">
			<h2 class ="page-title"><?php the_title();?></h2>
		</div>
		<div class="text-column">
			<?php the_excerpt(); ?>
		</div>
	</div>
</article>
<?php 
	endwhile;
	else : echo '<p>No content found</p>'; 
	endif;
	get_footer();
?>