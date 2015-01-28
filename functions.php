<?php 
	
	/*** custom menu ***/

	add_action('init', 'register_custom_menu');   

	function register_custom_menu() { 
		register_nav_menu('main_nav', __('Hovedmenu')); 
	}

	/*** custom styles in WYISWYG ***/

	function wpb_mce_buttons_2($buttons) {
		array_unshift($buttons, 'styleselect');
		return $buttons;
	}
	add_filter('mce_buttons_2', 'wpb_mce_buttons_2');
		
		/*
		* Callback function to filter the MCE settings
		*/

		function my_mce_before_init_insert_formats( $init_array ) {  

		// Define the style_formats array

			$style_formats = array(  
				// Each array child is a format with it's own settings
				array(  
					'title' => 'Link',  
					'block' => 'span',  
					'classes' => 'call-to-action',
					'wrapper' => false,
					
				),  

				array(  
					'title' => 'Grøn',  
					'block' => 'span',  
					'classes' => 'green',
					'wrapper' => false,
					
				),  
			
			);  
			// Insert the array, JSON ENCODED, into 'style_formats'
			$init_array['style_formats'] = json_encode( $style_formats );  
			
			return $init_array;  
		  
		} 
		// Attach callback to 'tiny_mce_before_init' 
		add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' ); 

		// Breadcrumbs 


		function the_breadcrumb() {
		    global $post;
		    echo '<ol class="breadcrumb">';
		    if (!is_home()) {
		        echo '<li><a href="';
		        echo get_option('home');
		        echo '">';
		        echo 'Forside';
		        echo '</a></li></li>';
		        if (is_category() || is_single()) {
		            echo '<li>';
		            the_category(' </li><li> ');
		            if (is_single()) {
		                echo '</li><li>';
		                the_title();
		                echo '</li>';
		            }
		        } elseif (is_page()) {
		            if($post->post_parent){
		                $anc = get_post_ancestors( $post->ID );
		                $title = get_the_title();
		                foreach ( $anc as $ancestor ) {
		                    $output = '<li><a href="'.get_permalink($ancestor).'" title="'.get_the_title($ancestor).'">'.get_the_title($ancestor).'</a></li> <li class="separator"></li>';
		                }
		                echo $output;
		                echo '<title="'.$title.'"> '.$title.'</strong>';
		            } else {
		                echo '<li>'.get_the_title().'</li>';
		            }
		        }
		    }
		    elseif (is_tag()) {single_tag_title();}
		    elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
		    elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
		    elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
		    elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
		    elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
		    elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
		    echo '</ol>';
		}

	// Excerpt length

	function new_excerpt_length($length) { 	
		return 100; } add_filter('excerpt_length', 'new_excerpt_length'
	);

	function new_excerpt_more($more) {
		global $post; 	return '...'; 
	};

	add_filter('excerpt_more', 'new_excerpt_more');
 
?>