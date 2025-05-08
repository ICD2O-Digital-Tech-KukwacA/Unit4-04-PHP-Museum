<!-- Unit4-04-PHP-Museum -->
<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Web page metadata -->
    <meta charset="utf-8" />
    <meta name="description" content="Museum"/>
    <meta name="keywords" content="immaculata, icd2o" />
    <meta name="author" content="Kukwac" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Web page favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="./Favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./Favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./Favicons/favicon-16x16.png">
    <link rel="manifest" href="./Favicons/site.webmanifest">
    <!-- Web page CSS file -->
    <link rel="stylesheet" href="./css/style.css" />
    <!-- Web page title -->
    <title>Museum Admission</title>
  </head>
  <body>
    <!-- Web page Heading -->
    <?php
      echo "<h3>Museum Admission.</h3>";
    ?>
    <!-- User info textfield (user's age) -->
    <form action="results.php" method="post" target="result">
    <label for="userAge">User's Age</label>
    <input type="number" id="userAge" placeholder="Enter age..." name="userAge">
    <!-- Select bar for the days of the week -->
    <select name="dayOfTheWeek" id="dayOfTheWeek">
      <option value="Sunday">Sunday</option>
      <option value="Monday">Monday</option>
      <option value="Tuesday">Tuesday</option>
      <option value="Wednesday">Wednesday</option>
      <option value="Thursday">Thursday</option>
      <option value="Friday">Friday</option>
      <option value="Saturday">Saturday</option>
    </select>
    <!-- Display button -->
    <input type="submit" value="Display Result" />
    </form>
    <!-- Result frame -->
    <iframe id="result" name="result">
      <div id="display"></div>
    </iframe>
  </body>
</html>