<?php //developpement du web services
//connexion DB
include "includes/connexion.php";

isset($_REQUEST['controller'])?$controller=$_REQUEST['controller']:$controller="";
isset($_REQUEST['action'])?$action=$_REQUEST['action']:$action="";

include "models/scaffolds.class.php";
include "models/".$controller.".class.php";
include "controllers/".$controller.".controller.php";
?>