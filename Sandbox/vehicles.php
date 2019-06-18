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
                            <h2>Samochody</h2>
                            <br><br>
                            <form method="post">
                                <select name="samochody">
                                    <option value="">Wybierz z listy</option>
                                    <option value="dostawcze">Dostawcze</option>
                                    <option value="osobowe">Osobowe</option>
                                    
                                 
                            
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