<section class="hero hero__quote no-padding">
	<div class="hero__container">
		<div class="hero__image">
			<img src="<?php the_field('hero_quote'); ?>" alt="">
		</div>
		<div class="hero__text">
			<?php if( get_field('hero_quote_text') ): ?>
				<p><?php the_field('hero_quote_text'); ?></p>
			<?php endif; ?>

			<?php if( get_field('quote_author') ): ?>
				<p class="client__quote"><?php the_field('quote_author'); ?></p>
			<?php endif; ?>

			<?php if( get_field('quote_link') ): ?>
				<a href="<?php the_field('quote_link'); ?>" class="readmore"><span class="readmore__label"><?php the_field('quote_link_label'); ?></span></a>
			<?php endif; ?>

		</div>
	</div><!-- /hero__container -->
</section>