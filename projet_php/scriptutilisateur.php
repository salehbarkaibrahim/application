<?php
    for($i=1;$i<=$_GET['nb'];$i++){
        if(isset($_POST['sup'.$i])){
            include('connexion.php');
            $sqlQuery="DELETE FROM utilisateur where id='".$_POST['id'.$i]."'";
            $sup=$db->prepare($sqlQuery);
            $sup->execute();
            header('Location:utilisateur.php');
    }
    if(isset($_POST['mod'.$i])){
        echo "<form method='POST' action='scriptmodifier.php'>";
         echo "<table>";
            echo "<tr>";
                echo "<td> <input type='text' name='nom' value='".$_POST['nom'.$i]."' > </td> ";
                echo "<td> <input type='text' name='prenom' value='".$_POST['prenom'.$i]."' > 
                <input name='id' value='".$_POST['id'.$i]."' ></td> ";
                echo "<td><button type='submit' name='mod".$i."'>Modifier</button></td>"; 
            "</tr>";
          "</table>";
        echo "<form/>";
    }
    }
    if(isset($_POST["Ajouter"])){
        include('inscription.php');
    }
?>