<section id="listing">
	<div class="container">
		<div class="row">
			<div class="listing__items page-content">
				<?php

					// check if the repeater field has rows of data
					if( have_rows('list_items') ):

					 	// loop through the rows of data
					    while ( have_rows('list_items') ) : the_row();?>

					        <div class="listing__items__item clearfix">
								<div class="col-md-3 col-sm-6">
									<p class="image">
										<img src="<?php the_sub_field('item_img'); ?>" alt="">
									</p>
								</div>
								<div class="col-md-9 col-sm-6">
									<h4 class="name"><?php the_sub_field('item_name'); ?></h4>
									<p class="desc"><?php the_sub_field('item_content'); ?> <a class="expander" href="#">Læs</a></p>
									<div class="content">
									   <p><?php the_sub_field('item_content_collapsed'); ?></p>
									 </div>
									<div class="row">
										<div class="contact">
											<div class="col-md-6">
												<a href="mailto:<?php the_sub_field('item_email'); ?>" class="email"><?php the_sub_field('item_email'); ?></a> 
											</div>
											<div class="col-md-6">
												<ul class="list__social">
													<li class="linkedin">
														<?php

															if(get_sub_field('item_linkedin_url'))
															{
															echo '<a href="' . get_field('item_linkedin_url')  . ' target="_blank">Linkedin</a>';
															}

														?>
														<!--<a href="<?php the_sub_field('item_linkedin_url'); ?>" target="_blank">Linkedin</a>-->
													</li>
													<!--<li class="twitter">
														<a href="<?php the_sub_field('item_twitter_url'); ?>" target="_blank">Twitter</a>
													</li>
													<li class="skype">
														<a href="<?php the_sub_field('item_skype_url'); ?>" target="_blank">Skype</a>
													</li>-->
												</ul>
											</div>
										</div><!-- /contact -->
									</div>
								</div>
								<div class="col-md-9 col-md-offset-3">
									<hr>
								</div>	
							</div><!-- /listing__items__item -->

					   <?php endwhile; endif; ?>

			</div><!-- /listing__items -->
		</div><!-- /row-->
	</div><!-- /container -->
</section>

<?php include 'hero-divider.php' ?>

<section id="listing">
	<div class="container">
		<div class="row">
			<div class="listing__items page-content">
				<?php

					// check if the repeater field has rows of data
					if( have_rows('list_items_2') ):

					 	// loop through the rows of data
					    while ( have_rows('list_items_2') ) : the_row();?>

					        <div class="listing__items__item clearfix">
								<div class="col-md-3 col-sm-6">
									<p class="image">
										<img src="<?php the_sub_field('item_img_2'); ?>" alt="">
									</p>
								</div>
								<div class="col-md-9 col-sm-6">
									<h4 class="name"><?php the_sub_field('item_name_2'); ?></h4>
									<p class="desc"><?php the_sub_field('item_content_2'); ?> <a class="expander" href="#">Læs</a></p>
									<div class="content">
									   <?php the_sub_field('item_content_collapsed_2'); ?> 
									 </div>
									<div class="row">
										<div class="contact">
											<div class="col-md-6">
												<a href="mailto:<?php the_sub_field('item_email_2'); ?>" class="email"><?php the_sub_field('item_email_2'); ?></a> 
											</div>
											<div class="col-md-6">
												<ul class="list__social">
													<li class="linkedin">
														<a href="<?php the_sub_field('item_linkedin_url_2'); ?>" target="_blank">Linkedin</a>
													</li>
													<!--<li class="twitter">
														<a href="<?php the_sub_field('item_twitter_url_2'); ?>" target="_blank">Twitter</a>
													</li>
													<li class="skype">
														<a href="<?php the_sub_field('item_skype_url_2'); ?>" target="_blank">Skype</a>
													</li>-->
												</ul>
											</div>
										</div><!-- /contact -->
									</div>
								</div>
								<div class="col-md-9 col-md-offset-3">
									<hr>
								</div>	
							</div><!-- /listing__items__item -->

					   <?php endwhile; endif; ?>

			</div><!-- /listing__items -->
		</div><!-- /row-->
	</div><!-- /container -->
</section>