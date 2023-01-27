<?php include("./includes/header.php"); echo "View Sign Up";?>
<main>
    <form action="../controller/register.php" method="post">
        <div class="signup-form">
            <h1>Registration</h1><br>
            <label for="fname">First Name:</label><br>
            <input type="text" id="fname" name="fname"><br>
            <label for="lname">Last Name:</label><br>
            <input type="text" id="lname" name="lname"><br>
            <label for="email">E-mail:</label><br>
            <input type="email" id="registerEmail" name="email" required><br>
            <label for="passwordRegister">Password:</label><br>
            <input type="password" id="registerPassword" name="passwordRegister" required><br>
            <label for="passwordCheck">Confirm Password:</label><br>            
            <input type="password" id="registerPasswordCheck" name="passwordCheck" required><br>
            <label for="registerStatus"></label><br><br>    
            <input id="submitRegister"type="submit" value="Register">            
        </div>      
      
    </form>
</main>
<?php include("./includes/footer.php") ?>