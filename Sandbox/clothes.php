<?php
require 'header.php'
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
                            <h2>Ubrania</h2>
                            <br><br>
                            <form method="post">
                                <select name="ubrania">
                                    <option value="">Wybierz z listy</option>
                                    <option value="boots">Buty</option>
                                    <option value="jackets">Kurtki</option>
                                    <option value="pants">Spodnie</option>
                                    <option value="shirts">Koszulki</option>
                                 
                            
                                 </select>
                                 <button type="submit" name="ubrania-submit">Zatwierdz</button>
                            </form>
                          
                     
                         
                      </form>
                 
                 ';



        }
        else{
            echo '<p>Tylko dla zalogowanych użytkowników</p>';
        }
        ?>




    </div>
</main>