<?php


header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");
$host = 'localhost';
$user = 'root';
$password = 'etoges420';
$db_name = 'gsu';
$response = array();
$link = mysqli_connect($host,$user,$password,$db_name);



if(isset($_POST['id']))
{
    $link = mysqli_connect($host, $user, $password, $db_name)
    or die("Ошибка " . mysqli_error($link));
    $id = mysqli_real_escape_string($link, $_POST['id']);

    $query ="DELETE FROM exam WHERE id = '$id'  " ;

    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    mysqli_close($link);
}




?>

