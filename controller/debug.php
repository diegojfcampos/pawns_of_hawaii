<?php 

function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}

    
//Printing Array
echo '<pre>'; print_r($_POST); echo '</pre>';

//Debuggin
echo var_dump($_POST);

/* Output
array(5) { ["fname"]=> string(5) "Diego" ["lname"]=> string(20) "de Jesus Faria Campo" 
["email"]=> string(23) "diegojfcampos@gmail.com" ["passwordRegister"]=> string(3) "123"
["passwordCheck"]=> string(3) "123" } 
 */



?>