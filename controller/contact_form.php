<main>    
    <section class="form-sections">
        <form action="../controller/contact_post.php"  method="post">

            <label for="firstname">First Name *</label>
            <input type="text" id="fnameContact" name="firstname" placeholder="Your name.." required>

            <label for="lastname">Last Name *</label>
            <input type="text" id="lnameContact" name="lastname" placeholder="Your last name.." required>

            <label for="email">Email *</label>
            <input type="text" id="emailContact" name="email" placeholder="Your email.." required>


            <label for="subject">Subject *</label>
            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" required></textarea>
            
            <div class="btnForm">
                <input class="btnForm" type="reset" value="Reset">
                <input class="btnForm" type="submit" value="Send">
            </div>            

        </form>
        <div class="linkform">
            <a class="link" href="signup.php">Sign-Up</a>
        </div>
    </section>