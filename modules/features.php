<section id="features">
	<div class="container">
		<div class="row">
			<div class="page-content">
				<div class="col-md-6 col">
					<?php include 'hero-transparent.php' ?>
				</div>
				<div class="col-md-6 col">
					<h4 class="uppercase"><?php the_field('feature_header'); ?></h4>
					<p><?php the_field('feature_text'); ?></p>
					<a href="<?php the_field('feature_link'); ?>" class="readmore"><span class="readmore__label">Læs mere</span></a>
				</div>
			</div><!-- /page-content -->
		</div><!-- /row -->
	</div><!-- /container -->
</section>

<section id="features-3__items">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-4 features-3__item">
				<div class="features-3__item__icon">
					<img src="<?php bloginfo('template_directory')?>/assets/img/delfin_icon.svg" alt="">
				</div>
				<h4 class="features-3__item__header"><?php the_field('ide_header'); ?></h4>
				<hr class="features-3__item__hr">
				<p class="features-3__item__text"><?php the_field('ide_text'); ?></p>
				<a href="<?php the_field('ide_link'); ?>" class="readmore"><span class="readmore__label">Læs mere</span></a>
			</div>
			<div class="col-md-4 col-sm-4 features-3__item">
				<div class="features-3__item__icon">
					<img src="<?php bloginfo('template_directory')?>/assets/img/people_icon.svg" alt="">
				</div>
				<h4 class="features-3__item__header"><?php the_field('medlems_header'); ?></h4>
				<hr class="features-3__item__hr">
				<p class="features-3__item__text"><?php the_field('medlems_text'); ?></p>
				<a href="<?php the_field('medlems_link'); ?>" class="readmore"><span class="readmore__label">Læs mere</span></a>
			</div>
			<div class="col-md-4 col-sm-4 features-3__item">
				<div class="features-3__item__icon">
					<img src="<?php bloginfo('template_directory')?>/assets/img/sagt-om_icon.svg" alt="">
				</div>
				<h4 class="features-3__item__header"><?php the_field('sagt-om_header'); ?></h4>
				<hr class="features-3__item__hr">
				<p class="features-3__item__text"><?php the_field('sagt-om_text'); ?></p>
				<a href="<?php the_field('sagt-om_link'); ?>" class="readmore"><span class="readmore__label">Læs mere</span></a>
			</div>
		</div>
	</div>
</section>