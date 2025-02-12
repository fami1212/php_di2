<?php
// premierement il se connecte à la base de donnee avec config.php
require('config.php');
// on prepare une requete select pour recuperer les etudiants
$etudiants = $pdo->query("SELECT * FROM etudiant")->fetchAll();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">nom</th>
                <th scope="col">prenom</th>
                <th scope="col">age</th>
                <th scope="col">email</th>
            </tr>
        </thead>
        <tbody>

                <?php foreach ($etudiants as $e) : ?>
                    <tr>
                        <th scope="row"><?php echo $e['id'] ?></th>
                        <td><?php echo $e['nom'] ?></td>
                        <td><?php echo $e['prenom'] ?></td>
                        <td><?php echo $e['age'] ?></td>
                        <td><?php echo $e['email'] ?></td>
                    </tr>

                <?php endforeach; ?>
        </tbody>
    </table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>