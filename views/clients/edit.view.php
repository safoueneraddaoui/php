<form method="post" action="index.php?controller=<?php echo $table;?>&action=edit">
<label>nom</label>
<input type="text" name="nom" value="<?php echo $objet->nom;?>"> 
<br>
<br>
<label>prenom</label>
<input type="text" name="prenom" value="<?php echo $objet->prenom;?>"> 
<br>
<br>
<label>tel</label>
<input type="number" name="tel" value="<?php echo $objet->tel;?>"> 
<br>
<br>
<input type="hidden" name="id" value="<?php echo $objet->id;?>">
<input type="submit" value="modifier">
</form>
