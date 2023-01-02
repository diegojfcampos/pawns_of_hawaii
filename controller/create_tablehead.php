<?php

switch ($_SERVER['PHP_SELF']) {
  case '/pawns_of_hawaii/views/findapawn.php':
    $menu_items = array(
      array(
        'label' => 'Code',
      ),
      array(
        'label' => 'Name',
      ),
      array(
        'label' => 'Age',
      ),
      array(
        'label' => 'Breed',
      ),
      array(
        'label' => 'City',
      ),
      array(
        'label' => 'About',
      ),

    );

    foreach ($menu_items as $item) {

      echo "<th href=>" . $item['label'] . "</th>";

    }
    ;
    break;
  case '/pawns_of_hawaii/views/testimonial.php':
    $menu_items = array(
      array(
        'label' => 'ID',
      ),
      array(
        'label' => 'First Name',
      ),
      array(
        'label' => 'Last Name',
      ),
      array(
        'label' => 'Email',
      ),
      array(
        'label' => 'Message',
      ),

    );

    foreach ($menu_items as $item) {

      echo "<th href=>" . $item['label'] . "</th>";

    };
  break;

  case '/pawns_of_hawaii/views/contact.php':
    $menu_items = array(
      array(
        'label' => 'ID',
      ),
      array(
        'label' => 'First Name',
      ),
      array(
        'label' => 'Last Name',
      ),
      array(
        'label' => 'Email',
      ),
      array(
        'label' => 'Message',
      ),

    );

    foreach ($menu_items as $item) {

      echo "<th href=>" . $item['label'] . "</th>";

    };
  break;
  default:
    break;
}
?>