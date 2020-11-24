<?php
//initialisation et recupération des attributs de l’objet marque
$table="users";
$attrs=array('id','nom_admin','login','password');

foreach($attrs as $attr){
isset($_REQUEST[$attr])?$$attr=$_REQUEST[$attr]:$$attr="";
}

//Instanciation de l’objet marque
$obj=new User($id, $nom_admin,$login,$password,$connexion,$table,$attrs);

//surcharge des actions
Switch($action){
	
Case 'login1' : include "views/".$controller."/login.view.php";  
Break;

Case 'login' : $res=$obj->login($connexion); 
 if(!empty($res)){
	 
	 $_SESSION['login']=$res->login;
	 $_SESSION['password']=$res->password;
	 
	 	echo "<script>window.location.href='index.php';</script>";
 }
	else
			echo "<script>window.location.href='login.php';</script>";


Break;

Case 'logout' : $obj->logout($connexion);  
Break;
}
//actions
include "includes/actions.php";


?>