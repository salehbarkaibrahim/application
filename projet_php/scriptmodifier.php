<?php
     include('connexion.php');
     $sqlQuery="UPDATE utilisateur SET nom = :nom, prenom = :prenom WHERE id =:id;";
     $mod=$db->prepare($sqlQuery);
     $mod->execute(
        array(
            'nom'=>$_POST['nom'],
            'prenom'=>$_POST['prenom'],
            'id'=>$_POST['id'],
        )
        );
        header('Location:utilisateur.php');
?>