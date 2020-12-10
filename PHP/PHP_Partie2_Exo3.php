<?php
    function moyenne($Valeurs){
        $moyenne=($Valeurs[0]+$Valeurs[1]+$Valeurs[2])/3;
        echo"$moyenne";
    }
?>
<head>
<link rel="stylesheet" href="../Index.css">
</head>
<body>
<p>
        <nav>
          <ul>
            <li class="deroulant"><a href="../PHP.php">PHP &ensp;</a>
              <ul class="sous">
                <li><a href="../PHPPart1.php">PHP Partie 1</a></li>
                <li><a href="PHP_Partie1_Exo1.php">Exo 1</a></li>
                <li><a href="PHP_Partie1_Exo2.php">Exo 2</a></li>
                <li><a href="PHP_Partie1_Exo3.php">Exo 3</a></li>
                <li><a href="PHP_Partie1_Exo4.php">Exo 4</a></li>
                <li><a href="PHP_Partie1_Exo5.php">Exo 5</a></li>
                <li><a href="PHP_Partie1_Exo6.php">Exo 6</a></li>
                <li><a href="PHP_Partie1_Exo7.php">Exo 7</a></li>
                <li><a href="PHP_Partie1_Exo8.php">Exo 8</a></li>
                <li><a href="PHP_Partie1_TPFinal.php">Exo Final</a></li>
                <li><a href="../PHPPart2.php">PHP Partie 2</a></li>
                <li><a href="PHP_Partie2_Exo1.php">Exo 1</a></li>
                <li><a href="PHP_Partie2_Exo2.php">Exo 2</a></li>
                <li><a href="PHP_Partie2_Exo3.php">Exo 3</a></li>
                <li><a href="PHP_Partie2_ExoFinal.php">Exo Final</a></li>
                </ul>
              </li>
              <li class="deroulant"><a href="../BDD.php">BDD</a>
                <ul class="sous">
                  <li><a href="BDD_TD1_Exo1.php">TD1 Exo 1</a></li>
                  <li><a href="BDD_TD1_Exo2.php">TD1 Exo 2</a></li>
                  <li><a href="BDD_TD1_Exo3.php">TD1 Exo 3</a></li>
                  <li><a href="BDD_TD1_Exo4.php">TD1 Exo 4</a></li>
                  <li><a href="BDD_TD1_Exo5.php">TD1 Exo 5</a></li>
                  <li><a href="BDD_TD1_Exo6.php">TD1 Exo 6</a></li>
                  <li><a href="BDD_TD1_Exo7.php">TD1 Exo 7</a></li>
                  <li><a href="BDD_TD2_Exo1.php">TD2 Exo 1</a></li>
                  <li><a href="BDD_TD2_Exo2.php">TD2 Exo 2</a></li>
                  <li><a href="BDD_TD2_Exo3.php">TD2 Exo 3</a></li>
                </ul>
              </li>
              <li class="deroulant"><a href="../SQL.php">SQL</a>
                <ul class="sous">
                  <li><a href="SQL_TD3_Exo2.php">TD3 Exo 2</a></li>
                  <li><a href="SQL_TD4_Exo1.php">TD4 Exo 1</a></li>
                  <li><a href="SQL_TD4_Exo2.php">TD4 Exo 2</a></li>
                  <li><a href="SQL_TD4_Exo3.php">TD4 Exo 3</a></li>
                </ul>
              </li>
            <li class="deroulant"><a href="../CSS.php">CSS &ensp;</a>
              <ul class="sous">
                <li><a href="../CSS/CSSexo1.html">Exo 1</a></li>
                <li><a href="../CSS/CSSexo2.html">Exo 2</a></li>
                <li><a href="../CSS/CSSexo3.html">Exo 3</a></li>
                <li><a href="../CSS/CSSexo4.html">Exo 4</a></li>
              </ul>
            </li>
            <li class="deroulant"><a href="../HTML.php">HTML</a>
              <ul class="sous">
                <li><a href="../HTML/Exo1.html">Exo 1</a></li>
                <li><a href="../HTML/Exo2.html">Exo 2</a></li>
                <li><a href="../HTML/Exo3.html">Exo 3</a></li>
                <li><a href="../HTML/Exo5.html">Exo 5</a></li>
              </ul>
            </li>
            <li><a href="../index.php">Acceuil</a></li>
          </ul>
        </nav>
      </p>
    <div>
        <table>
            <form action="" method="post">
                <tr>
                    <th>Valeurs : </th>
                    <td><input type="number" name="Valeur1" id="Valeur1"></td>
                    <td><input type="number" name="Valeur2" id="Valeur2"></td>
                    <td><input type="number" name="Valeur3" id="Valeur3"></td>
                </tr>
                <tr>
                    <td><button type="submit" name="Calcul">Calcul</button></td>
                </tr>  
            </form> 
        </table>   
    </div>
    <div class="bottom">
        <?php
            if(isset($_POST['Calcul'])){
                moyenne(
                    array($_POST['Valeur1'],$_POST['Valeur2'],$_POST['Valeur3'])
                );
            }
        ?>
    </div>
</body>
<?php
   
   ?>