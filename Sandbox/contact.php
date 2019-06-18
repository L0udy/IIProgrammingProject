<?php
require "header.php";
?>
<main>
    <div class="wrapper-main">
        <section class="section-default">
            <?php
            if (isset($_SESSION['userId'])){
                echo '<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<link rel="stylesheet" href="./Style.css" type="text/css">
<script src="/scripts/picture-zoom/js/external/mootools-1.2.4-core-yc.js"></script>
<script src="/scripts/picture-zoom/js/external/mootools-more.js"></script>
<script src="/scripts/picture-zoom/js/dg-picture-zoom.js"></script>
<script src="/scripts/picture-zoom/js/dg-picture-zoom-autoload.js"></script>
</head>
  <body>
    
     
      
        <div class="contact-info">
            <img src="./meh.jpg" alt="toJa" class="enlarge-onhover">
         </div>
          <div class="contact-text">
              <div class="text">
                <br>
                <p>email: jakismail@gmail.com</p>
                <p>tel: 673 235 344</p>
                <a href="#">Facebook </a>
                <a href="#">Twitter</a>
                <FORM>
<INPUT TYPE="button" VALUE="Wyslij mail" onClick="parent.location=\'mailto:kmlbaranowski@gmail.com?subject=Temat maila&cc=kmlbaranowski@gmail.com\'">
</FORM>
               </div>

           </div>
         </div>
      </div>
  
  


  </body>
</html>
';
            }
            else{
                echo '<p>Niepowodzenie</p>';
            }
            ?>


        </section>
    </div>


</main>