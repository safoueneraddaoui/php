<?php
try {
$connexion = new PDO('mysql:host=localhost;dbname=parcs', 'root', '');
$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch ( PDOException $e ) {
echo "Connection à MySQL impossible : ", $e->getMessage();  exit(); //ou die();
} 

?>
