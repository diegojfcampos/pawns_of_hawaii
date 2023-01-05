

<?php
//Including DB Connection using require_once as better pratice.
require_once('../config/dbconnect.php');

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
    array(
        'label' => 'Edit',
    ),
);
foreach ($menu_items as $item) {
    echo "<th href=>" . $item['label'] . "</th>";
}
/*

Creating Table dynamacally

*/

//Creating Query
$queryGetPet = "SELECT * from pet";
$getPetResult = mysqli_query($conn, $queryGetPet);

if (!$getPetResult) {
    echo "Problem to get pet list";
} else {
    while ($user_data = mysqli_fetch_array($getPetResult)) {
        echo "<tr>";
        echo "<td>" . $user_data['code'] . "</td>";
        echo "<td>" . $user_data['name'] . "</td>";
        echo "<td>" . $user_data['age'] . "</td>";
        echo "<td>" . $user_data['breed'] . "</td>";
        echo "<td>" . $user_data['city'] . "</td>";
        echo "<td>" . $user_data['description'] . "</td>";
        echo "<td>";
        echo "<form action='../controller/findapawn_form_edit.php' method='post'>";
        echo "<input type='hidden' name='petid' value='" . $user_data['petid'] . "'>";
        echo "<input type='submit' value='Edit'>";
        echo "</form>";
        echo "</td>";
        echo "</tr>";
    }
}
?>