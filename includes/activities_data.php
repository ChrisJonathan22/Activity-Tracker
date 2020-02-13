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

$fitness = 0;
$leisure = 0;
$work = 0;
$eating = 0;
$reading = 0;
$sleeping = 0;


if ($resultCheck > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<p>Activity name: " . $row["activity_name"]. " - Hours: " . $row["activity_hours"]. " Minutes:" . $row["activity_minutes"]. "<br></p>";

        switch ($row["activity_name"]) {
            case "Fitness":
                $fitness += $row["activity_hours"];
            break;

            case "Leisure":
                $leisure += $row["activity_hours"];
            break;

            case "Work":
                $work += $row["activity_hours"];
            break;

            case "Eating":
                $eating += $row["activity_hours"];
            break;

            case "Reading":
                $reading += $row["activity_hours"];
            break;

            case "Sleeping":
                $sleeping += $row["activity_hours"];
            break;

            default:
                echo "Unknown activity";
        }
    }
} else {
    echo "0 results";
}

echo "Fitness hours " . $fitness;


?>
</body>
</html>