<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
      display: flex;
      justify-content: center;
    }
    .all-body{
        width: 92%;
    }
    
    .sidebar {
      background-color: #343a40;
      color: #fff;
    }

    .sidebar-sticky {
      position: -webkit-sticky;
      position: sticky;
      top: 0;
      z-index: 1020;
      height: calc(100vh - 56px);
      padding-top: 1rem;
      overflow-x: hidden;
      overflow-y: auto;
    }

    .main-content {
      background-color: #e9ecef;
      padding: 20px;
      margin-top: 20px;
      border-radius: 8px;
    }

    .table {
      background-color: #fff;
    }
  </style>
</head>
<body>
  <div class='all-body'>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Dashboard</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Profile
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Edit Profile</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Log Out</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Sidebar -->
    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  Liste Formateur
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  Liste Apprenant
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <!-- Content -->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 main-content">
          <center>
            <button> ajouter formateur</button>
            <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#exampleModal">
              ajouter apprenant
            </button>
          </center>
          <h2>Liste des Apprenants</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">Nom</th>
                  <th scope="col">Prénom</th>
                  <th scope="col">Classe</th>
                  <th scope="col">Niveau</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>2</td>
                  <td>1</td>
                  <td>
                    <button type="button" class="btn btn-primary">Modifier</button>
                    <button type="button" class="btn btn-danger">Supprimer</button>
                  </td>
                </tr>
                <tr>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>2</td>
                  <td>2</td>
                  <td>
                    <button type="button" class="btn btn-primary">Modifier</button>
                    <button type="button" class="btn btn-danger">Supprimer</button>
                  </td>
                </tr>
                <tr>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>2</td>
                  <td>3</td>
                  <td>
                    <button type="button" class="btn btn-primary">Modifier</button>
                    <button type="button" class="btn btn-danger">Supprimer</button>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>
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
            <!-- Champs du formulaire -->
            <div class="mb-3">
              <label for="inputName" class="form-label">Nom</label>
              <input type="text" class="form-control" id="inputName" name="nom" required>
            </div>
            <div class="mb-3">
              <label for="inputSurname" class="form-label">Prénom</label>
              <input type="text" class="form-control" id="inputSurname" name="prenom" required>
            </div>
            <!-- Ajoutez d'autres champs pour les données de l'apprenant si nécessaire -->

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
