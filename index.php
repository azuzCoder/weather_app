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

function check($val, $default){
    if(array_key_exists($val, $_GET)) return $_GET[$val];
    else return $default;
}

?>
<div class="container">
    <div class="title">
        <div class="logo"><img src="icons/logo.png" width="40px"></div>
        <h2 class="title-text">Weather App</h2>
    </div>
    <div class="search">
        <input type="text" id='city' name="city" placeholder="Enter the city"><button onclick="get_weather(true)"><img class="search-icon" src="icons/search.png"></button>
    </div>
    <div class="main">
        <div class="image">
            <img id="main-image" src="<?php echo check('image_src', '') ?>" height="256px" alt='Weather'>
        </div>
        <div class="info">
            <div class="info-body">
                <div class="card">
                    <h1 id="temp" class="center"><?php echo check("temp", "-"); ?>°C</h1>
                </div>
                <div class="card">
                    <p id="description" class="description space"><?php echo check("description", "Clear"); ?></p>
                </div>
                <div class="card city-country space">
                    <span class="city"><?php echo check("city", "Belfast"); ?></span>
                    <!-- , <span class="country">UK</span> -->
                </div>
                <div class="card additional space center">
                    <img src="icons/humidity.png" height="32px">
                    <div class="additional-info">
                        <p id="humidity"><?php echo check("humidity", "-"); ?>%</p>
                        <p class="sub-text">Humidity</p>
                    </div>
                    <img class="margin-left" src="icons/wind-speed.png" height="32px">
                    <div class="additional-info">
                        <p id="wind-speed"><?php echo check("wind_speed", "-"); ?> km/h</p>
                        <p class="sub-text">Wind Speed</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="script.js"></script>

<script>
    // This script will be executed when the entire page is loaded
    window.onload = function() {
        // Call first_request function if the page is loaded without any GET parameters
        //if (Object.keys(<?php //echo json_encode($_GET); ?>//).length === 0) {
        //    first_request();
        //}
        <?php

        if(empty($_GET))echo "first_request();";

        ?>
    };
</script>
</body>
</html>
