<form method="post" enctype="multipart/form-data" action="index.php?controller=<?php echo $table;?>&action=edit">
<label>marque</label>
<select name="marque">
<?php foreach($listem as $marque){?>
	<option value="<?php echo $marque->id;?>" <?php if($marque->id==$objet->marque) echo "selected";?> ><?php echo $marque->nom;?></option>
<?php } ?>
</select><br>
<label>modele</label>
<input type="text" name="modele" value="<?php echo $objet->modele;?>"> 
<br>
<label>couleur</label>
<select name="couleur">
<?php foreach($listec as $couleur){?>
	<option value="<?php echo $couleur->id;?>" <?php if($couleur->id==$objet->couleur) echo "selected";?> ><?php echo $couleur->nom;?></option>
<?php } ?>
</select>
<br>
<label>nombre de portes</label>
<br>
<input type="text" name="nbporte" value="<?php echo $objet->nbporte;?>"> 

<h3>OPTIONS</h3>
<label>climatisation</label>
<input type="radio" name="clim" value=1 <?php if($objet->clim==1) echo "checked";?>> oui
<input type="radio" name="clim" value=0 <?php if($objet->clim==0) echo "checked";?>> nom
<br>
<div class="form-group">
		<label class="form-label">Photo</label>
		<?php if(!empty($objet->photo)){?>
<img src="images/voitures/<?php echo $objet->photo?>" width='80'><br>
		<?php } ?>
	<input type="file" name="photo[]" multiple id="photo" class="with-gap">
</div><br>

<br>
<input type="hidden" name="id" value="<?php echo $objet->id;?>">
<input type="hidden" name="oldphoto" value="<?php echo $objet->photo;?>">
<input type="submit" value="modifier">
</form>
