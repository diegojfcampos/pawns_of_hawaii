<?php
	

	 switch ($_SERVER['PHP_SELF']) {
            case '/paws_of_hawaii/index.php':                  
                //Creating dynamically the main navbar
				$menu_items = array(
					array(
						'label' => 'Home',
						'url' => 'index.php',
					),
					array(
						'label' => 'Find a Pawn',
						'url' => '/paws_of_hawaii/views/findapawn.php',
					),
					array(
						'label' => 'Adoption',
						'url' => '/paws_of_hawaii/views/adopt.php',
					),

					array(
						'label' => 'Testimonial',
						'url' => '/paws_of_hawaii/views/testimonial.php',        
					),
					 array(
						'label' => 'Donate',
						'url' => '/paws_of_hawaii/views/donate.php',
					),
					array(
						'label' => 'Contact',
						'url' => '/paws_of_hawaii/views/contact.php',
					),


				);

				foreach ($menu_items as $item) {

					echo "<a href='" . $item['url'] . "'>" . $item['label'] . "</a>";

				};
                break;            
            default:
			 //Creating dynamically the main navbar
				$menu_items = array(
					array(
						'label' => 'Home',
						'url' => '../index.php',
					),
					array(
						'label' => 'Find a Pawn',
						'url' => '/paws_of_hawaii/views/findapawn.php',
					),
					array(
						'label' => 'Adoption',
						'url' => '/paws_of_hawaii/views/adopt.php',
					),

					array(
						'label' => 'Testimonial',
						'url' => '/paws_of_hawaii/views/testimonial.php',        
					),
					 array(
						'label' => 'Donate',
						'url' => '/paws_of_hawaii/views/donate.php',
					),
					array(
						'label' => 'Contact',
						'url' => '/paws_of_hawaii/views/contact.php',
					),


				);

				foreach ($menu_items as $item) {

					echo "<a href='" . $item['url'] . "'>" . $item['label'] . "</a>";

				};
            
                break;		
		 }




?>