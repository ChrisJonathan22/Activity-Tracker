<?php 

    include_once './db.inc.php';

    $activity_name = $_POST['activity_name'];
    $date = $_POST['date'];
    $hours = $_POST['hours'];
    $minutes = $_POST['minutes'];

    echo var_dump($_POST);

    $query = "INSERT INTO activity (activity_date, activity_name, activity_hours, activity_minutes) 
    VALUES ('$date', '$activity_name', '$hours', '$minutes');";

    mysqli_query($conn, $query);

?>