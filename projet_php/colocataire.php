<?php
include('connexion.php');

if (isset($_GET['chambre'])) {
  $chambre_id = $_GET['chambre'];
  $sql = "SELECT * FROM utilisateur WHERE id_ch='$chambre_id'";
  $result = $db->query($sql);
  $colocataires = $result->fetchAll();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Liste des colocataires</title>
</head>
<body>
  <h1>Liste des colocataires</h1>
  <?php if (isset($colocataires)): ?>
    <ul>
      <?php foreach ($colocataires as $colocataire): ?>
        <li><?php echo $utilisateur['nom'] . ' ' . $utilisateur['prenom']; ?></li>
      <?php endforeach; ?>
    </ul>
  <?php else: ?>
    <p>Aucun colocataire trouvé pour cette chambre.</p>
  <?php endif; ?>

</body>
</html>
