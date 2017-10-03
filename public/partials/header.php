<?php
function mix($path)
{
  $files = json_decode(file_get_contents('mix-manifest.json'), true);
  return $files[$path];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="<?php echo mix('/assets/app.css'); ?>">
</head>
<body>
  <!-- <div class="overlay"></div> -->
  <nav class="navbar navbar-toggleable-md navbar-light bg-faded navbar-default sticky-top">

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <a class="navbar-brand" href="/">
      <img src="/img/Equilab_logo_v1@2x.png" alt="Equilab Icon">
    </a>

    <script id="template-menu-module" type="text/x-handlebars-template">
      <ul class="navbar-nav ml-auto">
        <!-- Input 'Landingpage' title from API here -->
        <li class="nav-item active ">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <!-- Input 'FAQ' title from API here -->
        <li class="nav-item">
          <a class="nav-link" href="/faq.php">FAQ</a>
        </li>
        <!-- Input 'Suggestions' title from API here -->
        <li class="nav-item">
          <a class="nav-link" href="/suggestionsbox.php">Suggestion Box</a>
        </li>
        <!-- Input 'Hiring' title from API here -->
        <li class="nav-item">
          <a class="nav-link" href="/hiring.php">Work for us</a>
        </li>
        <!-- Input 'Language' title from API here -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Language</a>
          <ul class="dropdown-menu">
            {{#each languages}}
            <li class="lang-item nav-link" data-locale="{{ locale }}" href="#">{{ language }}</li>
            {{/each}}
          </ul>
        </li>
      </ul>
    </script>
      <div class="menu-module collapse navbar-collapse navbar-mobile" id="navbarSupportedContent"></div>
  </nav>
