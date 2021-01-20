<?php

//database info
$host = 'localhost';
$dbname = 'cradreslijst';
$username = 'root';
$password = '';

$conStr = "mysql:host=$host;dbname=$dbname";
$con = new PDO($conStr, $username, $password);


// inserting data
if(isset($_POST['opslaan'])){ 

    //data info
    $voornaam = $_POST['voornaam'];
    $achternaam = $_POST['achternaam'];
    $adres = $_POST['adres'];
    $huisnummer = $_POST['huisnummer'];
    $woonplaats = $_POST['woonplaats'];
    $postcode = $_POST['postcode'];
    
    //Data insertion
    $stmt = "INSERT INTO adres (voornaam, achternaam, adres, huisnummer, woonplaats, postcode) VALUES ('$voornaam', '$achternaam', '$adres', '$huisnummer', '$woonplaats', '$postcode')";
    $sth = $con -> prepare($stmt);
    $sth-> execute();

    Header('Location: index.php');
}