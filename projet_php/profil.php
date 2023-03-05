<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil Utilisateur</title>
  <link rel="stylesheet" href="profil.css">
</head>
<body>
<style>
  /* Styles pour le header */
header {
    background-color: #fff;
    padding: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid #ccc;
  }
  
  h1 {
    color: cornflowerblue;
    font-size: 36px;
    margin: 0;
  }
  
  .user-email {
    margin: 0;
  }
  
  /* Styles pour l'image de profil */
  main {
    display: flex;
    justify-content: center;
    margin-top: 50px;
  }
  
  .user-image {
    width: 200px;
    height: 200px;
    border-radius: 50%;
    object-fit: cover;
    border: 5px solid cornflowerblue;
  }
  
  /* Styles pour le footer */
  footer {
    background-color: #fff;
    padding: 20px;
    border-top: 1px solid #ccc;
  }
  
  nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
  }
  
  nav ul li {
    display: inline-block;
    margin-right: 20px;
  }
  
  nav ul li:last-child {
    margin-right: 0;
  }
  
  nav ul li a {
    color: cornflowerblue;
    text-decoration: none;
  }
  
  nav ul li a:hover {
    text-decoration: underline;
  }
  
</style>
  <header>
    <h1>CAMPUS IAM</h1>
    <?php
      session_start();
      $_SESSION['mail']=$_COOKIE['mail'];
      echo "<p class='user-email'>".$_SESSION['mail']."</p>";
    ?>
  </header>

  <main>
    <img class="user-image" src="ibra.jpg" alt="Image de profil">
  </main>

  <footer>
    <nav>
      <ul>
        <li><a href="decon.php">Déconnecter</a></li>
      </ul>
    </nav>
  </footer>

</body>
</html>
