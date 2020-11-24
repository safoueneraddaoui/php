<?php
include "models/marques.class.php";
include "models/couleurs.class.php";

//initialisation et recupération des attributs de l’objet voiture
$table="voitures";
$attrs=array('id','marque','modele','couleur','nbporte','clim','photo');

foreach($attrs as $attr){
isset($_REQUEST[$attr])?$$attr=$_REQUEST[$attr]:$$attr="";
}

//recuperation de la photo voiture
//print_r($_FILES); die;

$photo="";

if(isset($_FILES['photo'])){
if(is_uploaded_file($_FILES['photo']['tmp_name'][0])){

//pour modifier une ou plusieurs photos
if(isset($_REQUEST['oldphoto'])){
	$taboldphoto=explode('/',$_REQUEST['oldphoto']);
	foreach($taboldphoto as $ph){
	unlink("images/voitures/".$ph);
	}
}

foreach($_FILES['photo']['name'] as $ind=>$photo2){

//changer le nom du fichier
//1- recuperer l'extention de l'image
$tabphoto=explode('.',$photo2);
$ex=$tabphoto[count($tabphoto)-1];
//2- concatener la nouvelle chaine aaleatoire avec l'extension
$nomphoto=random_1(8);
$photo2=$nomphoto.".".$ex;
$photo.=$photo2."/";

$photofile=$_FILES['photo']['tmp_name'][$ind];
copy($photofile,"images/voitures/".$photo2);
}
}
}
$table2="marques";
$attrs2=array('id','nom');

foreach($attrs2 as $attr){
isset($_REQUEST[$attr])?$$attr=$_REQUEST[$attr]:$$attr="";
}

$table3="couleurs";
$attrs3=array('id','nom');

foreach($attrs3 as $attr){
isset($_REQUEST[$attr])?$$attr=$_REQUEST[$attr]:$$attr="";
}

//Instanciation de l’objet voiture
$obj=new Voiture($id, $marque,$modele,$couleur,$nbporte,$clim,$photo,$connexion,$table,$attrs);
$marque=new Marque($id, $nom,$connexion,$table2,$attrs2);
$couleur=new Couleur($id, $nom,$connexion,$table3,$attrs3);

//surcharge des actions
Switch($action){
Case 'add1';
Case 'edit1' : 
$listem=$marque->index($marque);
$listec=$couleur->index($couleur); Break;
}

//actions
include "includes/actions.php";

?>