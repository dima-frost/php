<?php
//ini_set('display_errors', 1)
define('SITE_NAME', "Основы синтаксиса");
?>
       <!DOCTYPE html>

<html>
<head>

    <title>
        <?php
        echo SITE_NAME
            ?>
    </title>
    <?php
    const LESSON_NAME = "Переменные и константы";
    ?>
</head>
<body>
    <h1>
        <?php
        echo LESSON_NAME;
        $userName = "Dmitriy"
        ?>
     </h1>
    <p>
        <?php
        echo "Привет". " ". $userName
        ?>
    </p>
</body>
</html>