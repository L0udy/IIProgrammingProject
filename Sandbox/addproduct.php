<?php
require "header.php";
?>
<main>
    <div>

        <?php
        if (isset($_SESSION['userId'])){
            echo '
                      <form action="productmenager.php" method="post">
                      <br>
                      <h4>Wybierz kategorię</h4>
                           
                    <br><br>
                            <button type="submit" name="clothes-submit">Ubrania</button>
                            <button type="submit" name="cars-submit">Samochody</button>
                      
                      </form>
                 
                 ';

        }
        else{
            echo '<p>Tylko dla zalogowanych użytkowników</p>';
        }
        ?>




    </div>
</main>

