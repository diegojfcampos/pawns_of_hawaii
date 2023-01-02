<?php
$menu_items = array(
    array(
        'label' => 'Home',
        'url' => '/index.php',
        'previleges' => 'public'
    ),
    array(
        'label' => 'Index Edit',
        'url' => '/profile.php',
        'previleges' => 'public'
    ),
    array(
        'label' => 'Find a Pawn',
        'url' => '/admin.php',
        'previleges' => 'admin'
    ),
    array(
        'label' => 'Find a Pawn Edit',
        'url' => '/admin.php',
        'previleges' => 'admin'
    ),
    array(
        'label' => 'Adopt',
        'url' => '/manage_users.php',
        'previleges' => 'admin'
    ),
    array(
        'label' => 'Adopt Edit',
        'url' => '/manage_users.php',
        'previleges' => 'admin'
    ),

);

echo '<a>';
foreach ($menu_items as $item) {
    if ($item['privilégios'] == 'public' || $_SESSION['privilégios'] == $item['privilégios']) {
        echo '<a href="' . $item['url'] . '">' . $item['label'] . '</a>';
    }
}
echo '</a>';


?>
