<?php 
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
      $queryGetContact = "SELECT * from contact";
      $getContactResult = mysqli_query($conn, $queryGetContact);

      if (!$getContactResult) {
        echo "Problem to get testimonial list";
      } else {
        while ($user_data = mysqli_fetch_array($getContactResult)) {
          echo "<tr>";
          echo "<td>" . $user_data['messageid'] . "</td>";
          echo "<td>" . $user_data['firstname'] . "</td>";
          echo "<td>" . $user_data['lastname'] . "</td>";
          echo "<td>" . $user_data['email'] . "</td>";
          echo "<td>" . $user_data['textmessage'] . "</td>";
          echo "</tr>";
        }
      }
?>