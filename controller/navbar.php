<?php



//Creating dynamically the main navbar
$menu_items = array(
	array(
		'label' => 'Home',
		'url' => '../index.php',
	),
	array(
		'label' => 'Find a Pawn',
		'url' => '../views/findapawn.php',
	),
	array(
		'label' => 'Adoption',
		'url' => '../views/adopt.php',
	),

	array(
		'label' => 'Testimonial',
		'url' => '../views/testimonial.php',
	),
	array(
		'label' => 'Donate',
		'url' => '../views/donate.php',
	),
	array(
		'label' => 'Contact',
		'url' => '../views/contact.php',
	),


);

foreach ($menu_items as $item) {

	echo "<a href='" . $item['url'] . "'>" . $item['label'] . "</a>";

}
;







?>