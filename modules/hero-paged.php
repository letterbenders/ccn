<section class="hero hero__paged no-padding no-margin">
	<div class="hero__container">
		<div class="hero__image">
			<img src="<?php the_field('hero_paged'); ?>">
		</div>
		<div class="hero__text">
			<p class="<?php the_field('text_color'); ?>"><?php the_field('hero_text'); ?></p>
		</div>
	</div><!-- /hero__container -->
</section>