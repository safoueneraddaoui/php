<table border="1">
	<tr>
		<th>nom</th>
		<th>Action</th>
	</tr>
	
	<?php
	foreach($liste as $objet){
		echo "<tr>
				<td>".$objet->nom."</td>
				<td><input type='button' value='Modifier' onclick=\"window.location.href='index.php?controller=".$table."&action=edit1&id=".$objet->id."'\"><input type='button' value='supprimer' onclick=\"window.location.href='index.php?controller=".$table."&action=delete&id=".$objet->id."'\"> </td>
			</tr>
				";
	}
	?>
</table>