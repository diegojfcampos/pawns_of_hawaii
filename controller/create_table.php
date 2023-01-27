<?php
/*Creating dynamic tables where depending of the origin of the call
will create a table with datas from the specifc database*/
try {

  //Including DB Connection using require_once as better pratice.
  require_once('../config/dbconnect.php');
  //If from findapawn.php

      /* Creating dynamically the header of the table*/
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
          echo "<td>";
          echo "<form action='../controller/findapawn_details_page.php' method='post'>";
          echo "<input type='hidden' name='code' value='" . $user_data['code'] . "'>";
          echo "<input type='submit' value='" . $user_data['code'] . "'>";
          echo "</form>";
          echo "</td>";
          echo "<td>" . $user_data['name'] . "</td>";
          echo "<td>" . $user_data['age'] . "</td>";
          echo "<td>" . $user_data['breed'] . "</td>";
          echo "<td>" . $user_data['city'] . "</td>";
          echo "<td>" . $user_data['description'] . "</td>";
          echo "</tr>";
        }
      }
     
} catch (Exception $e) {
  echo 'Caught exception: ', $e->getMessage(), "\n";
}







?>