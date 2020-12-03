<?php

    function Tableau($Titre1,$Titre2,$Titre3) {
        
            ?><table>
                <tr>
                <?php echo"<th>$Titre1</th>";?>
                    <td>Mael</td>
                    <td>Drelon</td>
                </tr>
                <tr>
                <?php echo"<th>$Titre2</th>";?>
                    <td>Milo</td>
                    <td>Pauchet</td>
                </tr>
                <tr>
                <?php echo"<th>$Titre3</th>";?>
                    <td>Tom</td>
                    <td>Crepin</td>
                </tr>
            </table><?php
    }
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
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
        <?php Tableau("Titre","Titre","Titre") ?>
    </div> 
</body>