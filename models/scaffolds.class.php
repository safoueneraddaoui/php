<?php
class Scaffold
{
	protected $connexion;

	public function __construct($connexion)
{
$this->connexion = $connexion;
}


public function add($obj){
	
	$sql="insert into ".$obj->get("table");
	$sql.="(";
	$sql.=implode(",",$obj->get("attrs"));
		$sql.=") values(";
	$attrs=$obj->get("attrs");
		for($i=0;$i<count($attrs); $i++){	
	$sql.="'".$obj->get($attrs[$i])."'";
	if($i<count($attrs)-1)
	$sql.=",";
	}
	$sql.=")";
	

	$this->connexion->exec($sql);
	echo "<script>window.location.href='index.php?controller=".$obj->get("table")."&action=index';</script>";
}
public function edit($obj){
	$sql="update ".$obj->get("table")." set ";
	
	$attrs=$obj->get("attrs");
		for($i=1;$i<count($attrs); $i++){	
	$sql.=$attrs[$i]."='".$obj->get($attrs[$i])."'";
	if($i<count($attrs)-1)
	$sql.=",";
	}
	$sql.=" where id=".$obj->get("id");
	
	$this->connexion->exec($sql);
	echo "<script>window.location.href='index.php?controller=".$obj->get("table")."&action=index';</script>";
}

public function edit1($obj){
	$res=$this->connexion->query("select * from ".$obj->get("table")." where id=".$obj->get("id"))->fetch(PDO::FETCH_OBJ);
	return $res;
}

public function index($obj){
	$res=$this->connexion->query("select * from ".$obj->get("table"))->fetchAll(PDO::FETCH_OBJ);
	return $res;
}

public function indexws($obj){
	$res=$this->connexion->query("select * from ".$obj->get("table"))->fetchAll(PDO::FETCH_OBJ);
	header('Content-Type: application/json');
    echo json_encode($res);
}

public function delete($obj){
	$this->connexion->exec("delete from ".$obj->get("table")." where id=".$obj->get('id'));
		echo "<script>window.location.href='index.php?controller=".$obj->get("table")."&action=index';</script>";

}

}
?>
