<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
</head>
<body>
    <h1>Rohirrim Tour Booking Confirmation</h1>

    <?php
    // 1. Extract text inputs using isset() and $_POST
    $firstname = isset($_POST["firstname"]) ? htmlspecialchars($_POST["firstname"]) : "";
    $lastname  = isset($_POST["lastname"])  ? htmlspecialchars($_POST["lastname"])  : "";
    $age       = isset($_POST["age"])       ? htmlspecialchars($_POST["age"])       : "";
    $food      = isset($_POST["food"])      ? htmlspecialchars($_POST["food"])      : "";
    $partysize = isset($_POST["partysize"]) ? htmlspecialchars($_POST["partysize"]) : "";

    // 2. Extract and map species (H = Hobbit, M = Human, D = Dwarf, E = Elf)
    $speciesCode = isset($_POST["species"]) ? $_POST["species"] : "";
    switch ($speciesCode) {
        case "H":
            $species = "Hobbit";
            break;
        case "M":
            $species = "Human";
            break;
        case "D":
            $species = "Dwarf";
            break;
        case "E":
            $species = "Elf";
            break;
        default:
            $species = htmlspecialchars($speciesCode);
    }

    // 3. Extract booking checkboxes and join them
    $tours = [];
    if (isset($_POST["1day"])) {
        $tours[] = "One-day tour";
    }
    if (isset($_POST["4day"])) {
        $tours[] = "Four-day tour";
    }
    if (isset($_POST["10day"])) {
        $tours[] = "Ten-day tour";
    }
    if (isset($_POST["accom"])) {
        $tours[] = "Accommodation";
    }
    $tourText = implode(" and ", $tours);

    // 4. Output the confirmation details matching the required webpage
    echo "<p>Welcome $firstname $lastname !</p>";
    if (!empty($tourText)) {
        echo "<p>You are now booked on the $tourText</p>";
    }
    echo "<p>Species: $species</p>";
    echo "<p>Age: $age</p>";
    echo "<p>Meal Preference: $food</p>";
    echo "<p>Number of travellers: $partysize</p>";
    ?>
</body>
</html>
