<?php
session_start();
 ?>
<!DOCTYPE HTML>
<html>
<head>
    <style type="text/css">
        BODY {overflow-x: hidden;}
    </style>
    <meta charset="UTF-8">
    <meta name="description" content="Przykład mety z opisem">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./Style.css" type="text/css">
    <script src="/scripts/picture-zoom/js/external/mootools-1.2.4-core-yc.js"></script>
    <script src="/scripts/picture-zoom/js/external/mootools-more.js"></script>
    <script src="/scripts/picture-zoom/js/dg-picture-zoom.js"></script>
    <script src="/scripts/picture-zoom/js/dg-picture-zoom-autoload.js"></script>
    <link rel="stylesheet" type="text/css" href="http://www.javascriptkit.com/script/script2/css3clock.css" />
    <title></title>
</head>
<body>

<header>
    <script language="JavaScript1.2">
        <!--



        var trailLength = 8 // The length of trail (8 by default; put more for longer "tail")
        var path = "cursor.gif" // URL of your image

        var standardbody=(document.compatMode=="CSS1Compat")? document.documentElement : document.body //create reference to common "body" across doctypes
        var i,d = 0

        function initTrail() { // prepares the script
            images = new Array() // prepare the image array
            for (i = 0; i < parseInt(trailLength); i++) {
                images[i] = new Image()
                images[i].src = path
            }
            storage = new Array() // prepare the storage for the coordinates
            for (i = 0; i < images.length*3; i++) {
                storage[i] = 0
            }
            for (i = 0; i < images.length; i++) { // make divs for IE and layers for Navigator
                document.write('<div id="obj' + i + '" style="position: absolute; z-Index: 100; height: 0; width: 0"><img src="' + images[i].src + '"></div>')
            }
            trail()
        }
        function trail() { // trailing function
            for (i = 0; i < images.length; i++) { // for every div/layer
                document.getElementById("obj" + i).style.top = storage[d]+'px' // the Y-coordinate
                document.getElementById("obj" + i).style.left = + storage[d+1]+'px' // the X-coordinate
                d = d+2
            }
            for (i = storage.length; i >= 2; i--) { // save the coordinate for the div/layer that's behind
                storage[i] = storage[i-2]
            }
            d = 0 // reset for future use
            var timer = setTimeout("trail()",10) // call recursively
        }
        function processEvent(e) { // catches and processes the mousemove event
            if (window.event) { // for IE
                storage[0] = window.event.y+standardbody.scrollTop+10
                storage[1] = window.event.x+standardbody.scrollLeft+10
            } else {
                storage[0] = e.pageY+12
                storage[1] = e.pageX+12
            }
        }

        initTrail()
        document.onmousemove = processEvent // start capturing

        //-->
    </script>

    <div class="header">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

        <script type="text/javascript">

            /***********************************************
             * CSS3 Analog Clock- by JavaScript Kit (www.javascriptkit.com)
             * Visit JavaScript Kit at http://www.javascriptkit.com/ for this script and 100s more
             ***********************************************/

            var $hands = $('#liveclock div.hand')

            window.requestAnimationFrame = window.requestAnimationFrame
                || window.mozRequestAnimationFrame
                || window.webkitRequestAnimationFrame
                || window.msRequestAnimationFrame
                || function(f){setTimeout(f, 60)}


            function updateclock(){
                var curdate = new Date()
                var hour_as_degree = ( curdate.getHours() + curdate.getMinutes()/60 ) / 12 * 360
                var minute_as_degree = curdate.getMinutes() / 60 * 360
                var second_as_degree = ( curdate.getSeconds() + curdate.getMilliseconds()/1000 ) /60 * 360
                $hands.filter('.hour').css({transform: 'rotate(' + hour_as_degree + 'deg)' })
                $hands.filter('.minute').css({transform: 'rotate(' + minute_as_degree + 'deg)' })
                $hands.filter('.second').css({transform: 'rotate(' + second_as_degree + 'deg)' })
                requestAnimationFrame(updateclock)
            }

            requestAnimationFrame(updateclock)


        </script><div id="liveclock" class="outer_face">

            <div class="marker oneseven"></div>
            <div class="marker twoeight"></div>
            <div class="marker fourten"></div>
            <div class="marker fiveeleven"></div>

            <div class="inner_face">
                <div class="hand hour"></div>
                <div class="hand minute"></div>
                <div class="hand second"></div>
            </div>

        </div>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

        <script type="text/javascript">

            /***********************************************
             * CSS3 Analog Clock- by JavaScript Kit (www.javascriptkit.com)
             * Visit JavaScript Kit at http://www.javascriptkit.com/ for this script and 100s more
             ***********************************************/

            var $hands = $('#liveclock div.hand')

            window.requestAnimationFrame = window.requestAnimationFrame
                || window.mozRequestAnimationFrame
                || window.webkitRequestAnimationFrame
                || window.msRequestAnimationFrame
                || function(f){setTimeout(f, 60)}


            function updateclock(){
                var curdate = new Date()
                var hour_as_degree = ( curdate.getHours() + curdate.getMinutes()/60 ) / 12 * 360
                var minute_as_degree = curdate.getMinutes() / 60 * 360
                var second_as_degree = ( curdate.getSeconds() + curdate.getMilliseconds()/1000 ) /60 * 360
                $hands.filter('.hour').css({transform: 'rotate(' + hour_as_degree + 'deg)' })
                $hands.filter('.minute').css({transform: 'rotate(' + minute_as_degree + 'deg)' })
                $hands.filter('.second').css({transform: 'rotate(' + second_as_degree + 'deg)' })
                requestAnimationFrame(updateclock)
            }

            requestAnimationFrame(updateclock)


        </script>
        <?php
        if (isset($_SESSION['userId'])){
            echo '
                <nav>
         
     
        <ul>
            <li><a href="browseproduct.php">Przeglądaj Produkty</a> </li> 
            <li><a href="addproduct.php">Dodaj Produkt</a> </li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="plan.php">Plan zajec</a></li>
        </ul>
        
    </nav>

                    <form action="includes/logout.inc.php" method="post">
                   <button type="submit" name="logout-submit" class="wylogujBut">Wyloguj</button>
        </form>';
        }
        else{
            echo '
           <div class="loginControl">
            <form action="includes/login.inc.php" method="post">
            <input type="text" name="mailuid" placeholder="Nazwa użytkownika lub email...">
            <input type="password" name="pwd" placeholder="hasło...">
            <button type="submit" name="login-submit">Zaloguj</button>
        </form>
        </div>
        <a href="signup.php" class="registerBut">Zarejestruj</a>';
        }
        if(isset($_GET['add'])) {
            if ($_GET['add'] == 'success') {
                echo '<h1 style="align-self: center;border: blue 10px solid;margin-top: 150px;color: red">Dodano Produkt</h1> !';
            }
        }


        ?>


    </div>
</header>



</body>

</html>
