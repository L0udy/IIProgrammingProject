<?php
$servername = "kamil.local";
$dBUsername = "root";
$dBPassword = "";
$dBName = "loginsystem";

$conn = mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);

if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
if(isset($_POST['addBoots-submit'])) {
    $sql = "INSERT INTO ubrania.buty (nazwa, marka, rozmiar,ilosc)
VALUES
('$_POST[productName]','$_POST[productBrand]','$_POST[productSize]','$_POST[productNumber]')";
    header("Location: ../header.php?add=success%product=boots");
}
if(isset($_POST['addJackets-submit'])){
    $sql = "INSERT INTO ubrania.kurtki (nazwa, marka,kolor, rozmiar,ilosc)
VALUES
('$_POST[productName]','$_POST[productBrand]','$_POST[productColor]','$_POST[sizeCheckbox]','$_POST[productNumber]')";
    header("Location: ../header.php?add=success%product=jacket");
}
if(isset($_POST['addPants-submit'])){
    $sql = "INSERT INTO ubrania.spodnie (nazwa, marka,kolor, rozmiar,ilosc)
VALUES
('$_POST[productName]','$_POST[productBrand]','$_POST[productColor]','$_POST[sizeCheckbox]','$_POST[productNumber]')";
    header("Location: ../header.php?add=success%product=pants");
}
if(isset($_POST['addShirts-submit'])){
    $sql = "INSERT INTO ubrania.koszulki (nazwa, marka,kolor, rozmiar,ilosc)
VALUES
('$_POST[productName]','$_POST[productBrand]','$_POST[productColor]','$_POST[sizeCheckbox]','$_POST[productNumber]')";
    header("Location: ../header.php?add=success%product=shirt");
}
if(isset($_POST['addJeep-submit'])){
    $sql = "INSERT INTO samochody.dostawcze (marka, pojemnosc,kolor, rok_produkcji,ladownosc)
VALUES
('$_POST[productBrand]','$_POST[engineCap]','$_POST[productColor]','$_POST[vehicleYear]','$_POST[vehicleCap]')";
    header("Location: ../header.php?add=success%product=bigCar");
}
if(isset($_POST['addCar-submit'])){
    $sql = "INSERT INTO samochody.osobowe (marka, kolor,rok_produkcji, nadwozie,pojemnosc)
VALUES
('$_POST[productBrand]','$_POST[productColor]','$_POST[vehicleYear]','$_POST[sizeCheckbox]','$_POST[engineCap]')";
    header("Location: ../header.php?add=success%product=smallCar");
}



if (!mysqli_query($conn,$sql))
{
    die('Error: '.mysqli_error($conn));
}
header("Location: ../header.php?add=success");


mysqli_close($conn);