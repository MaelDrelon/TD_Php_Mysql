<?php
    try 
    {
        $maBase= new PDO('mysql:host=192.168.65.227; dbname=MaelDrelon; charset=utf8','mael', '');
    }

    catch (Exception $erreur)
    {
        die ('Erreur : '.$erreur ->getMessage());
    }
    $marequete = $maBase->query('SELECT * FROM Medecin');
    function afficher_requet_select($marequete)
    {
        while ($table = $marequete ->fetch())
        {
            echo $table["Nom"]."".$table["Prenom"]."".$table["Matricule"];
        }
        verif();
    }

    function verif()
    {
        if($table["Matricule"]=false)
        {
            echo "<div style 'color=red;'> Resultat introuvable </div>";
        }
    }
?>