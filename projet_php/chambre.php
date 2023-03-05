<?php
include('connexion.php');
if(isset($_POST['chercher']) && isset($_POST['type'])) {
  $type = $_POST['type'];
} else {
  $sql = "SELECT * FROM base1.chambre ORDER BY id_chambre";
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
    $sqlQuery = 'SELECT * FROM chambre';
    $AdSte = $db->prepare($sqlQuery);
    $AdSte->execute();
    $tabAss=$AdSte->fetchAll();
    $taille=count($tabAss);
  ?>
</head>
<body>
  <h1>Campus IAM </h1>
  
  <form action=<?php echo "'scriptchambre.php?nb=".$taille."'"; ?> method="post">
    <table align="center" border="1">
      <tr>
        <td>id chambre</td>
        <td>type de la chambre</td>
      </tr>

      <?php
        $i=0;
        foreach ($liste as $adhe) {
          $i++;
          echo "<tr>";
          echo "<td><input size='20' readonly value='".$adhe['id_chambre']."' name='id_chambre".$i."'>
                <input hidden value='".$adhe['id_chambre']."' name='id_chambre".$i."'></td>";
          echo "<td><input size='20' readonly value='".$adhe['type_chambre']."' name='type_chambre".$i."'>
            <input hidden value='".$adhe['type_chambre']."' name='type".$i."'></td>";
          echo "</tr>";
        }
      ?>
    </table>
  </form>
  <p style="display:none" id="erreur"><?php echo "'scriptchambre.php?nb-".$taille."'"; ?></p>
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
h1 {
  font-size: 24px;
  font-weight: bold;
  color: #0077be;
  text-align: center;
  margin-top: 20px;
  margin-bottom: 20px;
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

</>
</html>
