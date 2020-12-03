<?php 
    session_start();
?>
<head>
    <link rel="stylesheet" type="text/css" href="exo1.css">  
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

    <form action="" method="session">
        <p>Votre nom : <input type="text" name="nom" /></p>
        <p><input type="submit" value="OK"></p>
    </form>  
    <form action="" method="session">
        <p><button name="unset">Destroy</button></p>
    </form>
      <?php   

  
        if(isset($_SESSION["nom"]))
        {
            echo"Bonjour ".$_SESSION["nom"];
        }
        else
        {
            echo"Formulaire non saisie";
            
        } 

        if(isset($_SESSION["unset"]))
        {
            session_unset();
        }
        echo "<p></p>";
    highlight_file((__FILE__));
    ?>
</body>
