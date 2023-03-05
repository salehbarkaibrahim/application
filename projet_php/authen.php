<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="log.css">   
    <link rel="stylesheet" href="bootstrap.min.css"> 
</head>
<body>
   
    <form action="authen.php" method="POST">
        <h1 align="center">Authentification</h1>
       <div align="center">     

        <input type="text" name="mail"  placeholder="E-mail" required> <br><br>
        <input type="password"  name="motdepasse"  placeholder="mot de passe" required><br><br>
        <p style="display:none" id="erreur">nom ou mot de passe incorrect</p>
        
        <button type="submit" name="ok" class="btn col-12 mt-3 py-2">S'authentifier</button><br><br>
        <a  href="inscription.php">inscrivez-vous</a>
        </div>
        
    </form>
    
</body>
</html>
<?php
    include('connexion.php');
    if(isset($_POST['ok'])){
        $mail=$_POST['mail'];
        $pwd=$_POST['motdepasse'];
        $sql="select * from utilisateur where mail='$mail' AND motdepasse='$pwd'";
        $reponse = $db->query($sql);
        if($reponse -> rowCount()>0){
        if ($utilisateur = $reponse->fetch()){
        if ($utilisateur['type'] == 'etudiant') {
            header('Location: etudiant.php');
        }
        else{
                header('Location:Administrateur.php');
        }
    }
}
    else{
       echo "<script>
       document.getElementById('erreur').style.display='block';
       document.getElementById('erreur').style.color='red';
       </script>";
}
$reponse->closeCursor();
}
?>
<style>
body {
  font-family: Arial, sans-serif;
  background-color: #f5f5f5;
  margin: 0;
  padding: 0;
}

h1 {
  font-size: 2rem;
  color: #007bff;
  margin: 0;
}

form {
  max-width: 500px;
  margin: auto;
  padding: 20px;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

input[type="text"],
input[type="email"],
input[type="password"],
select {
  display: block;
  width: 100%;
  padding: 10px;
  border: none;
  border-radius: 5px;
  margin-bottom: 10px;
  font-size: 1rem;
}

button[type="submit"] {
  display: block;
  width: 100%;
  padding: 10px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 5px;
  font-size: 1rem;
  cursor: pointer;
  transition: background-color 0.3s;
}

button[type="submit"]:hover {
  background-color: blue;
}

a {
  display: block;
  text-align: center;
  margin-top: 10px;
  color: #007bff;
  text-decoration: none;
  font-size: 1rem;
  transition: color 0.3s;
}

a:hover {
  color: #0056b3;
}

div:first-of-type {
  text-align: center;
  margin-bottom: 20px;
}

hr {
  border: none;
  border-top: 1px solid #ccc;
  margin: 20px 0;
}

</style>