<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <title>Activity Tracker</title>
</head>
<body>
    <header class="nav">
        <ul class="nav_container">
            <li><a href="/">Home</a></li>
            <li><a href="/activities.php">Activities</a></li>
        </ul>
    </header>

    <div class="content_container">
        <div class="form_container">
            <form action="/includes/save_activity.php" method="post"> 
                <div class="activity_container">
                    <label>Select an activity</label>
                    <select>
                        <option selected>Activity</option>
                        <option>Fitness</option>
                        <option>Leisure</option>
                        <option>Work</option>
                        <option>Eating</option>
                        <option>Reading</option>
                        <option>Sleeping</option>
                    </select>
                </div>
                <div class="date">    
                    <label>Date:</label>
                    <input type="date" name="" id="">
                </div>
                <div class="hours">    
                    <label>Hours:</label>
                    <input type="number" name="" id="" max="24">
                </div>
                <div class="minutes">
                    <label>Minutes:</label>
                    <input type="number" name="" id="" max="60">
                </div>    
            </form>    
        </div>
    </div>
</body>
</html>

<?php 

    include_once './includes/db.inc.php';

?>