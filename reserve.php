<?php
include_once 'header.php';
?>
<?php

$apiKey = "96d362f18fde89284617381c2648637d";
$cityId = "2747373";
$googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=en&units=metric&APPID=". $apiKey;
// cURL - Client-URL-bibliotheek wordt gebruikt om te
// communiceren met verschillende soorten servers
$ch = curl_init();
//Dit is de PHP-code om de OpenWeatherMap-service aan te vragen
// om de weersvoorspellingen te krijgen.
// Tijdens het verzenden van het verzoek worden de API-sleutel
// en het stads-ID verzonden met de verzoek-URL-queryreeks.
//Ik heb PHP CURL gebruikt om het API-verzoek te verzenden.
// Het CURL-antwoord heeft een JSON-indeling. Door het JSON-antwoord te decoderen,
// kunnen we de weergegevens ophalen en deze in de browser vullen.
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

curl_close($ch);
$data = json_decode($response);
$currentTime = time();

?>
<body  id="bubbleteaFlavours">
<h2>Weather</h2>
<div class="report-container">
    <h2><?php echo $data->name; ?></h2>
    <div class="time">
        <div><?php echo date("l G:i", $currentTime); ?></div>
        <div><?php echo date("jS F, Y",$currentTime); ?></div>
        <div><?php echo ucwords($data->weather[0]->description); ?></div>
        <img
                src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png" class="weather-icon"/> </div>
    <div class="weather-forecast">
        <span class="max-temperature">Max <?php echo $data->main->temp_max; ?>°C</span><br>
        <span class="min-temperature">Min <?php echo $data->main->temp_min; ?>°C</span>
    </div>
    <div class="time">
        <div>Humidity: <?php echo $data->main->humidity; ?> %</div>
        <div>Wind: <?php echo $data->wind->speed; ?> km/h</div>
    </div>
</div>



<h1> </h1><br><br>
<h1>To reserve</h1>
<p>If want to order large amounts of bubbltea you are at the right place.<br>
    - Simply select the amount off bubbletea you'd like to have.<br>
    - Select the size.<br>
    - Select the flavour of the drink.<br>
    - Select the flavour of the bubbles.<br>
    - fill in the form <br>
    After you filled in everything you will receive a email regarding your reservation.<br>
    The payment will be done when we deliver the bubbltea.</p>
<hr>
<div>
    <form>
        <input type="image" src="image\Middel3.png"  width="30%" >
        <input type="image" src="image\Middel4.png"  width="30%" >
    </form>
</div>
        <form action="includes/reserve.inc.php" method="POST" class="reserve">
            <p class="signup">Reserve</p>
            <p class="info"> Personal Order info</p>
            <input type="text" name="first" placeholder="Firstname">
            <br>
            <input type="text" name="last" placeholder="Lastname">
            <br>
            <input type="text" name="email" placeholder="email">
            <br>
            <input type="text" name="adres" placeholder="adres">
            <br>
            <input type="text" name="number" placeholder="number">
            <br>
            <input type="text" name="postcode" placeholder="postcode">
            <br>
            <div class="amount" >
                <p class="amount">Choose the amount of drinks you would like to order.</p>
                <input type="number" name="amount" placeholder="Amount">
            </div>
            <br><br>
            <div class="size" >
                <p class="size"> Choose between a medium and large size cup.</p>
                <input type="radio" id="medium" name="size" value="medium">
                <label for="medium">Medium</label><br>
                <input type="radio" id="large" name="size" value="large">
                <label for="large">Large</label><br>
            </div>
            <br><br>
            <div class="tea">
                <p class="tea"> Choose one flavour of the tea.</p>
                <input type="radio" id="apple" name="tea" value="apple">
                <label for="male">Apple</label><br>
                <input type="radio" id="strawberry" name="tea" value="strawberry">
                <label for="male">Strawberry</label><br>
                <input type="radio" id="honeydew" name="tea" value="honeydew">
                <label for="female">Honeydew</label><br>
                <input type="radio" id="passionfruit" name="tea" value="passionfruit">
                <label for="other">Passionfruit</label>
            </div>
            <br>
            <div class="bubbles" >
                <p class="bubbles"> Choose one flavour of the bubbles.</p>
                <input type="radio" id="apple" name="bubbles" value="apple">
                <label for="male">Apple</label><br>
                <input type="radio" id="strawberry" name="bubbles" value="strawberry">
                <label for="male">Strawberry</label><br>
                <input type="radio" id="honeydew" name="bubbles" value="honeydew">
                <label for="female">Honeydew</label><br>
                <input type="radio" id="passionfruit" name="bubbles" value="passionfruit">
                <label for="other">Passionfruit</label>
            </div>
            <br>
            <button type="submit" name="submit">Order</button>
            <br>
        </form>

    <script src="app.js"></script>
    </body>
</html>

