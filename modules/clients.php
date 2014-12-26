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
						<img src="<?php bloginfo('template_directory')?>/dist/img/footer_logos.png">
					<?php }

					?>
			</div>
			<div class="col-md-12 clearfix">
				<div class="clients__text">
					<p>Hvor mødet med andre virksomheder og organisationsformer er en garanti for bæredygtige ideer og ny inspiration som grundlag for udvikling når det handler om mennesker</p>
				</div>
			</div>
		</div>
	</div>
</section>