<?php
function nextLastFriday()
{
    $lastFridayThisMonth = strtotime('last friday of this month');

    return $lastFridayThisMonth > time() ? $lastFridayThisMonth : strtotime('last friday of next month');

}
$nextCriticalMass = date('F jS', nextLastFriday());
?>
<html lang="en">
<head>
    <title>Critical Mass Winnipeg @ Last Friday</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            max-width: 600px;
            margin: auto;
            padding: 1em;
        }
        p {
            line-height: 1.25em;
        }

        ul {
            padding-top: 0;
            padding-left: 1em;
        }
        li {
            padding-bottom:0.33em;
        }
    </style>
</head>
<body>
    <h1>Critical Mass Winnipeg FAQ</h1>
    <h2>When</h2>
    <p><strong><?php echo $nextCriticalMass ?>@5pm</strong> and every last Friday!</p>
    <h2>Where</h2>
    <p>Central Park (<a href="https://goo.gl/maps/N1CX1QmnaE5Hjej47" target="_blank">map</a>)</p>
    <h2>What</h2>
    <p>
        Critical Mass (CM) is a super fun leaderless
        group bike ride to celebrate human-powered
        transportation. We ride slow and together as
        a group and claim our right to the road!<br><br>
        Hundreds of cities around the world participate every month!<br><br>
        <a href="https://en.wikipedia.org/wiki/Critical_Mass_(cycling)">More info on Wikipedia</a>
    </p>
    <h2>Who</h2>
    <p>
        Critical mass is an organized coincidence with no leadership or membership.
    </p>
    <ul>
        <li>Hang out with like-minded individual: <a href="https://discord.gg/7mswZvMA" target="_blank">Winnipeg Cycling Community discord</a>!</li>
        <li>Follow <a href="https://instagram.com/criticalmass.wpg" target="_blank">@criticalmass.wpg</a> on IG.</li>
        <li>Improve this site on <a href="https://github.com/ohryan/criticalmasswpg" target="_blank">Github</a>.</li>
    </ul>

</body>
</html>
