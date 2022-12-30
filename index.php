<main>
    <?php include("./includes/header.php") ?>

    <div class="hero-banner">
        <div class="hero-content">
            <h1>Welcome</h1>
            <p>Find and adopt your new best friend today.</p>
            <button id="btn-hero">Read More</button>
        </div>
    </div>

   <?php       echo '<pre>'; print_r($_POST); echo '</pre>';
            echo var_dump($_POST);
   ?>

</main>
<?php include("./includes/footer.php") ?>