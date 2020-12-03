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
    $A = 10;
    $B = 5;
    $C = 8;  
    $Total = $B*$B;

    echo '<p>'.$A."\n+\n".$B."\n+\n".$C.'</p>';
    echo '<p>('.$B."\n*\n".$B.")\n-\n4\n*\n".$A."\n*\n".$C.'<p>';
    echo '<p>'.$Total-4*$A*$C.'<p>';
    echo '<p>Il ne peut pas y avoir de solution</p>';
        highlight_file((__FILE__));
?>


</body>