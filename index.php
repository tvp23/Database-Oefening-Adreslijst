<?php
include "html/head.html";
include "html/form.html";

//database info
$host = 'localhost';
$dbname = 'cradreslijst';
$username = 'root';
$password = '';

$conStr = "mysql:host=$host;dbname=$dbname";
$con = new PDO($conStr, $username, $password);

echo "<div id='data'>";
$stmt = 'SELECT * From adres';
$sth = $con -> prepare($stmt);
$sth-> execute();
//row names
echo "<div id='record'>";
echo "<div class='recordpart' id='voornaam'>VOORNAAM: </div>";
echo "<div class='recordpart' id='achternaam'>ACHTERNAAM: </div>";
echo "<div class='recordpart' id='adres'>ADRES: </div>";
echo "<div class='recordpart' id='huisnummer'>HUISNUMMER: </div>";
echo "<div class='recordpart' id='woonplaats'>WOONPLAATS: </div>";
echo "<div class='recordpart' id='postcode'>POSTCODE: </div>";
echo "</div>";
//echo records
while($row = $sth->fetch()){
    echo "<div id='record'>";
    echo "<div class='recordpart' id='voornaam'> $row[voornaam] </div>";
    echo "<div class='recordpart' id='achternaam'> $row[achternaam] </div>";
    echo "<div class='recordpart' id='adres'> $row[adres] </div>";
    echo "<div class='recordpart' id='huisnummer'> $row[huisnummer] </div>";
    echo "<div class='recordpart' id='woonplaats'> $row[woonplaats] </div>";
    echo "<div class='recordpart' id='postcode'> $row[postcode] </div>";
    echo "<br>";
    echo "</div>";
}
echo "</div>";