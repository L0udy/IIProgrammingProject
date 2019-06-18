<?php
include_once 'includes/dbh.inc.php';
include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
<title></title>

</head>

<body>

<form action="browseproduct.php" method="post">
    <button type="submit" name="PojazdyButton">Pojazdy</button>
    <button type="submit" name="UbraniaButton">Ubrania</button>
</form>


<?php
if(isset($_POST['PojazdyButton'])){
    echo '
    <form action="browseproduct.php" method="post">
    <button type="submit" name="osoboweButton">Osobowe</button>
    <button type="submit" name="dostawczeButton">Dostawcze</button>
</form>
    ';
}
if(isset($_POST['UbraniaButton'])){
    echo '
    <form action="browseproduct.php" method="post">
    <button type="submit" name="butyButton">Buty</button>
    <button type="submit" name="kurtkiButton">Kurtki</button>
    <button type="submit" name="spodnieButton">Spodnie</button>
    <button type="submit" name="koszulkiButton">Koszulki</button>
</form>
    ';
}

?>
<table width="80%" border="0">

<?php
if(isset($_POST['osoboweButton'])) {
    $sql = "SELECT * FROM samochody.osobowe;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
     echo   '<tr bgcolor="#CCCCCC">
        <td>Marka</td>
        <td>Kolor</td>
        <td>Rok Produkcji</td>
        <td>Nadwozie</td>
        <td>Pojemność</td>
    </tr>';

        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo"<td>".$row['marka']."</td>";
            echo "<td>".$row['kolor']."</td>";
            echo "<td>".$row['rok_produkcji']."</td>";
            echo "<td>".$row['nadwozie']."</td>";
            echo "<td>".$row['pojemnosc']."</td>";
            echo "<td><a href=\"delete.php?id=$row[id]&product=osobowe\" onclick=\"return confirm('Na pewno chcesz usunąć?
 ')\">Usuń</a></td>";

        }
    }
}
if(isset($_POST['dostawczeButton'])) {
    $sql = "SELECT * FROM samochody.dostawcze;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        echo   '<tr bgcolor="#CCCCCC">
        <td>Marka</td>
        <td>Kolor</td>
        <td>Rok Produkcji</td>
        <td>Ładowność</td>
        <td>Pojemność</td>
    </tr>';

        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo"<td>".$row['marka']."</td>";
            echo "<td>".$row['kolor']."</td>";
            echo "<td>".$row['rok_produkcji']."</td>";
            echo "<td>".$row['ladownosc']."</td>";
            echo "<td>".$row['pojemnosc']."</td>";
            echo "<td> <a href=\"delete.php?id=$row[id]&product=dostawcze\" onclick=\"return confirm('Na pewno chcesz usunąć?
 ')\">Usuń</a></td>";

        }
    }
}
if(isset($_POST['butyButton'])) {
    $sql = "SELECT * FROM ubrania.buty;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        echo   '<tr bgcolor="#CCCCCC">
        <td>Nazwa</td>
        <td>Marka</td>
        <td>Rozmiar</td>
        <td>Ilość sztuk</td>
        
    </tr>';

        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo"<td>".$row['nazwa']."</td>";
            echo "<td>".$row['marka']."</td>";
            echo "<td>".$row['rozmiar']."</td>";
            echo "<td>".$row['ilosc']."</td>";
            echo "<td><a href=\"delete.php?id=$row[id]&product=buty\" onclick=\"return confirm('Na pewno chcesz usunąć?
 ')\">Usuń</a></td>";

        }
    }
}
if(isset($_POST['kurtkiButton'])) {
    $sql = "SELECT * FROM ubrania.kurtki;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        echo   '<tr bgcolor="#CCCCCC">
         <td>Nazwa</td>
        <td>Marka</td>
        <td>Kolor</td>
        <td>Rozmiar</td>
        <td>Ilość Sztuk</td>
    </tr>';

        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo"<td>".$row['nazwa']."</td>";
            echo "<td>".$row['marka']."</td>";
            echo "<td>".$row['kolor']."</td>";
            echo "<td>".$row['rozmiar']."</td>";
            echo "<td>".$row['ilosc']."</td>";
            echo "<td><a href=\"delete.php?id=$row[id]&product=kurtki\" onclick=\"return confirm('Na pewno chcesz usunąć?
 ')\">Usuń</a></td>";

        }
    }
}
if(isset($_POST['spodnieButton'])) {
    $sql = "SELECT * FROM ubrania.spodnie;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        echo   '<tr bgcolor="#CCCCCC">
         <td>Nazwa</td>
        <td>Marka</td>
        <td>Kolor</td>
        <td>Rozmiar</td>
        <td>Ilość Sztuk</td>
    </tr>';

        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo"<td>".$row['nazwa']."</td>";
            echo "<td>".$row['marka']."</td>";
            echo "<td>".$row['kolor']."</td>";
            echo "<td>".$row['rozmiar']."</td>";
            echo "<td>".$row['ilosc']."</td>";
            echo "<td><a href=\"delete.php?id=$row[id]&product=spodnie\" onclick=\"return confirm('Na pewno chcesz usunąć?
 ')\">Usuń</a></td>";

        }
    }
}
if(isset($_POST['koszulkiButton'])) {
    $sql = "SELECT * FROM ubrania.koszulki;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        echo   '<tr bgcolor="#CCCCCC">
        <td>Nazwa</td>
        <td>Marka</td>
        <td>Kolor</td>
        <td>Rozmiar</td>
        <td>Ilość Sztuk</td>
    </tr>';

        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo"<td>".$row['nazwa']."</td>";
            echo "<td>".$row['marka']."</td>";
            echo "<td>".$row['kolor']."</td>";
            echo "<td>".$row['rozmiar']."</td>";
            echo "<td>".$row['ilosc']."</td>";
            echo "<td><a href=\"delete.php?id=$row[id]&product=koszulki\" onclick=\"return confirm('Na pewno chcesz usunąć?
 ')\">Usuń</a></td>";

        }
    }
}
?>
</table>
</body>


</html>
