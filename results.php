<?php
    // get number from the textfield
    $age = $_POST['userAge'];
    $blank = "";
    // $day assignment removed: JavaScript syntax is not valid in PHP
    if ($age < 5) {
        echo 'You are old enough to watch R rated movies.';
    }
    else if ($age > 95) {
        echo 'You are old enough to watch PG-13 rated movies.';
    }
    else if ($age > 12 && $age < 17) {
        echo 'You are old enough to watch PG rated movies.';
    }
    else if ($age != $student) {
        echo 'You are old enough to watch G rated movies.';
    }
    else if ($age == $blank) {
        echo 'You are old enough to watch G rated movies.';
    }
    else {
        echo 'Enter a valid age.';
    }
?>