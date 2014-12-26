<section class="hero hero__divider">
	<div class="hero__container">
		<div class="hero__image">
			<img src="<?php the_field('hero_divider'); ?>" alt="">
		</div>
		<div class="hero__text">
			<p><?php the_field('hero_divider_text'); ?></p>

			<?php if( get_field('quote_author') ): ?>
				<p class="client__quote"><?php the_field('quote_author'); ?></p>
			<?php endif; ?>

			<?php if( get_field('quote_link') ): ?>
				<a href="<?php the_field('quote_link'); ?>" class="readmore"><span class="readmore__label"><?php the_field('quote_link_label'); ?></span></a>
			<?php endif; ?>
		</div>
	</div>
</section>