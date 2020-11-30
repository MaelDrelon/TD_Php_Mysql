<?php
    try 
    {
        $maBase= new PDO('mysql:host=192.168.65.227; dbname=MaelDrelon; charset=utf8','mael', '');
        $marequete = $maBase->query('SELECT * FROM Medecin');
        

        function afficher_requet_select($marequete)
        {
            while ($table = $marequete ->fetch())
            {
             ?><p><?php echo $table["Nom"]." ".$table["Prenom"]." ".$table["Matricule"];?></p><?php  
            }
        verif();
        }

        function verif()
        {
            if($table["Matricule"]=false or $table["Prenom"]=false or $table["Matricule"]=false)
            {
                echo "<div style 'color=red;'> Resultat introuvable </div>";
            }
        }
        afficher_requet_select($marequete);
    }

    catch (Exception $erreur)
    {
        die ('Erreur : '.$erreur ->getMessage());
    }
?>