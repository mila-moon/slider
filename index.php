<?php get_header(); ?>
<section id="content" role="main">
	<div class="slider-wrapper" id="slider">
  		<div class="slider responsive lazy">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'entry-content' ); ?>
			<?php comments_template(); ?>
			<?php endwhile; endif; ?>
		</div>
		<div class="slider-progress">
		    <div class="progressBar"></div>
		</div>
	</div>
</section>
<?php get_footer(); ?>