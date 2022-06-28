<?php
require_once __DIR__."/vendor/autoload.php";
require_once __DIR__ . "/film.php";

use MongoDB\Client;

$db = new \MongoDB\Client("mongodb://127.0.0.1/");
$db = $db->films->films;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab2</title>
    <script src="script.js"></script>
</head>
<body>
<?php
if (isset($_POST["video"])) {
    video($db);
} elseif (isset($_POST["actor"])) {
    filmByActor($db, $_POST["actor"]);
} elseif (isset($_POST["year"])) {
    newFilm($db);
}
?>
<form action="" method="post">
    <input type="hidden" name="video"><br>
    <input type="submit" value="Фильмы на видеокассетах"><br>
</form>
<br>
<form action="" method="post">
    <input type="text" name="actor" placeholder="Имя актера"><br>
    <input type="submit" value="Найти фильм по актеру"><br>
</form>
<br>
<form action="" method="post">
    <input type="hidden" name="year"><br>
    <input type="submit" value="Найти новые фильмы"><br>
</form><br>
<div id="content2"></div><br>
<input type="button" value="Сохранить" onclick="set()">
<input type="button" value="Получить" onclick="get()">
</body>
</html>
