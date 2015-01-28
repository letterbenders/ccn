<section class="hero hero__frontpage no-padding no-margin">
	<div class="hero__container">
		<div class="hero__image">
			<img src="<?php the_field('hero'); ?>">
		</div>
		<div class="hero__text">
			<p><?php the_field('hero_text'); ?></p>
			<p class="hero__text__small"><?php the_field('hero_text_small'); ?></p>
			<!--<a href="<?php the_field('link'); ?>" class="stroke-button"><span class="stroke-button__label stroke-button__label--white">Læs mere</span></a>-->
		</div>
	</div><!-- /hero__container -->
</section>