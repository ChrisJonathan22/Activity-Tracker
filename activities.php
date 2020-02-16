<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
    <title>Activities</title>
</head>
<body>
    <header class="nav">
        <ul class="nav_container">
            <li><a href="/">Home</a></li>
            <li><a href="/activities.php">Activities</a></li>
        </ul>
    </header>
    <h1 class="title">Activities</h1>
    <?php

    // define('DOC_ROOT_PATH', $_SERVER['DOCUMENT_ROOT'].'/');
    // include_once DOC_ROOT_PATH . "./includes/activities_data.php";
    // include $_SERVER["DOCUMENT_ROOT"] . "/includes/activities_data.php";
    // include_once $_SERVER["DOCUMENT_ROOT"]."/includes/activities_data.php";
    echo $_SERVER["DOCUMENT_ROOT"]."/includes/activities_data.php";

    // echo var_dump($activities);

    $path = "includes/activities_data.php";
    echo "path : $path";
    include "$path";

    ?>
    <canvas id="myChart" class="pie_chart" width="400" height="400"></canvas>
<script src="/js/script.js"></script>
</body>
</html>