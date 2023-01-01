<?php include("../includes/header.php") ?>
<main>
    <section class="form-sections" id="login-form">
        <form action="/pawns_of_hawaii/controller/dologin.php" method="post">        
            
            <h1 class="formsTitle"> Login</h1>

            <label for="email">E-mail:</label>
            <input type="text" id="registerEmail" name="email" placeholder="Your email." required>

            <label for="passwordRegister">Password:</label>
            <input type="password" id="registerPassword" name="password" placeholder="Your password.." required>

            <label for="registerStatus"></label>

            <div class="btnForm">
                <input class="btnForm" type="reset" value="Reset">
                <input class="btnForm" type="submit" value="Login">
            </div>         

            <div class="linkform">
            <a class="link" href="signup.php">Sign-Up</a>
            </div>
            
        </form>
        
    </section>
</main>
<?php include("../includes/footer.php") ?>