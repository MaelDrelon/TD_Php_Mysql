<?php
    try 
    {
        $maBase= new PDO('mysql:host=192.168.65.227; dbname=MaelDrelon; charset=utf8','mael', '');
    }

    catch (Exception $erreur)
    {
        die ('Erreur : '.$erreur ->getMessage());
    }

    function afficher_requet_select($marequete,$maBase)
    {
        $marequete = $maBase->query('SELECT * FROM Medecin');
        $donnees = $marequete->fetch();
        while ($donnees = $marequete->fetch())
        {
?>
<head>
</head>
<body>
    <p>
        Nom du docteur: <?php echo $donnees['Nom']; ?><br />
        Prenom de ce docteur: <?php echo $donnees['Prenom'] ?><br />
        Son numéro de série: <?php echo $donnees['Matricule'] ?><br />
    </p>
<?php
        }
        $marequete->closeCursor(); 
    }
?>
</body>