<?php
class Voiture extends Scaffold
{
private $id,$marque,$modele,$couleur,$nbporte,$clim,$photo,$table,$attrs;

public function __construct($id, $marque,$modele,$couleur,$nbporte,$clim,$photo,$connexion,$table,$attrs)
{
$this->id = $id;
$this->marque = $marque;
$this->modele = $modele;
$this->couleur = $couleur;
$this->nbporte = $nbporte;
$this->clim = $clim;
$this->photo = $photo;
$this->table = $table;
$this->attrs = $attrs;
parent::__construct($connexion);
}

public function get($param){
	return $this->$param;
}


//surcharges des methodes CRUD
public function index($obj=null){
	$res=$this->connexion->query("select *,v.id, m.nom as nomm, c.nom as nomc from voitures v, marques m, couleurs c where v.marque=m.id and v.couleur=c.id")->fetchAll(PDO::FETCH_OBJ);
	return $res;
}


}
?>
