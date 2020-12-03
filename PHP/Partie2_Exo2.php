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
    $Numbers = array('10', '53', '31', '84');
    $Tableaux = array("Nom"=> "Drelon",
                      "Prenom"=>"Mael",
                      "MDP"=>"1234");

    foreach ($Numbers as $Number) 
    {
        echo "$Number\n";
    }

    echo '<table border"1"><tr>';
    for($i= 0;$i<1;$i++)
    {
        echo '<td>'."\n".$Tableaux['Nom']."\n".$Tableaux['Prenom']."\n".$Tableaux['MDP']."\n".'</td>';
    }
    echo '</tr></table>';

    highlight_file((__FILE__));

?>


</body>