<?php 

    require $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';

    $activity_name = $_POST['activity_name'];
    $date = $_POST['date'];
    $hours = $_POST['hours'];
    $minutes = $_POST['minutes'];

    $query = "INSERT INTO activity (activity_date, activity_name, activity_hours, activity_minutes) 
    VALUES ('$date', '$activity_name', '$hours', '$minutes');";

    $conn = new Database();
    mysqli_query($conn->connect(), $query);

?>