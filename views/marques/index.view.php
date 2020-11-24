 <div class="container-fluid">
            <div class="block-header">
                <h2>
                    FORM VALIDATION
                    <small>Taken from <a href="https://jqueryvalidation.org/" target="_blank">jqueryvalidation.org</a></small>
                </h2>
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Liste des voitures</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
<div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
	<thead>
	<tr>
		<th>nom</th>
		<th>Action</th>
	</tr>
	</thead>
	<tbody>
	<?php
	foreach($liste as $objet){
		echo "<tr>
				<td>".$objet->nom."</td>
				<td><input type='button' value='Modifier' onclick=\"window.location.href='index.php?controller=".$table."&action=edit1&id=".$objet->id."'\"><input type='button' value='supprimer' onclick=\"if(confirm('etes vous eure de supprimer?')) window.location.href='index.php?controller=".$table."&action=delete&id=".$objet->id."'\"> </td>
			</tr>
				";
	}
	?>
</table>
</tbody>
</table>
</div>
</div>
                    </div>
                </div>
            </div>
			</div>