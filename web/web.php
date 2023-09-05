<?php
    $names = file("names.txt", FILE_IGNORE_NEW_LINES);
    $date = date("Y-m-d H:i:s");
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP test</title>
</head>
<body>
    <h3>Hello</h3>
    <ul>
        <?php
            for ($i=0; $i < count($names); $i++) { 
        ?>
            <li><?php echo "$names[$i] <br/>";?></li>
        <?php
            }
        ?>

    </ul>
    <hr>
    <p><?php echo $date; ?></p>
</body>
</html>