<?php
    $url = "http://api.aladhan.com/v1/calendar?latitude=-6.8224448&longitude=107.1392952&method=11&month=2&year=2019";
    $content = file_get_contents($url);
    $jsondata = json_decode($content, true);
?>

<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
    <table class="table table-hover">
        <thead class="thead-light">
            <tr>
                <th>Tanggal Masehi</th>
                <th>Tanggal Hijriah</th>
                <th>Fajr</th>
                <th>Dzuhur</th>
                <th>Ashar</th>
                <th>Maghrib</th>
                <th>Isya</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($jsondata['data'] as $value) {
                    echo ("<tr>");
                    echo("<td>" . ($value['date']['readable']) . "</td>");
                    echo("<td>" . ($value['date']['hijri']['date']) . "</td>");
                    echo("<td>" . ($value['timings']['Fajr']) . "</td>");
                    echo("<td>" . ($value['timings']['Dhuhr']) . "</td>");
                    echo("<td>" . ($value['timings']['Asr']) . "</td>");
                    echo("<td>" . ($value['timings']['Maghrib']) . "</td>");
                    echo("<td>" . ($value['timings']['Isha']) . "</td>");
                    echo("</tr>");
                }
            ?>
        </tbody>
    </table>
</html>