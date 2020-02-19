<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

require $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';


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
                $fitness += $row["activity_hours"] * 60;
                $fitness += $row["activity_minutes"];
                $fitness /= 60;
            break;

            case "Leisure":
                $leisure += $row["activity_hours"] * 60;
                $leisure += $row["activity_minutes"];
                $leisure /= 60;
            break;

            case "Work":
                $work += $row["activity_hours"] * 60;
                $work += $row["activity_minutes"];
                $work /= 60;
            break;

            case "Eating":
                $eating += $row["activity_hours"] * 60;
                $eating += $row["activity_minutes"];
                $eating /= 60;
            break;

            case "Reading":
                $reading += $row["activity_hours"] * 60;
                $reading += $row["activity_minutes"];
                $reading /= 60;
            break;

            case "Sleeping":
                $sleeping += $row["activity_hours"] * 60;
                $sleeping += $row["activity_minutes"];
                $sleeping /= 60;
            break;

            default:
                echo "Unknown activity";
        }
    }
} else {
    echo "0 results";
}

echo "Time spent sleeping: " . $reading;

$activities = array(
    "Fitness" => $fitness,
    "Leisure" => $leisure,
    "Work" => $work,
    "Eating" => $eating,
    "Reading" => $reading,
    "Sleeping" => $sleeping
);

?>
</body>
</html>