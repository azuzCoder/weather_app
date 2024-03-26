
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Weather App</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $city = $_GET['city'];
    $temp = $_GET['temp'];
    $humidity = $_GET['humidity'];
    $wind_speed = $_GET['wind_speed'];
    $description = $_GET['description'];
    $image_src = $_GET['image_src'];

    try {
        require_once "connection.php";

        $query = "INSERT INTO weather_data (city, temp, humidity, wind_speed) VALUES (?, ?, ?, ?)";

        $stmt = $pdo->prepare($query);
        $stmt->execute([$city, $temp, $humidity, $wind_speed]);

        $pdo = null;
        $stmt = null;

        $url = "index.php?city=" . $city . "&temp=" . $temp . "&humidity=" . $humidity . "&wind_speed=" . $wind_speed . "&description=" . $description . "&image_src=" . $image_src;

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: ./index.php");
}

?>

<script>
    // header("Location: ./index.php?city=" . $city . "&temp=" . $temp . "&humidity=" . $humidity . "&wind_speed=" . $wind_speed . "&description=" . $description . "&image_src=" . $image_src, false);
    console.log('ishla')
    window.location.href="<?php echo $url ?>"
</script>
</body>
</html>