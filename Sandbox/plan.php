<?php
require "header.php";
?>
<main>
    <div class="wrapper-main">
        <section class="section-default">
            <?php
            if (isset($_SESSION['userId'])){
                echo ' 
 <head>
 <link rel="stylesheet" href="./Style.css" type="text/css">
</head>
  <body>
   <div class="main-container">
    <div class="table-container">
           <table id="plan">
             <thead>
               <tr>
                 <td>Godzina</td>
                 <td>Sobota</td>
                 <td>Niedziela</td>
               </tr>
             </thead>
             <tbody>
               <tr>
                 <td>7:30</td>
                 <td class="wyklad">Systemy Operacyjne</td>
                 <td></td>
               </tr>
               <tr>
                 <td>8:00</td>
                 <td class="wyklad"></td>
                 <td></td>
               </tr>
               <tr>
                 <td>9:00</td>
                 <td class="wyklad"></td>
                 <td></td>
               </tr>
               <tr>
                 <td>9:15</td>
                 <td class="laborki">Architektura komputerów</td>
                 <td></td>
               </tr>
               <tr>
                 <td>10:00</td>
                 <td class="laborki"></td>
                 <td></td>
               </tr>
               <tr>
                 <td>10:15</td>
                 <td class="wyklad">Sieci Komputerowe</td>
                 <td></td>
               </tr>
               <tr>
                 <td>10:35</td>
                 <td class="wyklad"></td>
                 <td class="wyklad">Architektura komputerów</td>
               </tr>
               <tr>
                 <td>11:00</td>
                 <td class="wyklad"></td>
                 <td class="wyklad"></td>
               </tr>
               <tr>
                 <td>11:45</td>
                 <td class="wyklad"></td>
                 <td class="wyklad"></td>
               </tr>
               <tr>
                 <td>11:55</td>
                 <td class="laborki">Sieci Komputerowe</td>
                 <td class="wyklad"></td>
               </tr>
               <tr>
                 <td>12:30</td>
                 <td class="laborki"></td>
                 <td></td>
               </tr>
               <tr>
                 <td>13:00</td>
                 <td></td>
                 <td class="wyklad">Programowanie 2</td>
               </tr>
               <tr>
                 <td>14:00</td>
                 <td></td>
                 <td class="wyklad"></td>
               </tr>
               <tr>
                 <td>14:30</td>
                 <td></td>
                 <td class="wyklad"></td>
               </tr>
               <tr>
                 <td>14:40</td>
                 <td class="laborki">Technologie Internetowe</td>
                 <td class="laborki">Programowanie 2</td>
               </tr>
               <tr>
                 <td>15:30</td>
                 <td class="laborki"></td>
                 <td class="laborki"></td>
               </tr>
               <tr>
                 <td>16:00</td>
                 <td class="laborki"></td>
                 <td></td>
               </tr>
               <tr>
                 <td>16:20</td>
                 <td class="laborki">Systemy Operacyjne</td>
                 <td class="wyklad">Technologie Internetowe</td>
               </tr>
               <tr>
                 <td>17:00</td>
                 <td class="laborki"></td>
                 <td class="wyklad"></td>
               </tr>
               <tr>
                 <td>18:00</td>
                 <td class="laborki"></td>
                 <td class="wyklad"></td>
               </tr>
             </tbody>

             <tfoot>
               <tr></tr>
               <tr></tr>
               <tr>
                 <td>***</td>
                 <td class="wyklad">*WYKŁADY*</td>
                 <td class="laborki">*LABORKI*</td>
               </tr>
             </tfoot>
           </table>
    </div>
</div>
</body>';
            }
            else{
                echo 'Niepowodzenie';
            }
            ?>


        </section>
    </div>


</main>
