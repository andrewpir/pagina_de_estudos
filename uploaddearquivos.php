<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPLOAD DE ITEMS</title>
</head>
<body>
    <?php
        if(isset($_POST['acao'])) {
            $arquivo = $_FILES['file'];
            $arquivonovo = explode('.',$arquivo['name']);
            move_uploaded_file($arquivo['tmp_name'], 'uploads/'.$arquivo['name']);
        }
    ?>
    <form action='' method='post' enctype='multipart/form-data'>
        <input type='file' name='file'>
        <input type="submit" name="acao" value="Enviar">
    </form>
</body>
</html>