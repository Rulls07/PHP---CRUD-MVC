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