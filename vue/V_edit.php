<?php
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$oneUser = $c_user->getUserById($id);
?>

<div class="container">
    <div class="span10 offset1">
        <div class="row">
            <h3>Edition</h3>
        </div>
        <div class="form-horizontal">
            <div class="control-group">
                <label class="control-label">Name</label>
                <div class="controls">
                    <label class="checkbox">
                        <?= $oneUser->getName() ?>
                    </label>
                 </div>
            </div>
            
            <div class="control-group">
                <label class="control-label">Firstname</label>
                    <div class="controls">
                        <label class="checkbox">
                        <?= $oneUser->getFirstname() ?>
                        </label>
                    </div>
            </div>
            <div class="control-group">
                <label class="control-label">Email Address</label>
                    <div class="controls">
                        <label class="checkbox">
                        <?= $oneUser->getEmail() ?>
                        </label>
                    </div>
            </div>
            <div class="control-group">
                <label class="control-label">Phone</label>
                    <div class="controls">
                        <label class="checkbox">
                        <?= $oneUser->getTel() ?>
                        </label>
                    </div>
            </div>
            <div class="control-group">
                <label class="control-label">Pays</label>
                    <div class="controls">
                        <label class="checkbox">
                        <?= $oneUser->getPays() ?>
                        </label>
                    </div>
            </div>
            <div class="control-group">
                <label class="control-label">Metier</label>
                    <div class="controls">
                        <label class="checkbox">
                        <?= $oneUser->getMetier() ?>
                        </label>
                    </div>
                </div>
            <div class="control-group">
                <label class="control-label">Url</label>
                    <div class="controls">
                        <label class="checkbox">
                        <?= $oneUser->getUrl() ?>
                        </label>
                    </div>
            </div>
            <div class="control-group">
                <label class="control-label">Comment</label>
                    <div class="controls">
                        <label class="checkbox">
                        <?= $oneUser->getComment() ?>
                        </label>
                    </div>
            </div>
            <div class="form-actions">
                <a class="btn btn-warning" href="../public/index.php">Back</a>
            </div>
        </div>
    </div>
</div>



<?php
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$oneDragon = $c_dragon->getDragonById($id);
?>

<section>
    <article class="col-6 offset-3 d-flex justify-content-center">
        <div class="card col-6">
            <img class="card-img-top" src="../assets/image/dragon.jpg" alt="Card image cap">
            <div class="card-body">
                <h3 class="card-title">Nom : <?= $oneDragon->getDragon() ?></h3>
                <h3 class="card-title">Sexe : <?= $oneDragon->getSexe() ?></h3>
                <h3 class="card-title">Longueur : <?= $oneDragon->getLongueur() ?></h3>
                <h3 class="card-title">Nombre d'ecailles : <?= $oneDragon->getNombre_ecailles() ?></h3>
                <h3 class="card-title">Crache du feu : <?= $oneDragon->getCrache_feu() ?></h3>
                <h3 class="card-title">Comportement amoureux : <?= $oneDragon->getComportement_amoureux() ?></h3>
                <a href="?loc=home" class="btn btn-primary">Accueil</a>
            </div>
        </div>
    </article>
</section>