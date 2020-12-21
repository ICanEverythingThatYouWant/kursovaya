<?php


header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");
$host = 'localhost';
$user = 'root';
$password = 'etoges420';
$db_name = 'gsu';
$response = array();
$link = mysqli_connect($host, $user, $password, $db_name);


if (isset($_GET['id']) && isset($_GET['FirstName'])
    && isset($_GET['LastName']) && isset($_GET['gruppa'])) {

    $id = $_GET['id'];
    $FirstName = $_GET['FirstName'];
    $LastName = $_GET['LastName'];
    $otsenka = $_GET['otsenka'];


}


$query = "SELECT * FROM exam where Lesson = 'История Рима'  ";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));


for ($response = []; $row = mysqli_fetch_assoc($result); $response[] = $row) ;

if ($result) {
    $response['success'] = 1;


    echo json_encode($response);
}


?>