<!DOCTYPE html>
<!-- ICS2O-Unit6-03-PHP -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Current Weather Web Page PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Adrina Peighambarzadeh" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.light_blue-orange.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>Weather today, with API & JSON</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Weather today:</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="page-content">
        Click the button to get the current weather.
        <br /><br />
        <form method="post">
          <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
            Click to see the weather!
          </button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          // OpenWeatherMap API call
          $url = "https://api.openweathermap.org/data/2.5/weather?lat=45.4211435&lon=-75.6900574&appid=fe1d80e1e103cff8c6afd190cad23fa5";

          // Get the data
          $response = file_get_contents($url);

          if ($response !== false) {
            $data = json_decode($response, true);

            $tempKelvin = $data['main']['temp'];
            $tempCelsius = round($tempKelvin - 273.15);
            $iconId = $data['weather'][0]['icon'];
            $iconUrl = "https://openweathermap.org/img/wn/{$iconId}@2x.png";

            echo "<p>Temperature is {$tempCelsius}&deg;C.</p>";
            echo "<img src='{$iconUrl}' alt='Weather Icon'>";
          } else {
            echo "<p>Sorry, an error occurred. Please try again later.</p>";
          }
        }
        ?>
      </div>
    </main>
  </div>
</body>

</html>