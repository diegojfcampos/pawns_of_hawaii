<?php

//Creating dynamically the main navbar
$menu_items = array(
    array(
        'label' => 'Home',
        'url' => '/pawns_of_hawaii/index.php',
    ),
    array(
        'label' => 'Find a Pawn',
        'url' => '/pawns_of_hawaii/views/findapawn.php',
    ),
    array(
        'label' => 'Adoption',
        'url' => '/pawns_of_hawaii/views/adopt.php',
    ),
   
    array(
        'label' => 'Testimonial',
        'url' => '/pawns_of_hawaii/views/testimonial.php',        
    ),
     array(
        'label' => 'Donate',
        'url' => '/pawns_of_hawaii/views/donate.php',
    ),
    array(
        'label' => 'Contact',
        'url' => '/pawns_of_hawaii/views/contact.php',
    ),
    

);

foreach ($menu_items as $item) {

    echo "<a href='" . $item['url'] . "'>" . $item['label'] . "</a>";

};

?>