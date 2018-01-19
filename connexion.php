<?php
try{
    $bdd = new PDO('mysql:host=;dbname=UtilisateursJquery;charset=utf8', 'root', 'Minetou&É',
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));        
}
catch(Exception $e){
    die('Erreur : ' . $e->getMessage());
}
