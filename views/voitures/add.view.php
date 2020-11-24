<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>Ajouter voiture</h2>
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
                <form method="post" id="form_validation" enctype="multipart/form-data" action="index.php?controller=<?php echo $table;?>&action=add">


                    <div class="form-group form-float">
                        <div class="form-line">
                            <select name="marque">
                                <?php foreach($listem as $marque){?>
                                    <option value="<?php echo $marque->id;?>"><?php echo $marque->nom;?></option>
                                <?php } ?>
                            </select>
                            <label class="form-label">marque</label>
                        </div>
                    </div>


                    <div class="form-group form-float">
                        <div class="form-line">

                            <input type="text" name="modele" class="form-control">
                            <label class="form-label">modele</label>
                        </div>
                    </div>


                    <label>couleur</label>
                    <select name="couleur" class="form-control show-tick">
                        <?php foreach($listec as $couleur){?>
                            <option value="<?php echo $couleur->id;?>"><?php echo $couleur->nom;?></option>
                        <?php } ?>
                    </select>
                    <br>
                    <div class="form-group form-float">
                        <div class="form-line">

                            <input type="text" name="nbporte"  class="form-control">
                            <label class="form-label">Nombre de porte</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Climatisation</label>

                        <input type="radio" name="clim" id="male" class="with-gap">
                        <label for="male">Oui</label>

                        <input type="radio" name="clim" id="female" class="with-gap">
                        <label for="female" class="m-l-20">Non</label>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Photo</label>

                        <input type="file" name="photo[]" id="photo" multiple class="with-gap">
                    </div><br>

                    <input type="submit" value="ajouter voiture">
                </form>
            </div>
        </div>
    </div>
</div>