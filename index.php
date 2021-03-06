<?php

get_header();

if(is_front_page() || is_category()) {

	//toolkit_category_nav();

}

if(is_front_page()) {

	get_template_part('section', 'site-description');

	?>
	<div class="clearfix">
		<?php
		toolkit_home_slider();
		get_template_part('section', 'editors-pick');
		?>
	</div>
	<?php

	get_template_part('section', 'tracks');

} elseif(is_category()) {

	toolkit_category_header();

} elseif(is_archive()) {

	toolkit_archive_header();

} elseif(is_search()) {
	?>
	<div class="archive-header sub-header">
		<div class="container">
			<div class="twelve columns">
				<div class="clearfix">
					<form>
						<h3><?php _e('Search results for', 'toolkit'); ?>
						<input type="text" name="s" value="<?php echo $_GET['s']; ?>" /></h3>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php
}

?>

<?php if(is_front_page()) : ?>
	<section id="latest-tutorials">
		<div class="container">
			<div class="twelve columns">
				<header class="sub-header">
					<div class="clearfix">
						<h3><?php _e('Latest tutorials', 'toolkit'); ?></h3>
					</div>
				</header>
			</div>
		</div>
		<?php get_template_part('loop'); ?>
	</section>
<?php else : ?>
	<?php get_template_part('loop'); ?>
<?php endif; ?>

<?php

get_footer();

?>