<?php
if(isset($_POST['clothes-submit'])){
    header("Location: clothes.php");
}
if(isset($_POST['cars-submit'])){
    header("Location: vehicles.php");
}

if(isset($_POST['ubrania']) && $_POST['ubrania'] == 'boots'){
    require 'clothes.php';
    echo '
 <div class="productForm">
        <form action="includes/addproduct.inc.php" method="post">
        <br>
        <p>Nazwa Produktu</p>
        <input type="text" name="productName" placeholder="Nazwa produktu"><br>
        <p>Marka produktu</p>
        <input type="text" name="productBrand"><br>
        <p>Rozmiar Produktu</p>
        <input type="number" name="productSize" max="50"><br>
        <p>Ilość</p>
        <input type="number" name="productNumber" max="100"><br>
        
        <button type="submit" name="addBoots-submit">Dodaj produkt</button>
</form>
</div>

    
    ';
}
if(isset($_POST['ubrania']) && $_POST['ubrania'] == 'jackets'){
    require 'clothes.php';
    echo '
        <form action="includes/addproduct.inc.php" method="post">
        <br>
        <p>Nazwa Produktu</p>
        <input type="text" name="productName" placeholder="Nazwa produktu"><br>
        <p>Marka produktu</p>
        <input type="text" name="productBrand"><br>
        <p>Kolor produktu</p>
        <input type="text" name="productColor"><br>
        <p>Rozmiar Produktu</p>
          <label> <input type="radio" name="sizeCheckbox" value="xs">XS</label>
            <label> <input type="radio" name="sizeCheckbox" value="s">S</label>
            <label> <input type="radio" name="sizeCheckbox" value="m">M</label>
            <label> <input type="radio" name="sizeCheckbox" value="l">L</label>
            <label> <input type="radio" name="sizeCheckbox" value="xl">XL</label>
        <p>Ilość</p>
        <input type="number" name="productNumber" max="100"><br>
        
        <button type="submit" name="addJackets-submit">Dodaj produkt</button>
</form>
    
    ';
}
if(isset($_POST['ubrania']) && $_POST['ubrania'] == 'pants'){
    require 'clothes.php';
    echo '
        <form action="includes/addproduct.inc.php" method="post">
        <br>
        <p>Nazwa Produktu</p>
        <input type="text" name="productName" placeholder="Nazwa produktu"><br>
        <p>Marka produktu</p>
        <input type="text" name="productBrand"><br>
        <p>Kolor produktu</p>
        <input type="text" name="productColor"><br>
        <p>Rozmiar Produktu</p>
          <label> <input type="radio" name="sizeCheckbox" value="xs">XS</label>
            <label> <input type="radio" name="sizeCheckbox" value="s">S</label>
            <label> <input type="radio" name="sizeCheckbox" value="m">M</label>
            <label> <input type="radio" name="sizeCheckbox" value="l">L</label>
            <label> <input type="radio" name="sizeCheckbox" value="xl">XL</label>
        <p>Ilość</p>
        <input type="number" name="productNumber" max="100"><br>
        
        <button type="submit" name="addPants-submit">Dodaj produkt</button>
</form>
    
    ';
}
if(isset($_POST['ubrania']) && $_POST['ubrania'] == 'shirts'){
    require 'clothes.php';
    echo '
        <form action="includes/addproduct.inc.php" method="post">
        <br>
        <p>Nazwa Produktu</p>
        <input type="text" name="productName" placeholder="Nazwa produktu"><br>
        <p>Marka produktu</p>
        <input type="text" name="productBrand"><br>
        <p>Kolor produktu</p>
        <input type="text" name="productColor"><br>
        <p>Rozmiar Produktu</p>
          <label> <input type="radio" name="sizeCheckbox" value="xs">XS</label>
            <label> <input type="radio" name="sizeCheckbox" value="s">S</label>
            <label> <input type="radio" name="sizeCheckbox" value="m">M</label>
            <label> <input type="radio" name="sizeCheckbox" value="l">L</label>
            <label> <input type="radio" name="sizeCheckbox" value="xl">XL</label>
        <p>Ilość</p>
        <input type="number" name="productNumber" max="100"><br>
        
        <button type="submit" name="addShirts-submit">Dodaj produkt</button>
</form>
    
    ';
}
if(isset($_POST['samochody']) && $_POST['samochody'] == 'dostawcze'){
    require 'vehicles.php';
    echo '
        <form action="includes/addproduct.inc.php" method="post">
        <br>
        <p>Marka produktu</p>
        <input type="text" name="productBrand" placeholder="Nazwa produktu"><br>
        <p>Pojemność śilnika</p>
        <input type="number" name="engineCap" ><br>
        <p>Kolor nadwozia</p>
        <input type="text" name="productColor"><br>
        <p>Rok produkcji</p>
          <input type="text" name="vehicleYear"><br>
        <p>Ładowność (kg)</p>
        <input type="number" name="vehicleCap" ><br>
        
        <button type="submit" name="addJeep-submit">Dodaj produkt</button>
</form>
    
    ';
}
if(isset($_POST['samochody']) && $_POST['samochody'] == 'osobowe'){
    require 'vehicles.php';
    echo '
        <form action="includes/addproduct.inc.php" method="post">
        <br>
        <p>Marka</p>
        <input type="text" name="productBrand" placeholder="Nazwa produktu"><br>
        <p>Kolor</p>
        <input type="text" name="productColor"><br>
        <p>Rok Produkcji</p>
        <input type="text" name="vehicleYear"><br>
        <p>Typ Nadwozia</p>
          <label> <input type="radio" name="sizeCheckbox" value="kombi">Kombi</label>
            <label> <input type="radio" name="sizeCheckbox" value="suv">SUV</label>
            <label> <input type="radio" name="sizeCheckbox" value="hatchback">Hatchback</label>
            <label> <input type="radio" name="sizeCheckbox" value="sedan">Sedan</label>
            <label> <input type="radio" name="sizeCheckbox" value="cabrio">Cabrio</label>
        <p>Pojemność Silnika</p>
        <input type="number" name="engineCap"><br>
        
        <button type="submit" name="addCar-submit">Dodaj produkt</button>
</form>
    
    ';
}
