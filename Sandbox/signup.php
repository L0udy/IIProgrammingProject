<?php
require "header.php";
?>

<main>

    <div>

        <section>
            <h1 class="signupOpener">Signup</h1>
            <?php
              if (isset($_GET['error'])){
                  if($_GET['error'] == "emptyfields"){
                      echo '<p class="signuperror">Wypełnij wszystkie pola!</p>';
                  }
                  else if($_GET['error'] == "invalidmailuid"){
                      echo '<p class="signuperror">Zła nazwa użytkownika i e-mail!</p>';
                  }
                  else if($_GET['error'] == "invaliduid"){
                      echo '<p class="signuperror">Zła nazwa użytkownika</p>';
                  }
                  else if($_GET['error'] == "invalidmail"){
                      echo '<p class="signuperror">Zły e-mail!</p>';
                  }
                  else if($_GET['error'] == "passwordcheck"){
                      echo '<p class="signuperror">Hasła się nie zgadzają</p>';
                  }
                  else if($_GET['error'] == "usertaken"){
                      echo '<p class="signuperror">Nazwa użytkownika niedostępna</p>';
                  }
              }
              else if (isset($_GET['signup'])){
                  if($_GET['signup'] == "success"){
                      echo '<p class="signuperror">Pomyślna rejestracja</p>';
                  }
              }

            ?>
            <form action="includes/signup.inc.php" method="post" class="signupForm">

                <input type="text" name="uid" placeholder="Nazwa użytkownika" class="signupElement"><br>
                <input type="text" name="mail" placeholder="E-mail" class="signupElement"><br>
                <input type="password" name="pwd" placeholder="Hasło" class="signupElement"><br>
                <input type="password" name="pwd-repeat" placeholder="Powtórz hasło" class="signupElement"><br>
                <button type="submit" name="signup-submit" class="signupElement">Zarejestruj</button><br>
            </form>
            <script language="JavaScript1.2">

                //Advanced Email Check credit-
                //By JavaScript Kit (http://www.javascriptkit.com)
                //Over 200+ free scripts here!

                var testresults
                function checkemail(){
                    var str=document.validation.mail.value
                    var filter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
                    if (filter.test(str))
                        testresults=true
                    else{
                        alert("Please input a valid email address!")
                        testresults=false
                    }
                    return (testresults)
                }
            </script>

            <script>
                function checkbae(){
                    if (document.layers||document.getElementById||document.all)
                        return checkemail()
                    else
                        return true
                }
            </script>

        </section>
    </div>



</main>



<?php
require "footer.php";
?>
