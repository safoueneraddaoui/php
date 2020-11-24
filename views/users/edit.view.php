<form method="post" action="index.php?controller=<?php echo $table;?>&action=edit">
<label>nom utilisateur</label>
<input type="text" name="nom_user" value="<?php echo $objet->nom_user;?>"> 
<br>
<label>Login</label>
<input type="text" name="login" value="<?php echo $objet->login;?>"> 
<br>
<label>mot de passe</label>
<input type="password" name="password" value=""> 
<br>
<br>
<input type="hidden" name="id" value="<?php echo $objet->id;?>">
<input type="submit" value="modifier">
</form>
