<?php

    function Insert($req)
    {
        try
        {
            $maBase= new PDO('mysql:host=192.168.65.227; dbname=MaelDrelon; charset=utf8','mael', '');
            $dataBrute = $maBase->query($req);
            if(!$dataBrute)
            {
                die('<p style="color:#FF0000";>impossible d’ajouter cet enregistrement : vérifiez</p>');
            }
            else
            {
                echo "<p style='color:#027C0D'>L’enregistrement est ajouté </p>";
            }
           
        }
        catch(Exception $e)
        {
            echo 'Erreur : '.$e ->getMessage(); 
            die('<p style="color:#FF0000";>impossible d’ajouter cet enregistrement : vérifiez</p>');
        }  
    }

    try 
    {
        
        if(isset($_POST['Nom'])) 
        {
            if ((!empty($_POST['Nom']))	&& (!empty($_POST['Prenom'])))
            {
                $req ="INSERT INTO `Medecin`( `Nom`, `Prenom`) VALUES('".$_POST['Nom']."','".$_POST['Prenom']."')";
                echo "INSERT INTO `Medecin`( `Nom`, `Prenom`) VALUES('".$_POST['Nom']."','".$_POST['Prenom']."')";
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
	        <input type="submit" />
	    </form>
	</body>
</html>
