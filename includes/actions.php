<?php 
Switch($action){
	
Case 'add1' : include "views/".$controller."/add.view.php";  
Break;

Case 'add' : $obj->add($obj); 
Break;

Case 'index' : $liste=$obj->index($obj); 
include "views/".$controller."/index.view.php";
Break;

Case 'edit1' : $objet=$obj->edit1($obj); 
include "views/".$controller."/edit.view.php";  
Break;

Case 'edit' : $obj->edit($obj); 
Break;

Case 'delete' : $obj->delete($obj); 
break;

//web services liste des voitures
Case 'indexws' :  $obj->indexws($obj);
Break;


}
?>