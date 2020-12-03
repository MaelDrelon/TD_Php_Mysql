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
    highlight_file((__FILE__));
?>
