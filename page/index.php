<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Destiny Spinner</title>
</head>
<body>
    <div class="container">
        <h1>Destiny Spinner</h1>
        
        <?php
        //declarations
        $names = ["Jason","Kobe","Jacob","Riley","Charlie"];
        $jobs = ["Dream Catcher","Farmer","Time Traveler","Code Pirate","Robot Trainer"];
        $places = ["Japan","Singapore","Hong Kong","Paris","USA"];
        $events = ["won the lottery","fell in love","lost everything","found a treasure chest","became"];

        $chosen_name = $names[rand(o, count($names)-1)];
        $chosen_job = $jobs[rand(o, count($jobs)-1)];
        $chosen_place = $places[rand(o, count($places)-1)];

        ?>
    </div>
</body>
</html>