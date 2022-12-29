<?php include("../includes/header.php") ?>
<main>
    <section class="login-section">
        <form action="/pawns_of_hawaii/controller/register.php" method="post">
            <div class="login-form">
                <h1>Registration</h1>
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
                <label for="registerStatus"></label><br>   
                <input class="btnForm" type="reset" value="Reset">  
                <input class="btnForm" type="submit" value="Register">
                <div class="linkform">
                <a href="login.php">Log-in</a>
                </div>
                
                                
            </div>      
        
        </form>
    </section>
</main>
<?php include("../includes/footer.php") ?>