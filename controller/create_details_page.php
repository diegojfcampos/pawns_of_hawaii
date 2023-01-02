<?php include("../includes/header.php"); ?>
<main>
    <?php
    require_once('../config/dbconnect.php');

    //Starting validations
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        /*I don't need verify datas ex: if(!empty($email) $$ !empty($password)) because the
        essentials to the database  and  to execute this system are required on the form 
        so will never be empty before posted*/

        //Instancing variables
        $code = trim($_POST['code']);

        //Preparing query
        $queryChecPet = "SELECT * FROM pet where code ='$code'";
        $checkResult = mysqli_query($conn, $queryChecPet);

        if (mysqli_num_rows($checkResult) == 1) {
            $pet_data = mysqli_fetch_array($checkResult);      
        
                echo <<<EOT
                <section class='detail-container'>
                    <div class='photo'>
                        <img src='/pawns_of_hawaii/assets/img/dog-contact.png'>
                    </div>
                    <section class='detail-info'>

                        <div class='details'>
                            <h1>Code: </h1> 
                            <p>{$pet_data['code']}</p>
                        </div>

                        <div class='details'>
                            <h1>Name: </h1>
                            <p>{$pet_data['name']}</p>
                        </div>

                        <div class='details'>
                            <h1>Age: </h1> 
                            <p>{$pet_data['age']}</p>
                        </div>

                        <div class='details'>
                            <h1>Breed: </h1> 
                            <p>{$pet_data['breed']}</p>
                        </div>

                        <div class='details'>
                            <h1>City: </h1>
                            <p>{$pet_data['city']}</p>
                        </div>

                        <div class='details-about'>
                            <h1>About: </h1>
                            <p>{$pet_data['description']}</p>
                        </div>                        
                    </section>
                    
                    
                </section>
                EOT;
        }
    }
    ?>

</main>
<?php include("../includes/footer.php"); ?>