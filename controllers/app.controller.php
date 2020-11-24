<?php

//initialisation et recupération des attributs de l’objet voiture
isset($_REQUEST['id'])?$id=$_REQUEST['id']:$id="";
isset($_REQUEST['nom'])?$nom=$_REQUEST['nom']:$nom="";

isset($_REQUEST['action'])?$action=$_REQUEST['action']:$action="";

//Instanciation de l’objet marque
$marque=new Marque($id, $nom,$connexion);

Switch($action){
Case 'add1' : include "views/marques/add.view.php";  Break;
Case 'add' : $marque->add(); Break;
Case 'index' : $liste=$marque->index(); 
include "views/marques/index.view.php";
Break;
Case 'edit1' : $objet=$marque->edit1(); 
include "views/marques/edit.view.php";  Break;
Case 'edit' : $marque->edit(); Break;
Case 'delete' : $marque->delete(); break;


}
?>