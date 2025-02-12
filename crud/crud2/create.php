<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de creation d'un etudiant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<form action="add.php" method="post">
  <div class="mb-3">
    <label for="nom" class="form-label">Nom de l'etudiant</label>
    <input type="text" class="form-control" id="nom" name="nom"</input>
  </div>
  <div class="mb-3">
    <label for="prenom" class="form-label">Prenom de l'etudiant</label>
    <input type="text" class="form-control" id="prenom" name="prenom"</input>
  </div>
  <div class="mb-3">
    <label for="age" class="form-label">Age de l'etudiant</label>
    <input type="number" class="form-control" id="age" name="age"</input>
  </div>
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  
  

  <button type="submit" class="btn btn-primary">Envoyer</button>
</form>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>