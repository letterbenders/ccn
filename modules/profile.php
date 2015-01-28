<section id="profile">
	<div class="container">
		<div class="row">
			<div class="profile__top">
				<div class="col-md-12">
					<?php the_breadcrumb(); ?>
				</div>
				<div class="col-md-12">
					<br><br>
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
							<li class="no-margin">
								<ul>
									<li class="no-margin">
										<h4 class="name"><?php the_title(); ?></h4>
										<p class="role"><?php the_field('title'); ?></p>
										<br>
									</li>
								</ul>
							</li>
							<li class="phone">
								<ul>
									<li class="icon">
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
										<img src="<?php bloginfo('template_directory')?>/assets/img/web_icon.svg" alt="">
									</li>
									<li class="no-margin-top">
										<a href="<?php the_field('website'); ?>" target="_blank"><?php the_field('website'); ?></a>
									</li>
								</ul>
							</li>
							<!--<hr>-->
							<li class="linkedin no-margin-top">
								<ul>
									<li class="linkedin icon no-margin-top">
										<!--<img src="<?php bloginfo('template_directory')?>/assets/img/linkedin_grey.svg" alt="">-->
									</li>
									<li class="no-margin-top">
										<p><!--<a href="<?php the_field('linkedin_link'); ?>" target="_blank">LINKEDIN</a>--></p>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
		</div><!-- /row -->
	</div><!-- /container -->
</section>