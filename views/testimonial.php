<?php include("../includes/header.php"); ?>
<main>    
    <section class="form-sections">
        <form action="action_page.php"  method="post">

            <h1 class="formsTitle"> Send us a testimonial ...</h1>

            <label for="fname">First Name</label>
            <input type="text" id="fnameContact" name="firstname" placeholder="Your name..">

            <label for="lname">Last Name</label>
            <input type="text" id="lnameContact" name="lastname" placeholder="Your last name..">

            <label for="email">Email</label>
            <input type="text" id="emailContact" name="email" placeholder="Your email..">

            <label for="subject">Subject</label>
            <textarea id="subject" name="subject" placeholder="Write your testimonial.." style="height:200px"></textarea>
            
            <div class="btnForm">
                <input class="btnForm" type="reset" value="Reset">
                <input class="btnForm" type="submit" value="Send">
            </div>            

        </form>
        <div class="linkform">
            <a class="link" href="signup.php">Sign-Up</a>
        </div>
    </section>
    
</main>

<?php include("../includes/footer.php"); ?>