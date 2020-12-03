<?php
    try 
    {
        $maBase= new PDO('mysql:host=192.168.65.227; dbname=MaelDrelon; charset=utf8','mael', '');
    }

    catch (Exception $erreur)
    {
        die ('Erreur : '.$erreur ->getMessage());
    }

    $reponse = $maBase->query('SELECT * FROM Patient');
    $donnees = $reponse->fetch();
    while ($donnees = $reponse->fetch())
    {
?>
<head>
    <link rel="stylesheet" href="../menu.css">
</head>
<body>
    <p>
        <nav>
            <ul>
              <li>
                <a href="../HTML.html">HTML</a>
              </li>
              <li>
                <a href="../CSS.html">CSS</a>
              </li>
              <li>
                <a href="../PHP.html">PHP</a>
              </li>
              <li>
                <a href="">Empty</a>
              </li>
            </ul>
        </nav>
    </p>
    <p>
    Nom du patient: <?php echo $donnees['Nom']; ?><br />
    Prenom de ce patient: <?php echo $donnees['Prenom'] ?><br />
    Son numéro de série: <?php echo $donnees['NumSS'] ?><br />
    </p>
<?php
    }
    $reponse->closeCursor(); 
?>
</body>