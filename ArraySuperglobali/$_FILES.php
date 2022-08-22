<?php
//$_FILES
if (isset($_POST['form1']))
    var_dump($_FILES);  
    $uploadPath = $_SERVER['DOCUMENT_ROOT'] . '/corsi/php/upload';
    $tmpFile = $_FILES['file1']['tmp_name'];
    move_uploaded_file($tmpFile,$uploadPath.'/'.$_FILES['file1']['name']);
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="$_FILES.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file1">
        <input type="submit" name="form1" value="Carica file...">
    </form>
</body>
</html>