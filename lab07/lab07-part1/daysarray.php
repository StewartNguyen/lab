<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using PHP variables, arrays and operators </title>
</head>
<body>
    <h1>PHP variables, arrays and operators</h1>
    <?php
        $daysenglish = array ("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
        echo "<p>The days of the week in English are:<br> " . implode (", ", $daysenglish). ".</p>";
        $daysfrench = array ("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
        echo "<p>The days of the week in French are:<br> " . implode (", ", $daysfrench). ".</p>";
    ?>
</body>
</html>