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
              ajouter formateur
            </button>
          </center>
          <h2>Liste des Formateur</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">id</th>
                  <th scope="col">nom</th>
                  <th scope="col">prenom</th>
                  <th scope="col">email</th>
                  <th scope="col">class</th>
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
                  <td><?php echo $user['name_class']; ?></td>
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
    </div>
  </div>

  <!-- modal ajouter formateur -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajouter un formateur</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="index.php?action=ajouterFormateur" method="POST">
                <div class="modal-body">
                    <!-- nom -->
                    <div class="mb-3">
                        <label for="inputName" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="inputName" name="nom" required>
                    </div>
                    <!-- prenom -->
                    <div class="mb-3">
                        <label for="inputSurname" class="form-label">prenom</label>
                        <input type="text" class="form-control" id="inputSurname" name="prenom" required>
                    </div>
                    <!-- email -->
                    <div class="mb-3">
                        <label for="inputEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail" name="email" required>
                    </div>
                    <!-- password -->
                    <div class="mb-3">
                        <label for="inputPassword" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" id="inputPassword" name="password" required>
                    </div>
                    <!-- class -->
                    <div class="mb-3">
                        <label for="inputClass" class="form-label">Classe</label>
                        <select class="form-control" id="inputClass" name="id_class" required>
                        <?php foreach ($classes as $class) : ?>
                        <option value="<?php echo $class['id_class']; ?>"><?php echo $class['name_class']; ?></option>
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
