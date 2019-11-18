<!DOCTYPE html>

<html>
<head>
    <title>Основы языка PHP</title>
</head>
<body>
<h1>Типы данных</h1>
<div>
    <?php
    $var = 26
    echo "Мой возраст: $var";
    ?>
    <?php
    echo gettype($var);
    $var = "Dmitriy";
    echo $var;
    echo <br>;
    echo  gettype($var);
    ?>
</div>
</body>
</html>