<section id="content-left-aside">
	<div class="container">
		<div class="page-content">
			<div class="row">
				<div class="col-sm-4 col">
					<ul class="aside left-aside">
						<li class="image">
							<img src="<?php the_field('image'); ?>" alt="">
						</li>
						<li class="box">
							<ul class="list__contact list__contact__profile">
								<li class="no-margin">
									<ul>
										<li class="person no-margin">
											<h4><?php the_field('name'); ?></h4>
											<p><?php the_field('title'); ?></p>
										</li>
									</ul>
								</li>
								<li class="phone">
									<ul>
										<li class="icon">
											<i class="fa fa-phone"></i>
										</li>
										<li class="no-margin-top">
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
											<a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a>
										</li>
									</ul>
								</li>
								<li class="linkedin ">
									<ul>
										<li class="icon no-margin-top">
											<img src="<?php bloginfo('template_directory')?>/dist/img/linkedin_grey.svg" alt="">
										</li>
										<li class="no-margin-top">
											<a href="<?php the_field('linkedin_link'); ?>" target="_blank">linkedin</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
					</ul><!-- /aside -->
				</div>
				<div class="col-sm-8 col">
					<?php the_field('content'); ?>
				</div>	
			</div><!-- /row -->
			<div class="row">
				<div class="col-md-12">
					<hr class="spaced">
				</div>
			</div><!-- /row -->
		</div><!-- /page-content -->
	</div>
</section>