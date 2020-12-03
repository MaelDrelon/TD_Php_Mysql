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
    <?php
        $NombreAleatoire = rand ( 0 , 100 );


        if($NombreAleatoire%2 == 1)
        {
            
            echo '<div class="blue">'.$NombreAleatoire.' est impaire</div>';

        }
        else
        {

            echo '<div class="red">'.$NombreAleatoire. ' est pair</div>';

        }
        highlight_file((__FILE__));
    ?>  
</body>
