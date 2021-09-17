<?php


//database config
$dbHost = "127.0.0.1:3307";
$dbUser = "root";
$dbPass = "";
$dbName = "market";
$dbPort = 3307;

//request from database
$mysqli = new mysqli($dbHost, $dbUser, $dbPass,$dbName,$dbPort);
if($_GET['name'] === 'ali'){
    $sql = "SELECT name,age,email FROM customers WHERE age > 20";
    $results = $mysqli->query($sql);


    foreach ($results as $result) {
        echo '<div>';
        echo 'user name is: '.$result['name'].' user age is : '.$result['age'].' user email is : '.$result['email'];
        echo '</div>';
    }

//    echo '<pre>';
//    print_r($result->fetch_all());
//    echo '</pre>';
}
