<section class="hero hero__no-text no-padding no-margin">
	<div class="hero__container">
		<div class="hero__image">
			<img src="<?php the_field('hero_empty', 13); ?>">
		</div>
	</div><!-- /hero__container -->
</section>

<section id="masonry__header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="legend-header">
					<h3><span>Nyheder med holdning</span></h3>
				</div>
			</div>
		</div><!-- row -->
	</div><!-- /container -->
</section>

<section id="masonry">
	<div class="container">
		<div class="row">
			<div class="masonry__items">
				
				<?php if (have_posts()) : ?>

					<?php while (have_posts()) : the_post(); ?>
						
						<div class="masonry__item item">
							<img src="<?php the_field('post_image'); ?>" alt="">
						  	<div class="masonry__item__content">
						  		<h5><?php the_title(); ?></h5>
								<p class="author-date"><?php the_time(__('d.m.Y')) ?> af <?php the_field('author'); ?></p>
							  	<hr>
								<p class="excerpt"><?php the_excerpt(); ?></p>	
						  		<a href="../?page_id=20">Kontakt</a>
						  	</div>
						</div><!-- /masonry__item -->
					<?php endwhile; ?>

				<?php endif; ?>
			</div>
		</div><!-- /row -->
	</div><!-- /container -->
</section>

<section id="news-nav">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
					<div class="navigation">
						<div class="alignleft"><?php next_posts_link(__('<< Ældre indlæg')) ?></div>
						<div class="alignright"><?php previous_posts_link(__('Nyere indlæg >>')) ?></div>
					</div>
			</div>
		</div>
	</div>
</section>