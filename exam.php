<?php
$response = array();
$link = mysqli_connect("localhost","root","etoges420","gsu");
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");

if (isset($_POST['id']) && isset($_POST['FirstName'])
    && isset($_POST['LastName']) && isset($_POST['otsenka'])&& isset($_POST['gruppa'])&& isset($_POST['tupe'])&& isset($_POST['Lesson'])) {

    $id = $_POST['id'];
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $otsenka = $_POST['otsenka'];
    $gruppa = $_POST['gruppa'];
    $tupe = $_POST['tupe'];
    $lesson = $_POST['Lesson'];

    $result = mysqli_query($link, "INSERT INTO `exam`(`id`,`FirstName`, `LastName`,`otsenka`,`gruppa`,`tupe`,`Lesson`)
VALUES ('$id ', '$FirstName','$LastName', '$otsenka','$gruppa', '$tupe', '$lesson')");
    if ($result) {
        $response['success'] = 1;


        echo json_encode($response);
    }
}




?>
