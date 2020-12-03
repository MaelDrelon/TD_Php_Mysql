<?php 
    function tableau()
    {
        echo "<table>
                        <td>
                            Exemple
                        </td>
              </table>";
    }
?>

<head>
    <link rel="stylesheet" href="CssExo1.css"> 
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
        <?php tableau(); ?>
    </div>

    <div class=bas>
        <?php tableau(); ?>
    </div>
</body>
<?php
   highlight_file((__FILE__));
   ?>