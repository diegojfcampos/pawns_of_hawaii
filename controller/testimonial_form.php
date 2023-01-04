
<section class="form-sections">
        <form action="/pawns_of_hawaii/controller/testimonial_post.php"  method="post">

            <h1 class="formsTitle"> Send us a testimonial ...</h1>

            <label for="fname">First Name</label>
            <input type="text" id="fnameContact" name="firstname" value="<?php echo $_SESSION['fname']; ?>" disabled>

            <label for="lname">Last Name</label>
            <input type="text" id="lnameContact" name="lastname" value="<?php echo $_SESSION['lname']; ?>" disabled>

            <label for="email">Email</label>
            <input type="text" id="emailContact" name="email" value="<?php echo $_SESSION['email']; ?>" disabled>

            <label for="subject">Subject</label>
            <textarea id="subject" name="subject" placeholder="Write your testimonial.." style="height:200px"></textarea>
            
            <div class="btnForm">
                <input class="btnForm" type="reset" value="Reset">
                <input class="btnForm" type="submit" value="Send">
            </div>            

        </form>

    </section>