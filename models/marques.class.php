<?php
class Marque extends Scaffold
{
private $id,$nom,$table,$attrs;

public function __construct($id, $nom,$connexion,$table,$attrs)
{
$this->id = $id;
$this->nom = $nom;
$this->table = $table;
$this->attrs = $attrs;

parent::__construct($connexion);
}

public function get($param){
	return $this->$param;
}

//surcharges des methodes CRUD

}
?>