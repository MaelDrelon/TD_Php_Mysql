<?php
   session_start();
   @$login=$_POST["login"];
   @$pass=$_POST["pass"];
   @$valider=$_POST["valider"];
   $bonLogin="Julien";
   $bonPass="1234";
   $erreur="";
   if(isset($valider)){
      if($login==$bonLogin && $pass==$bonPass){
         $_SESSION["autoriser"]="oui";
         header("location:Session.php");
      }
      else
         $erreur="Mauvais login ou mot de passe!";
   }
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <link rel="stylesheet" href="../Index.css">
      <style>
         *{
            font-family:arial;
         }
         body{
            margin:20px;
         }
         input{
            border:solid 1px #2222AA;
            margin-bottom:10px;
            padding:16px;
            outline:none;
            border-radius:6px;
         }
         .erreur{
            color:#CC0000;
            margin-bottom:10px;
         }
      </style>
   </head>
   <body onLoad="document.fo.login.focus()">
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
      <h1>Authentification</h1>
      <div class="erreur"><?php echo $erreur ?></div>
      <form name="fo" method="post" action="">
         <input type="text" name="login" placeholder="Login" /><br />
         <input type="password" name="pass" placeholder="Mot de passe" /><br />
         <input type="submit" name="valider" value="S'authentifier" />
      </form>
   </body>
   <?php
   
   ?>
</html>