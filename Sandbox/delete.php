<?php
include 'includes/dbh.inc.php';

$id = $_GET['id'];

if(isset($_GET['product'])&& $_GET['product']=='osobowe')
$result = mysqli_query($conn,"DELETE FROM samochody.osobowe WHERE id=$id");
if(isset($_GET['product'])&& $_GET['product']=='dostawcze')
    $result = mysqli_query($conn,"DELETE FROM samochody.dostawcze WHERE id=$id");
if(isset($_GET['product'])&& $_GET['product']=='buty')
    $result = mysqli_query($conn,"DELETE FROM ubrania.buty WHERE id=$id");
if(isset($_GET['product'])&& $_GET['product']=='koszulki')
    $result = mysqli_query($conn,"DELETE FROM ubrania.koszulki WHERE id=$id");
if(isset($_GET['product'])&& $_GET['product']=='kurtki')
    $result = mysqli_query($conn,"DELETE FROM ubrania.kurtki WHERE id=$id");
if(isset($_GET['product'])&& $_GET['product']=='spodnie')
    $result = mysqli_query($conn,"DELETE FROM ubrania.spodnie WHERE id=$id");

header("Location:browseproduct.php");
/**
 * Created by PhpStorm.
 * User: kmlba
 * Date: 22.05.2019
 * Time: 22:22
 */