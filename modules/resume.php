<section id="resume">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3 class="header">CV - <?php the_title(); ?></h3>
				<ul class="list__resume ">
				 	<li>
				 		<ul>
				 			<li>
				 				<p class="green">Stilling:</p>
				 			</li>
				 			<li>
				 				<p><?php the_field('cv_title'); ?></p>
				 			</li>
				 		</ul>
				 	</li>
				 	<li>
				 		<ul>
				 			<li>
				 				<p class="green">Født:</p>
				 			</li>
				 			<li>
				 				<p><?php the_field('born'); ?></p>
				 			</li>
				 		</ul>
				 	</li>
				 </ul>
				<h4 class="subheader">Praktisk baggrund</h4>
				
				<ul class="list__resume ">
					<?php
						// check if the repeater field has rows of data
						if( have_rows('prac_back') ):

						 	// loop through the rows of data
						    while ( have_rows('prac_back') ) : the_row(); ?>

						        <li>
							 		<ul>
							 			<li>
							 				<p><?php the_sub_field('prac_back_label'); ?></p>
							 			</li>
							 			<li>
							 				<p><strong><?php the_sub_field('prac_back_header'); ?></strong></p>
							 				<p><?php the_sub_field('prac_back_content'); ?></p>
							 			</li>
							 		</ul>
							 	</li>

						  <?php  endwhile;
					else : endif;?>

				</ul>
			

				<h4 class="subheader">Teoretisk Uddannelse:</h4>

				<ul class="list__resume">
					<?php
						// check if the repeater field has rows of data
						if( have_rows('teo_back') ):

						 	// loop through the rows of data
						    while ( have_rows('teo_back') ) : the_row(); ?>

						        <li>
							 		<ul>
							 			<li>
							 				<p><?php the_sub_field('prac_back_label'); ?></p>
							 			</li>
							 			<li>
							 				<p><strong><?php the_sub_field('prac_back_header'); ?></strong></p>
							 				<p><?php the_sub_field('prac_back_content'); ?></p>
							 			</li>
							 		</ul>
							 	</li>

						  <?php  endwhile;
					else : endif;?>

				</ul>

			</div>
		</div><!-- /row -->
	</div><!-- /container -->
</section>