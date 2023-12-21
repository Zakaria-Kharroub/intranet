<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign Up Form</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<center>
    <h1 class='mt-5'>Sign Up Form</h1>
  
</center>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h2 class="text-center">Sign Up</h2>
          </div>
          <div class="card-body">
            <form>
              <div class="form-group">
                <label for="firstName">Prénom</label>
                <input type="text" class="form-control" id="firstName" placeholder="Entrez votre prénom">
              </div>
              <div class="form-group">
                <label for="lastName">Nom</label>
                <input type="text" class="form-control" id="lastName" placeholder="Entrez votre nom">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Entrez votre adresse email">
              </div>
              <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" class="form-control" id="password" placeholder="Entrez votre mot de passe">
              </div>
              <button type="submit" class="btn btn-primary btn-block">S'inscrire</button>
            </form>
            <p class='mt-3'>
              vous avez déjà un compte ? 
              <a href="login.php">Se connecter</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
