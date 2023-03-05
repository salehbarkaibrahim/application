<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="log.css">
    <title>Accueil</title>
    <style>
        body {
  background-color: white;
  font-family: Arial, sans-serif;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: blue;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}

.container {
  margin-top: 50px;
  padding: 20px;
  background-color: #fff;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

h1 {
  font-size: 36px;
  text-align: center;
  margin-top: 50px;
}

p {
  font-size: 18px;
  line-height: 1.5;
  margin-top: 20px;
}

    </style>
</head>
<body>
    <h1>campus IAM</h1>
    <ul>
        <li><a href="utilisateur.php">affiches utilisateurs</a></li>
        <li><a href="inscription.php">ajouter </a></li>
        <li><a href="decon.php">Deconnecter</a></li>
    </ul>
    <div class="container">
<p>
Bienvenue sur la page d'accueil de l'administrateur. <br>
En tant qu'administrateur, vous pouvez effectuer les actions suivantes : <br>
 1.Afficher la liste des utilisateurs enregistrés dans la base de données <br>
 2.Ajouter un nouvel utilisateur à la base de données <br>
3.Se déconnecter de l'application <br> <br>
Utilisez les liens de navigation ci-dessus pour accéder à ces fonctionnalités.
Si vous rencontrez des problèmes ou avez des questions, veuillez contacter le support technique.
Merci d'utiliser notre application !

</p>
 </div> 
</body>
</html>