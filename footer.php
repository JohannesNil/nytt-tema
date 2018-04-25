</div>
<footer class="site-footer">
	<nav class="site-nav">
		<?php
		$args  = array(
			'theme_location' => 'footer'
			);
			?>
		<?php wp_nav_menu($args); ?>
	</nav>
 <p> Johannes N -  &copy  <?php echo date('d-m/Y')?></p>
<?php wp_footer(); ?>
</footer>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
</body>
</html>