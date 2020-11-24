<form method="post" action="index.php?controller=<?php echo $table;?>&action=edit">
<label>nom</label>
<input type="text" name="nom" value="<?php echo $objet->nom;?>"> 
<br>
<br>
<input type="hidden" name="id" value="<?php echo $objet->id;?>">
<input type="submit" value="modifier">
</form>
