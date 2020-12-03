<?php
   session_start();
   if($_SESSION["autoriser"]!="oui"){
      header("location:TPFinal.php");
      exit();
   }
   if(date("H")<18)
      $bienvenue="Bonjour et bienvenue dans votre espace personnel";
   else
      $bienvenue="Bonsoir et bienvenue dans votre espace personnel";
?>
<!DOCTYPE html>
<html>
   <head>
      <link rel="stylesheet" href="../menu.css">
      <meta charset="utf-8" />
      <style>
         *{
            font-family:arial;
         }
         body{
            margin:20px;
         }
         a{
            color:#DD7700;
            text-decoration:none;
         }
         a:hover{
            text-decoration:underline;
         }
      </style>
   </head>
   <body onLoad="document.fo.login.focus()">
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
      <h1><?php echo $bienvenue?></h1>
      [ <a href="Deconnexion.php">Se déconnecter</a> ]
   </body>
   <div>
      <?php
         highlight_file((__FILE__));
      ?>
   </div>
   
</html>