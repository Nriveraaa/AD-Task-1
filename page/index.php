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

        //
        $chosen_name = $names[rand(o, count($names)-1)];
        $chosen_job = $jobs[rand(o, count($jobs)-1)];
        $chosen_place = $places[rand(o, count($places)-1)];

        //images
        $img_place = strtolower(str_replace(" ", "_", $chosen_place)) . ".png";
        $img_job = strtolower(str_replace(" ", "_", $chosen_job)) . ".png";

        echo "<div class='character'>";
        echo "<img src='assets/img/$img_job' alt='$chosen_job' class='char-img'>";
        echo "<img src='assets/img/$img_place' alt='$chosen_place' class='char-img'>";
        echo "</div>";

        

        ?>
    </div>
</body>
</html>