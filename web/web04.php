<?php
$x = $_POST["x"];
$y = $_POST["y"];
$z = $x + $y;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h3>calc</h3>
    <hr>
    <p>
        <?php echo $x; ?>
        +
        <?php echo $y; ?>
        =
        <?php echo $z; ?>
    </p>
</body>
</html>