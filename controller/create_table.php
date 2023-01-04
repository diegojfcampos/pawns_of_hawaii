<?php
/*Creating dynamic tables where depending of the origin of the call
 will create a table with datas from the specifc database*/
try{

    //Including DB Connection using require_once as better pratice.
    require_once('../config/dbconnect.php');
    //If from findapawn.php
    switch ($_SERVER['PHP_SELF']) {
        case '/pawns_of_hawaii/views/findapawn.php':

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
            };

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
            break;
        //If from testimonial.php
        case '/pawns_of_hawaii/views/testimonial.php':
            /* Creating dynamically the header of the table*/
            
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
            break;

        //If from contact.php
        case '/pawns_of_hawaii/views/contact.php':
            /* Creating dynamically the header of the table*/
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
        break;
         
        default:
            break;


    }















} catch (Exception $e) {
    echo 'Caught exception: ', $e->getMessage(), "\n";
}







?>