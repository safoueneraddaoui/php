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
                            <h2>Ajouter marque</h2>
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

<form method="post" id="form_validation" action="index.php?controller=<?php echo $table;?>&action=add">
<div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nom" required>
                                        <label class="form-label">Nom</label>
                                    </div>
                                </div>
<br>
<br>
<button class="btn btn-primary waves-effect" type="submit">Ajouter</button></form>

</div>
                    </div>
                </div>
            </div>
			</div>
