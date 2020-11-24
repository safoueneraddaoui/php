<?php
class Client extends Scaffold
{
private $id,$nom,$prenom,$tel;

public function __construct($id, $nom, $prenom,$tel,$connexion,$table,$attrs)
{
$this->id = $id;
$this->nom = $nom;
$this->prenom = $prenom;
$this->tel = $tel;
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