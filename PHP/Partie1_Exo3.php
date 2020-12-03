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
    $Tableaux = array(array("Nom"=> "Drelon", "Prenom"=> "Mael", "MDP"=> "1234"),
                      array("Nom"=> "Crepin", "Prenom"=> "Tom", "MDP"=> "5678"),
                      array("Nom"=> "Pauchet", "Prenom"=> "Milo", "MDP"=> "9101")
                    );



        echo '<table border"1"><tr>';
        for($i= 0;$i<3;$i++)
        {
            foreach($Tableaux[$i] as $Valeur )
            echo '<td>'."<p>\n".$Valeur."\n</p>".'</td>';
            echo '</tr><tr>';
        }
        echo '</tr></table>';




      

        highlight_file((__FILE__));
?>


</body>