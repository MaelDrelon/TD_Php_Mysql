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
<?php

    try 
    {
        $maBase= new PDO('mysql:host=192.168.65.227; dbname=MaelDrelon; charset=utf8','mael', '');
        $reponse = $maBase->query('SELECT * FROM Patient');
        $donnees = $reponse->fetch();
        while ($donnees = $reponse->fetch())
        {    
        ?>
<body>

    <p>
    <p>Nom du patient: <?php echo $donnees['Nom']; ?></p>
    <p>Prenom de ce patient: <?php echo $donnees['Prenom'] ?></p>
    <p>Son numéro de série: <?php echo $donnees['NumSS'] ?></p>
    </p>
<?php
        }
        $reponse->closeCursor();
    } 

catch (Exception $erreur)
    {
        die ('Erreur : '.$erreur ->getMessage());
    }
  
    ?>
</body>
<?php
highlight_file((__FILE__));
?>