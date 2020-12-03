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
<form action="" method="post">
 <p>Votre nom : <input type="text" name="nom" /></p>
 <p><input type="submit" value="OK"></p>
</form>
<?php 
    if(isset($_POST['nom']))
    {
        echo '<p><div class="red">Vous êtes '.$_POST['nom'].'</div></p>';
    } 
    highlight_file((__FILE__));
?>

</body>