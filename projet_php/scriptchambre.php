<?php
    for($i=1;$i<=$_GET['nb'];$i++){
        if(isset($_POST['sup'.$i])){
            include('connexion.php');
            $sqlQuery="DELETE FROM utilisateur where id_chambre='".$_POST['id_chambre_chambre'.$i]."'";
            $sup=$db->prepare($sqlQuery);
            $sup->execute();
            header('Location:utilisateur.php');
    }
    if(isset($_POST['mod'.$i])){
        echo "<form method='POST' action='scriptmodifier.php'>";
         echo "<table>";
            echo "<tr>";
                echo "<td> <input type='text' name='type' value='".$_POST['type'.$i]."' > </td> ";
                echo "<td> <input type='text' name='type_chambre' value='".$_POST['type_chambre'.$i]."' > 
                <input name='id_chambre' value='".$_POST['id_chambre'.$i]."' ></td> ";
            "</tr>";
          "</table>";
        echo "<form/>";
    }
    }
    if(isset($_POST["Ajouter"])){
        include('inscription.php');
    }
?>