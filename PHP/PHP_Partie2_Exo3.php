<?php
    function moyenne($Valeurs){
        $moyenne=($Valeurs[0]+$Valeurs[1]+$Valeurs[2])/3;
        echo"$moyenne";
    }
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
   highlight_file((__FILE__));
   ?>