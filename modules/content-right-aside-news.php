<section id="content-right-aside" class="no-padding">
	<div class="container">
		<div class="row">
			<div class="page-content">
				<div class="col-md-8">
					<article class="page-body">
						<div id="content" class="widecolumn" role="main">
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								
								<p class="imagery no-margin-top">
									<img src="<?php the_field('post_image'); ?>" alt="">	
								</p>
								<h4 class="content-header"><?php the_title(); ?></h4>
								<?php the_content('<p class="serif">' . __('Read the rest of this entry &raquo;') . '</p>'); ?>
									
							<?php endwhile; endif; ?>
					</article><!-- page-body -->
				</div>
				<div class="col-md-4">
					<aside class="no-margin-top">
						<ul class="list__right__aside">
							<li>
								<h5 class="header">Nyheder med holdning</h5>
								<p>Lorem ipsum <a href="#">text</a> dolor sit amet, consectetur adipisicing elit. Autem nulla beatae a perspiciatis consequuntur sed obcaecati blanditiis, adipisci nam doloribus alias, sit odio aperiam necessitatibus atque illum eum eveniet iure.</p>
							</li>
							<li>
								<h5 class="header">Seneste indlæg</h5>
								<ul>
									<?php
										$recent_posts = wp_get_recent_posts();
										foreach( $recent_posts as $recent ){
											echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
										}
									?>
								</ul>
							</li>
						</ul>
					</aside>
				</div>
			</div><!-- /page-content -->
		</div> <!-- /row -->
		<div class="row">
				<div class="col-md-12">
					<hr class="spaced">
				</div>
			</div><!-- /row -->
	</div><!-- /container -->
</section>