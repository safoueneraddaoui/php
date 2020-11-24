<?php
//initialisation et recupération des attributs de l’objet marque
$table="clients";
$attrs=array('id','nom','prenom','tel');

foreach($attrs as $attr){
isset($_REQUEST[$attr])?$$attr=$_REQUEST[$attr]:$$attr="";
}

//Instanciation de l’objet marque
$obj=new Client($id, $nom,$prenom,$tel,$connexion,$table,$attrs);

//surcharge des actions

//actions
include "includes/actions.php";


?>