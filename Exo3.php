<?php
    try 
    {
        $maBase= new PDO('mysql:host=192.168.65.227; dbname=MaelDrelon; charset=utf8','mael', '');
      
      if(isset($_POST['Matricule'],$_POST['Nom'],$_POST['Prenom'])) {
        $req = $maBase->exec("INSERT INTO `Medecin`(`Matricule`, `Nom`, `Prenom`) VALUES('".$_POST['Matricule']."','".$_POST['Nom']."','".$_POST['Prenom']."')");
        echo "INSERT INTO `Medecin`(`Matricule`, `Nom`, `Prenom`) VALUES('".$_POST['Matricule']."','".$_POST['Nom']."','".$_POST['Prenom']."')";
        
        //$req = $maBase->exec("INSERT INTO `Medecin`(`Matricule`, `Nom`, `Prenom`) VALUES('124654','bonjour','coucou')");
      }

/*
        function Insert($req)
        {
	        {
	            die('impossible d’ajouter cet enregistrement : ');
	        }
	        echo "L’enregistrement est ajouté ";
        }
        Insert($req);
    */  }
    catch (Exception $erreur)
    {
        die ('Erreur : '.$erreur ->getMessage());
    }
?>
<html>
	<body>

	<form action="Exo3.php" method="post">

	Nom: <input type="text" name="Nom" />
	Prénom: <input type="text" name="Prénom" />
	Matricule: <input type="text" name="Matricule" />
	<input type="submit" />
	</form>

	</body>
	</html>
