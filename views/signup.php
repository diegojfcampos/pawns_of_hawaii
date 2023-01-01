<?php include("../includes/header.php") ?>
<main>
    <section class="form-sections" id="reg-form">
        <form action="/pawns_of_hawaii/controller/register.php" method="post">

            <h1 class="formsTitle"> Registration</h1>

            <label for="fname">First Name:</label><br>
            <input type="text" id="fname" name="fname" placeholder="Your Name.."><br>

            <label for="lname">Last Name:</label><br>
            <input type="text" id="lname" name="lname" placeholder="Your last name.."><br>

            <label for="email">E-mail:</label><br>
            <input type="text" id="registerEmail" name="email" required placeholder="Your email.."><br>

            <label for="passwordRegister">Password:</label><br>
            <input type="password" id="registerPassword" name="passwordRegister" placeholder="Your password.."required><br>

            <label for="passwordCheck">Confirm Password:</label><br>
            <input type="password" id="registerPasswordCheck" name="passwordCheck" placeholder="Re-type password.."required><br>

            <label for="registerStatus"></label><br>

            <div class="btnForm">
                <input class="btnForm" type="reset" value="Reset">
                <input class="btnForm" type="submit" value="Sign">
            </div>

            <div class="linkform">
                <a class="link" href="login.php">Log-in</a>
            </div>


        </form>
    </section>
</main>
<?php include("../includes/footer.php") ?>