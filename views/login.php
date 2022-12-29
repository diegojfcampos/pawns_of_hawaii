<?php include("../includes/header.php") ?>
<main>
    <section class="login-section">
        <form action="/pawns_of_hawaii/controller/register.php" method="post">        
            <div class="login-form">
            <h1>Login</h1><br>
                <label for="email">E-mail:</label><br>
                <input type="email" id="registerEmail" name="email" required><br>
                <label for="passwordRegister">Password:</label><br>
                <input type="password" id="registerPassword" name="password" required><br>
                <label for="registerStatus"></label><br><br>
                <input class="btnForm" type="reset" value="Reset">
                <input class="btnForm" type="submit" value="Login">
                <div class="linkform">
                <a href="signup.php">Sign-Up</a>
                </div>
            </div>
            
        </form>
</section>
</main>
<?php include("../includes/footer.php") ?>