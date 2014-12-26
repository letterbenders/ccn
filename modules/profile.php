<section id="profile">
	<div class="container">
		<div class="row">
			<div class="profile__top">
				<div class="col-md-12">
					<?php the_breadcrumb(); ?>
				</div>
				<div class="col-md-12">
					<h3 class="name"><?php the_title(); ?></h3>
					<p class="role"><?php the_field('title'); ?></p>
				</div>
		</div><!-- /row -->
		<div class="row">
			</div><!-- /profile__top -->
			<div class="profile__info">
				<div class="col-sm-6">
					<p class="image">
						<img src="<?php the_field('image'); ?>" alt="">
					</p>
				</div>
				<div class="col-sm-6">
					<div class="contact">
						<ul class="list__contact list__contact__profile">
							<li class="phone no-margin-top">
								<ul>
									<li class="icon no-margin-top">
										<i class="fa fa-phone"></i>
									</li>
									<li>
										<p><?php the_field('phone'); ?></p>
									</li>
								</ul>
							</li>
							<li class="email">
								<ul>
									<li class="icon">
										<i class="fa fa-envelope"></i>
									</li>
									<li>
										<p><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></p>
									</li>
								</ul>
							</li>
							<li class="web">
								<ul>
									<li class="icon">
										<img src="<?php bloginfo('template_directory')?>/dist/img/web_icon.svg" alt="">
									</li>
									<li>
										<a href="<?php the_field('website'); ?>" target="_blank"><?php the_field('website'); ?></a>
									</li>
								</ul>
							</li>
							<hr>
							<li class="linkedin no-margin-top">
								<ul>
									<li class="linkedin icon no-margin-top">
										<img src="<?php bloginfo('template_directory')?>/dist/img/linkedin_grey.svg" alt="">
									</li>
									<li class="no-margin-top">
										<p><a href="<?php the_field('linkedin_link'); ?>" target="_blank">LINKEDIN</a></p>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
		</div><!-- /row -->
	</div><!-- /container -->
</section>