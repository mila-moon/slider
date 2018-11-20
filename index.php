<?php get_header(); ?>
<section id="content" role="main">
	<div class="slider-wrapper" id="slider">
  		<div class="slider responsive lazy">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<? the_post_thumbnail(); ?>
			<?php endwhile; endif; ?>
		</div>
		<div class="slider-progress">
		    <div class="progressBar"></div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
