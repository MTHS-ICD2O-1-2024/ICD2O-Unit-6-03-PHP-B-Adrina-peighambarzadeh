<!DOCTYPE html>
<!-- ICS2O-Unit6-03-PHP-MDL -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="API & JSON weather app" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Adrina. peighambarzadeh" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>API & JSON weather app</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <script src="./js/script.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">API & JSON weather app</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
      </div>
      <form action="./answer.php" method="GET">
      <div class="page-content">Click the button bellow to calculate the current temperature</div>
      <br />
      <!-- Accent-colored raised button with ripple -->
      <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
        type="submit">
        Click here!
      </button>
      </form>
      <br />
      <div class="page-content-answer">
        <div id="answer"></div>
      </div>
    </main>
  </div>
</body>

</html>
