<?php include("../includes/header.php"); ?>
<main>
    <?php
    //Requiring Database connection

    //Including DB Connection using require_once as better pratice.
    require_once('../config/dbconnect.php');

    //Starting validations
    if ($_SERVER['REQUEST_METHOD'] == 'POST' || $_SERVER['REQUEST_METHOD'] == 'GET') {

        //Instancing variables
        $petid = trim($_POST['petid']);    
        

        //Preparing query
        $queryChecPet = "SELECT * FROM pet where petid ='$petid'";
        $checkResult = mysqli_query($conn, $queryChecPet);

        if (mysqli_num_rows($checkResult) == 1) {
            //Declaring object with data from database
            $pet_data = mysqli_fetch_array($checkResult);      

            //Creating Form to receive datas and allowing update instance
                echo <<<EOT
                <section class="form-sections" id="login-form">
                    <form action="/pawns_of_hawaii/controller/findapawn_update.php"  method="post">

                        <h1 class="formsTitle"> Edit Pet ...</h1>
                   
                        <input type="hidden" name="petid" value="{$pet_data['petid']}">

                        <label for="code">Code</label>
                        <input type="text" name="code" value="{$pet_data['code']}" >

                        <label for="name">Name</label>
                        <input type="text" name="name" value="{$pet_data['name']}" >

                        <label for="age">Age</label>
                        <input type="text" name="age" value="{$pet_data['age']}" >

                        <label for="breed">Breed</label>
                        <input type="text" name="breed" value="{$pet_data['breed']}" >

                        <label for="city">City</label>
                        <input type="text" name="city" value="{$pet_data['city']}" >

                        <label for="description">Description</label>
                        <textarea rows="10" name="description">{$pet_data['description']}</textarea>           
                        
                        <div class="btnForm">                            
                            <input class="btnForm" type="submit" value="Update">
                        </div>            

                    </form>

                </section>
                EOT;
        }
    }
    ?>

</main>
<?php include("../includes/footer.php"); ?>