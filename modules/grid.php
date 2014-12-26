<section id="grid">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="legend-header">
					<h3>
						<span>Tovholdere i CCN</span>
					</h3>
				</div>
			</div>
		</div><!-- /row -->
		<div class="row">
			<?php

				// check if the repeater field has rows of data
				if( have_rows('grid_items') ):

				 	// loop through the rows of data
				    while ( have_rows('grid_items') ) : the_row(); ?>
					
				        <div class="col-md-4 col-sm-6 grid__item">
							<a href="<?php the_sub_field('profile_link'); ?>">
								<p class="image">
									<img src="<?php the_sub_field('image'); ?>" alt="">
								</p>
							</a>
								<div class="info">
									<a href="<?php the_sub_field('profile_link'); ?>"><h4 class="name"><?php the_sub_field('name'); ?></h4></a>
									<hr>
									<p class="title"><?php the_sub_field('title'); ?></p>
									<p class="location"><?php the_sub_field('company'); ?></p>
									<a href="mailto:<?php the_sub_field('email'); ?>" class="email"><?php the_sub_field('email'); ?></a>
									<p class="phone">Tlf. <?php the_sub_field('phone'); ?></p>
								</div>
							
						</div><!-- /grid__item -->

				   <?php  endwhile; endif; ?>

		</div><!-- /row -->
	</div><!-- /container -->
</section>