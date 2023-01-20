<main>
    <?php include("../includes/header.php") ?>

    <section class="hero-banner">
        <div class="hero-content">
            <h1>Welcome</h1>
            <p>Find and adopt your new best friend today.</p>
            <a href="views/adopt.php"><button id="btn-hero">Read More</button></a>
        </div>
    </section>

    <section class="pet-section">
        <h1 id="pet-title">Find a Pawn</h1>
        <div class="pet-cards">
            <div class="pet-adoption">
                <div class="pet-name"> Jordan (0085)</div>
                <a href="views/findapawn.php">
                <img src="assets/img/dog1-jordan.jpg" alt="Imagem dog to Adoption" height="250px" width="350px">
                </a>
            </div>

            <div class="pet-adoption">
                <div class="pet-name"> Patty (0102)</div>
                <a href="views/findapawn.php">
                <img src="assets/img/cat1-patty.jpg" alt="Imagem cat to Adoption" height="250px" width="350px">
                </a>
            </div>

            <div class="pet-adoption">
                <div class="pet-name"> Max (0110)</div>
                <a href="views/findapawn.php">
                <img src="assets/img/dog1-max.jpg" alt="Imagem dog to Adoption" height="250px" width="350px">
                </a>
            </div>

            <div class="pet-adoption">
                <div class="pet-name"> Sasha (0070)</div>
                <a href="views/findapawn.php">
                <img src="assets/img/cat2-bella.jpeg" alt="Imagem cat to Adoption" height="250px" width="350px">
                </a>
            </div>
        </div>

    </section>

    <section class="whyadopt">    
           
        <div id="text-whyadopt">
            <h1 id="title-whyadopt">Why adopt a Cat?</h1>
            <p id="content">Adopting a pet is a wonderful way to bring joy and companionship into your life. It's also an act of kindness that helps to save a life and make a positive impact on the community.<br>
            When you adopt a pet, you are giving a second chance to an animal that may have been abandoned, neglected, or surrendered by their previous owner. By providing a loving home and the necessary care, you are giving them the opportunity to live a happy and fulfilling life.<br>
            In addition to the personal rewards of adopting a pet, there are also several social and environmental benefits. Adopting a pet can help to reduce the number of animals that end up in shelters and prevent overpopulation. It can also help to reduce the number of stray animals on the streets, which can have a positive impact on the community.</p><br>
        </div>        

    </section>

    <?php include("../controller/index_manegament.php");?>

    <section class="testimonial-section">
        <h1 id="testimonial-title"> What People Say</h1>
        <div class="testimonial-div">
                   
            <div class="testimonials">
                <div class="testimonial-name"><h1>John Smith</h1></div>
                <p id="testimonial1"> "I adopted my furry best friend from this shelter and I could not be happier. The staff was so helpful and caring, and they really made the process smooth and enjoyable. I highly recommend adopting from this shelter!"</p>
            </div>
            <div class="testimonials">   
                <div class="testimonial-name"><h1>Jane Doe</h1></div>            
                <p id="testimonial2">I was so nervous about adopting a pet, but the staff at this shelter put me at ease and helped me find the perfect match for my family. We have had our new furry family member for a month now and we are all in love! Thank you for everything.</p>
            </div>
            <div class="testimonials">
                <div class="testimonial-name"><h1>Joe Brown</h1></div>
                <p id="testimonial3">We adopted our two furry children from this shelter and we could not be happier. They have brought so much joy to our lives and we are so grateful to the staff for all their help and support. If you are thinking about adopting, this is the place to go!</p>
            </div>
        </div>
        <a href="views/testimonial.php" ><button id="send-testimonial">See..</button></a>
    </section>

    <section class="bottom-pic"></section>


</main>
<?php include("../includes/footer.php") ?>