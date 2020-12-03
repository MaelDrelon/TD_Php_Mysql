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
<form action="" method="get">
 <p>Votre nom : <input type="text" name="nom" /></p>
 <p><input type="submit" value="OK"></p>
</form>
<?php 
    if(isset($_GET['nom']))
    {
        echo '<p><div class="violet">Vous êtes '.$_GET['nom'].'</div></p>';
    } 
    highlight_file((__FILE__));
?>
</body>