<?php
require "header.php";
?>

<main>
    <div class="wrapper-main">
        <section class="section-default">
            <?php
              if (isset($_SESSION['userId'])){
                  echo '<p class="loginResponse">Zalogowano!</p>';
              }
              else{
                  echo '<p class="loginResponse">Wylogowano!</p>';
              }
            ?>


        </section>
    </div>


</main>



<?php
require "footer.php";
?>
