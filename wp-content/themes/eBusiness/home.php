<?php 
		if('page' == get_option('show_on_front')){ get_template_part('index');}

		else {get_header();
	
		
		//****** get Home call out
		get_template_part('index','home-callout'); 	

				
		get_footer();
		}
?>