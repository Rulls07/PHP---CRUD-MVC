<div class="container"><br/>
        <div class="row"><br/>
            <h2>CRUD PHP</h2>
        </div>
        <div class="row">
            <a href="../vue/V_add.php" class="btn btn-success">Ajouter un user</a><br/>
            <div class="table-responsive">
                <br/>
                <table class="table table-hover table-bordered">
                    <br />
                    <thead>
                        <th>Name</th>
                        <th>Firstname</th>
                        <th>Age</th>
                        <th>Tel</th>
                        <th>Pays</th>
                        <th>Email</th>
                        <th>Comment</th>
                        <th>metier</th>
                        <th>Url</th>
                        <th>Edition</th>     
                    </thead>
                        <br/>
                    <tbody>
                    <?php
                    $resultado =$c_user->getAllUser();
                    foreach ($resultado as $key => $value) { //on cree les lignes du tableau avec chaque valeur retournée
                            echo '<tr>';
                            echo '<td>' . $value->getName() . '</td>';
                            echo '<td>' . $value->getFirstname() . '</td>';
                            echo '<td>' . $value->getAge() . '</td>';
                            echo '<td>' . $value->getTel() . '</td>';
                            echo '<td>' . $value->getEmail() . '</td>';
                            echo '<td>' . $value->getPays() . '</td>';
                            echo '<td>' . $value->getComment() . '</td>';
                            echo '<td>' . $value->getMetier() . '</td>';
                            echo '<td>' . $value->getUrl() . '</td>';
                            echo '<td>';
                            echo '<a class="btn btn-warning" href="?loc=edit&id=' . $value->getId() . '">Read</a>'; // un autre td pour le bouton d'edition
                                echo '</td>';
                            echo '<td>';
                                echo '<a class="btn btn-success" href="?loc=update&id=' . $value->getId() . '">Update</a>'; // un autre td pour le bouton d'update
                            echo '</td>';
                            echo '<td>';
                                echo '<a class="btn btn-danger" href="?loc=delete&id=' . $value->getId() . '">Delete</a>'; // un autre td pour le bouton de suppression
                            echo '</td>';
                            echo '</tr>';
                            }
                        ?>
                        </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="/CRUD-php/assets/js/bootstrap.min.js"></script>