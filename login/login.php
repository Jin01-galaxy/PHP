<?php
$id = $_POST["id"];
$password = $_POST["password"];

$message = "NG";
if ($id === "Andy" && $password === "secret") {
    $message = "OK";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login test</title>
</head>
<body>
    <h2>Login <?php echo $message ?></h2>
</body>
</html>