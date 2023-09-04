<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Checkbox</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'];?>"  method="get">Select type <br/>
    <select name="attributes[]" multiple>
        <option value="かえる">かえる</option>
        <option value="ひよこ">ひよこ</option>
        <option value="かもめ">かもめ</option>
    </select><br/>
    <input type="submit" value="register">
    </form>
<?php 
    if(isset($_GET['attributes'])){
        $description = join('', $_GET['attributes']);
        echo "【{$description}】";
    }?>    
</body>
</html>