<?php
// Configuration de la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "yaro1";  

// Connexion à la base de données
try{
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// preparation de la connection  sql 
}
 
catch (PDOException $e){
    echo "Erreur:" . $e->getMessage();
  }
?>