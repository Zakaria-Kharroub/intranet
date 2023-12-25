<!DOCTYPE html>
<html lang="en">
<?php include 'layout/head.php' ?>

<body>
    <div class='all-body'>
        <?php include 'layout/navbar.php' ?>

        <!-- Sidebar -->
        <div class="container-fluid">
            <div class="row">
                <?php include 'layout/sidebar.php' ?>

                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 main-content">
                    <center>
                        <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#exampleModal">
                            Ajouter un formateur
                        </button>
                    </center>
                    <h2>Liste des Formateurs</h2>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">nom</th>
                                    <th scope="col">prenom</th>
                                    <th scope="col">email</th>
                                    <th scope="col">class</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($users as $user) : ?>
                                    <tr>
                                        <td><?php echo $user['id_utilisateur']; ?></td>
                                        <td><?php echo $user['nom']; ?></td>
                                        <td><?php echo $user['prenom']; ?></td>
                                        <td><?php echo $user['email']; ?></td>
                                        <td><?php echo $user['name_class']; ?></td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updateModal<?php echo $user['id_utilisateur']; ?>">
                                                Modifier
                                            </button>
                                            <button type="button" class="btn btn-danger">suprimer</button>
                                        </td>
                                    </tr>

                                   <!-- modal updte -->
                                    <div class="modal fade" id="updateModal<?php echo $user['id_utilisateur']; ?>" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="updateModalLabel">modifier formateur</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="index.php?action=updateFormateur" method="POST">
                                                    <input type="hidden" name="id_utilisateur" value="<?php echo $user['id_utilisateur']; ?>">
                                                    <div class="modal-body">
                                                        <div class="mb-3">
                                                            <label for="updateInputName" class="form-label">nom</label>
                                                            <input type="text" class="form-control" id="updateInputName" name="nom" value="<?php echo $user['nom']; ?>" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="updateInputSurname" class="form-label">prenom</label>
                                                            <input type="text" class="form-control" id="updateInputSurname" name="prenom" value="<?php echo $user['prenom']; ?>" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="updateInputEmail" class="form-label">email</label>
                                                            <input type="email" class="form-control" id="updateInputEmail" name="email" value="<?php echo $user['email']; ?>" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="updateInputPassword" class="form-label">password</label>
                                                            <input type="password" class="form-control" id="updateInputPassword" name="password" placeholder="passoerd">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="updateInputClass" class="form-label">class</label>
                                                            <select class="form-control" id="updateInputClass" name="id_class" required>

                                                                <?php foreach ($classes as $class) : ?>

                                                                    <option value="<?php echo $class['id_class']; ?>" <?php echo ($user['id_class'] == $class['id_class']) ? 'selected' : ''; ?>>

                                                                      <?php echo $class['name_class']; ?>
                                                                    </option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="reset" class="btn btn-secondary" data-dismiss="modal">fermer</button>
                                                        <button type="submit" class="btn btn-primary" name="submit">enregister</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </main>
            </div>
        </div>
    </div>



 <!-- modal ajouter formateur -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ajouter formateur</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="index.php?action=ajouterFormateur" method="POST">
                <div class="modal-body">

                     <!-- nom -->
                    <div class="mb-3">
                        <label for="inputName" class="form-label">Nom </label>
                        <input type="text" class="form-control" id="inputName" name="nom" required>

                    </div>

                    <!-- prenom -->
                    <div class="mb-3">
                        <label for="inputSurname" class="form-label">prenom </label>
                        <input type="text" class="form-control" id="inputSurname" name="prenom" required>
                    </div>

                    <!-- email -->
                    <div class="mb-3">
                        <label for="inputEmail" class="form-label">email</label>
                        <input type="email" class="form-control" id="inputEmail" name="email" required>
                    </div>

                    <!-- password -->
                    <div class="mb-3">
                        <label for="inputPassword" class="form-label">password</label>
                        <input type="password" class="form-control" id="inputPassword" name="password" required>
                    </div>


                    <!-- class -->
                    <div class="mb-3">
                        <label for="inputClass" class="form-label">class</label>
                        <select class="form-control" id="inputClass" name="id_class" required>

                        <?php foreach ($classes as $class) : ?>

                         <option value="<?php echo $class['id_class']; ?>">

                           <?php echo $class['name_class']; ?>
                         </option>


                        <?php endforeach; ?>
                     </select>
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
