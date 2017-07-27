<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="/static/css/app.css" media="screen">
  </head>
  <body>
    <?= $this->component(GridComponent, [
      "items" => [
        "Home" => "/",
        "Google" => "https://google.com/",
        "Github" => "https://github.com/",
        "Facebook" => "https://facebook.com/",
        "MySpace" => "https://myspace.com/",
        "Twitter" => "https://twitter.com/",
        "Reddit" => "https://reddit.com/",
        "LonelyPlanet" => "https://lonelyplanet.com/",
        "Washington Post" => "https://washingtonpost.com/",
      ]
    ]) ?>
  </body>
</html>
