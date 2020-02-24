<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

// Request db.inc.php which includes the database
require $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';


// Create a new instance of the Database class
$conn = new Database();

// Create a query
$query = "SELECT * FROM activity;";

// Use the database method to connect to the database
$result = mysqli_query($conn->connect(), $query);
$resultCheck = mysqli_num_rows($result);

// Create variables where each piece of data from the database will be stored
$fitness = 0;
$leisure = 0;
$work = 0;
$eating = 0;
$reading = 0;
$sleeping = 0;

// Check if the activity date matches the current date otherwise do not include
function checkActivityDate($activityDate) {
    if ($row["activity_date"] === date("Y-m-d")) {
        echo "The date matches";

    }
}


// Loop through the result from the database and store the relevant data within
// each variable and convert it
if ($resultCheck > 0) {
    while($row = $result->fetch_assoc()) {

        switch ($row["activity_name"]) {
            case "Fitness":
                $fitness += $row["activity_hours"] * 60;
                $fitness += $row["activity_minutes"];
            break;

            case "Leisure":
                $leisure += $row["activity_hours"] * 60;
                $leisure += $row["activity_minutes"];
            break;

            case "Work":
                $work += $row["activity_hours"] * 60;
                $work += $row["activity_minutes"];
            break;

            case "Eating":
                $eating += $row["activity_hours"] * 60;
                $eating += $row["activity_minutes"];
            break;

            case "Reading":
                $reading += $row["activity_hours"] * 60;
                $reading += $row["activity_minutes"];
                echo var_dump($row["activity_date"]);
                echo "<br>";
                echo var_dump(date("Y-m-d"));
                if ($row["activity_date"] === date("Y-m-d")) {
                    echo "The date matches";
                }
            break;

            case "Sleeping":
                $sleeping += $row["activity_hours"] * 60;
                $sleeping += $row["activity_minutes"];
            break;

            default:
                echo "Unknown activity";
        }
    }
} else {
    echo "0 results";
}

// Create an array and store each data from each variable with the relevant key
$activities = array(
    "Fitness" => $fitness /= 60,
    "Leisure" => $leisure /= 60,
    "Work" => $work /= 60,
    "Eating" => $eating /= 60,
    "Reading" => $reading /= 60,
    "Sleeping" => $sleeping /= 60
);

?>
</body>
</html>