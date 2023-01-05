<section class="form-sections" id="login-form">
        <form action="../views/donate.php"  method="post">

            <h1 class="formsTitle"> Donate your love for a homeless paw...!</h1>
          
            <label for="firstname">First name:</label>
            <input type="text" id="fname" name="fname" />

            <label for="lastname">Last name</label>
            <input type="text" id="lname" name="lname"  /><br/>

            <label for="email">Email </label><br>
            <input type="text" id="mail" name="mail"  /><br/>

            <label for="donate">Donation Amount</label><br/>
              <span><input type="radio" id="donation" name="donation" value="$50"/> $50</span><br/>
              <span><input type="radio" id="donation" name="donation" value="$100"/> $100</span><br/>
              <span><input type="radio" id="donation" name="donation" value="$250"/> $250</span><br/>
              <span><input type="radio" id="donation" name="donation" value="$500"/> $500</span><br/>
              </label>
              <label for="address">Full Address<br/>
              <textarea id="addr"  name="addr" rows="3" class="form-control"></textarea>
            </label><br/>
            <div class="btnForm">                
                <input class="btnForm" type="submit" value="Login">
            </div>       
              


        </form>
        <!-- <div class="linkform">
            <a class="link" href="signup.php">Sign-Up</a>
        </div> -->
    </section>