<?php
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=base1;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
            die('Erreur de con : '. $e->getMessage());
    }
?>