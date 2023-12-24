<!DOCTYPE html>
<html lang="en">
<?php include 'layout/head.php' ?>
<body>
    <div class='all-body'>
        <?php include 'layout/navbar.php' ?>
        <?php include 'layout/sidebar.php' ?>

        <?php echo 'hello users '; ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 main-content">
            <center>
                <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#exampleModal">
                    ajouter apprenant
                </button>
            </center>
            <h2>Liste des Apprenants</h2>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">nom</th>
                            <th scope="col">prenom</th>
                            <th scope="col">email</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user) : ?>
                            <tr>
                                <td><?php echo $user['id_utilisateur']; ?></td>
                                <td><?php echo $user['nom']; ?></td>
                                <td><?php echo $user['prenom']; ?></td>
                                <td><?php echo $user['email']; ?></td>
                                <td>
                                    <button type="button" class="btn btn-primary">Modifier</button>
                                    <button type="button" class="btn btn-danger">Supprimer</button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    <!-- Modal ajouter apprenant -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter un apprenant</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="../CRUD/ajout.php" method="POST">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="inputName" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="inputName" name="nom" required>
                        </div>
                        <div class="mb-3">
                            <label for="inputSurname" class="form-label">Prénom</label>
                            <input type="text" class="form-control" id="inputSurname" name="prenom" required>
                        </div>
                        <div class="mb-3">
                            <label for="inputEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail" name="email" required>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn btn-primary" name="submit">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
