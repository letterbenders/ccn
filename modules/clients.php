<section id="clients">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php
					if(get_field('footer_logos'))
					{ ?>
						<img src="<?php the_field('footer_logos'); ?>">
					<?php } 
					else{ ?>
						<img src="<?php bloginfo('template_directory')?>/assets/img/footer_logos.png">
					<?php }

					?>
			</div>
			<div class="col-md-12 clearfix">
				<div class="clients__text">
					<p>Når mødet med andre kan skabe bæredygtige ideer og ny inspiration som grudlag for egen udvikling</p>
				</div>
			</div>
		</div>
	</div>
</section>