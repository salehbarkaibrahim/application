<?php
include('connexion.php');

// check if form submitted
if(isset($_POST['chercher']) && isset($_POST['type'])) {

  $type = htmlspecialchars($_POST['type']);

  // build SQL query with search term
  $sql = "SELECT * FROM base1.chambre WHERE type = '$type' ORDER BY id_chambre";
} else {
  // if no search term, get all records
  $sql = "SELECT * FROM base1.chambre ORDER BY id_chambre";
}

// fetch records from database
$liste = $db->query($sql)->fetchAll();
?>



<?php
include('connexion.php');
if(isset($_POST['chercher']) && isset($_POST['recherche']) && isset($_POST['type'])) {
  $recherche = $_POST['recherche'];
  $type = $_POST['type'];
  $sql = "SELECT * FROM base1.utilisateur WHERE $type LIKE '%$recherche%' ORDER BY id";
} else {
  $sql = "SELECT * FROM base1.utilisateur ORDER BY id";
}
$liste = $db->query($sql)->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php
    include('connexion.php');
    $sqlQuery = 'SELECT * FROM utilisateur';
    $AdSte = $db->prepare($sqlQuery);
    $AdSte->execute();
    $tabAss=$AdSte->fetchAll();
    $taille=count($tabAss);
  ?>
</head>
<body>
  <form action=<?php echo "'scriptutilisateur.php?nb=".$taille."'"; ?> method="post">
    <table align="center" border="1">
      <tr>
        <td><button type='submit' name='Ajouter'>ajouter utilisateur</button></td>
        <td>
          <input type="text" name="recherche" placeholder="Recherche...">
          <select name="type">
            <option value="type">type</option>
            <option value="nom">Nom</option>
            <option value="prenom">Prénom</option>
            <option value="id">ID</option>
            <option value="departement">departement</option>
          </select>
          <button type="submit" name="chercher">Chercher</button>
        </td>
      </tr>

      <tr>
        <td>Nom</td>
        <td>Prénom</td>
        <td>Supprimer</td>
        <td>Modifier</td>
      </tr>

      <?php
        $i=0;
        foreach ($liste as $adhe) {
          $i++;
          echo "<tr>";
          echo "<td><input size='20' readonly value='".$adhe['nom']."' name='nom".$i."'</td>";
          echo "<td><input size='20' readonly value='".$adhe['prenom']."' name='prenom".$i."'>
                <input hidden value='".$adhe['id']."' name='id".$i."'></td>";
          echo "<td><button type='submit' name='sup".$i."'>Supprimer</button></td>"; 
          echo "<td><button type='submit' name='mod".$i."'>Modifier</button></td>";
          echo "</tr>";
        }
      ?>

    </table>
  </form>
  <?php echo "'scriptAdherent.php?nb-".$taille."'"; ?>
</body>
<style>
  body {
  font-family: Arial, sans-serif;
  background-color: white;
}

table {
  border-collapse: collapse;
  margin: auto;
}

th {
  background-color: #0077be;
  color: #fff;
  padding: 10px;
}

td {
  text-align: center;
  padding: 10px;
}

input[type="text"], select {
  padding: 5px;
  border-radius: 5px;
  border: 1px solid #0077be;
}

button {
  padding: 5px 10px;
  border-radius: 5px;
  border: none;
  background-color: #0077be;
  color: #fff;
  cursor: pointer;
}

button:hover {
  background-color: #005b8e;
}

input[readonly] {
  background-color: white;
  border: none;
}

</style>
</html>
