<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method ="POST" action="index.php?action=reponse">
<select name="liste" size="1">
    <?php
    foreach($signe as $k=>$v): ?>
    <option value="<?= $k ?>"><?= $k  ?></option>
   <?php endforeach ?>
   <input type="submit" value="OK" />
</select>
    </form>
</body>
</html>