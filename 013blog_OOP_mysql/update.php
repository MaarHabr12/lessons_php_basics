<?
require_once 'functions.php';
$db = require_once 'DB/start.php';//подключаемся к БД

$post = $db->update('posts', $_POST, $_GET['id']);

header('Location: index.php');
?>
