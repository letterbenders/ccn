<section id="two-col">
	<div class="container">
		<div class="page-content clearfix">
			<?php
				if(get_field('page_title'))
				{ ?>
				<div class="row">
					<div class="col-md-12">
						<h4 class="uppercase"><?php the_field('page_title'); ?></h4>
					</div>
				</div><!-- /row -->
			<?php } ?>
		
			<div class="row">
				<article class="page-body">
					<div class="col-sm-6 col col__1-2">
						<?php the_field('left_col'); ?>
					</div>
					<div class="col-sm-6 col col__2-2">
						<?php the_field('right_col'); ?>
					</div>
				</article>
			</div><!-- /row -->
		</div>
	</div>
</section>