<?php


?>

<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>Sample Form</title>
        </head>
        <body>
            <h1>Mite Count Collection</h1>
            <form action="record-data.php" method="POST">
                <label>Hive Name <input type="text" name="hive"></label><br>
                <label>Observation Date <input type="datetime" name="observation-date"></label><br>
                <label>Observation Duration in Days <input type="number" name="observation-duration"></label><br>
                <label>Mite Count <input type="number" name="mite-count"></label>
                <p><input type="submit"> <input type="reset" value="Start Over"></p>
            </form>
        </body>
        
        
    </html>
