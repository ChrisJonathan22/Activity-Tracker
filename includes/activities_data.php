<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

include_once './db.inc.php';


$conn = new Database();

$query = "SELECT * FROM activity;";

$result = mysqli_query($conn->connect(), $query);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<p>Activity name: " . $row["activity_name"]. " - Hours: " . $row["activity_hours"]. " Minutes:" . $row["activity_minutes"]. "<br></p>";
    }
} else {
    echo "0 results";
}


?>
</body>
</html>