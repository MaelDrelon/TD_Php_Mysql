<?php

    function Insert($req)
    {
        if(! $req)
	    {
	        die('<p style="color:#FF0000";>impossible d’ajouter cet enregistrement :</p>');
	    }
	    echo "L’enregistrement est ajouté ";
    }
    try 
    {
        $maBase= new PDO('mysql:host=192.168.65.227; dbname=MaelDrelon; charset=utf8','mael', '');
        if(isset($_POST['Matricule'],$_POST['Nom'],$_POST['Prenom'])) 
        {
            if ((!empty($_POST['Matricule'])) && (!empty($_POST['Nom']))	&& (!empty($_POST['Prenom'])))
            {
                $req = $maBase->exec("INSERT INTO `Medecin`(`Matricule`, `Nom`, `Prenom`) VALUES('".$_POST['Matricule']."','".$_POST['Nom']."','".$_POST['Prenom']."')");
                echo '<p>'."INSERT INTO `Medecin`(`Matricule`, `Nom`, `Prenom`) VALUES('".$_POST['Matricule']."','".$_POST['Nom']."','".$_POST['Prenom']."')".'</p>';
                //$req = $maBase->exec("INSERT INTO `Medecin`(`Matricule`, `Nom`, `Prenom`) VALUES('124654','bonjour','coucou')");
                Insert($req);
            }
        } 
    }

    catch (Exception $erreur)
    {
        die ('Erreur : '.$erreur ->getMessage());
    }
?>

<html>
	<body>
	    <form action="" method="post">
	        Nom: <input type="text" name="Nom" />
	        Prénom: <input type="text" name="Prenom" />
	        Matricule: <input type="text" name="Matricule" />
	        <input type="submit" />
	    </form>
	</body>
</html>
