<?php
    $username = "ramona";
    $password = "Z05asw8m";
    $hostname = "localhost";
    $database = "ramona_bee_database";

    $cnxn = @mysqli_connect($hostname, $username, $password,
                            $database)
            or die("Error connecting to database: " .
                    mysqli_connect_error() );
?>