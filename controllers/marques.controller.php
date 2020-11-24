<?php
//initialisation et recupération des attributs de l’objet marque
$table="marques";
$attrs=array('id','nom');

foreach($attrs as $attr){
isset($_REQUEST[$attr])?$$attr=$_REQUEST[$attr]:$$attr="";
}

//Instanciation de l’objet marque
$obj=new Marque($id, $nom,$connexion,$table,$attrs);

//surcharge des actions

//actions
include "includes/actions.php";


?>