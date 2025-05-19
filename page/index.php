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

        echo "<h2>Welcome, $chosen_name the $chosen_job from $chosen_place</h2>";
        echo "<div class='log'>";

        //looping plus the conditionals
        $fate_score = 0;

        for ($day = 1; $day <= 7; $day++) {
            $event = $events[rand(0, count($events)-1)];
            $luck = rand(1, 100);

            //icon based on event
            $icon = "";
            if (strpos($event, "lottery") !== false) $icon = "money.png";
            else if (strpos($event, "love")!== false) $icon = "love.png";
            else if (strpos($event, "mystery")!== false) $icon = "mystery.png";
            else if (strpos($event, "famous")!== false) $icon = "star.png";
            else $icon = "bad.png";

            echo "<div class='day'>";
            echo "<strong>Day $day:</strong> You $event (Luck: $luck)";
            echo " <img src='assets/img/event_icons/$icon' class='event-icon'><br>";

            if ($luck >= 70) {
                echo "You thrived today!<br>";
                $fate_score += 2;
            } elseif ($luck >= 40) {
                echo "It was an average day.<br>";
                $fate_score += 1;
            } else {
                echo "Misfortune struck...<br>";
            }
            echo "</div>";
        }

        //final fate
        echo "<hr><h3>Your Final Fate:</h3>";
        if ($fate_score >= 12) {
            echo "You lived a beautiful life!";
        } elseif ($fate_score >= 7) {
            echo "You lived a decent and calm life.";
        } else {
            echo "Fate was not in your favor...";
        }

        echo "</div>";

        ?>
    </div>
</body>
</html>