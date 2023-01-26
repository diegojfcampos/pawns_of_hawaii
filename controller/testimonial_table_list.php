<?php
/* Creating dynamically the header of the table*/

/*Creating dynamic tables where depending of the origin of the call
will create a table with datas from the specifc database*/


//Including DB Connection using require_once as better pratice.
require_once('../config/dbconnect.php');

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
}
;

//Creating Query
$queryGetTestimonial = "SELECT * from testimonial WHERE visible = 1";
$getTestimonialResult = mysqli_query($conn, $queryGetTestimonial);

if (!$getTestimonialResult) {
    echo "Problem to get testimonial list";
} else {
    while ($user_data = mysqli_fetch_array($getTestimonialResult)) {
        echo "<tr>";
        echo "<td>" . $user_data['testimonialid'] . "</td>";
        echo "<td>" . $user_data['firstname'] . "</td>";
        echo "<td>" . $user_data['lastname'] . "</td>";
        echo "<td>" . $user_data['email'] . "</td>";
        echo "<td>" . $user_data['testimonial'] . "</td>";
        echo "</tr>";
    }
}




?>