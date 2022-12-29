<?php include("./includes/header.php") ?>
<main>
    <form action="/controller/register.php" method="post">
        <div class="login-form">
            <h1>Login</h1><br>            
            <label for="email">E-mail:</label><br>
            <input type="email" id="registerEmail" name="email" required><br>
            <label for="passwordRegister">Password:</label><br>
            <input type="password" id="registerPassword" name="password" required><br>            
            <label for="registerStatus"></label><br><br>    
            <input id="submitRegister"type="submit" value="Sign-In">            
        </div>      
      
    </form>
</main>
<?php include("./includes/footer.php") ?>