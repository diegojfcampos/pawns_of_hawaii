<main>
    <?php include("../includes/header.php") ?>

    <h1 class="edit-titles"> Pet List</h1>
    <section class="table-section">

        <table class="tables">

            <tr>
                <?php include("./controller/create_table.php") ?>
            </tr>

        </table>

    </section>
    <?php switch ($_SESSION['privileges']) {        
        case 'admin':
            echo '<h1 class="edit-titles"> Pet List Edit</h1>';
        }
    ?>
    
    <section class="table-section">
        
        <table class="tables">

            <tr>
                <?php include("../controller/findapawn_management.php") ?>
            </tr>

        </table>

    </section>




</main>
<?php include("../includes/footer.php") ?>