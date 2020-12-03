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
   session_start();
   session_destroy();
   header("location:Parti2_TPFinal.php");
?>
 <?php
   highlight_file((__FILE__));
   ?>