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
  <title>Equilab</title>
  <link rel="stylesheet" type="text/css" href="<?php echo mix('/assets/app.css'); ?>">
</head>
<body>

<!-- Navbar -->
  <nav class="navbar navbar-toggleable-md navbar-light bg-faded navbar-default sticky-top">
    <!-- Button when on mobile device -->
    <img src="">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Equilab logotype -->
    <a class="navbar-brand" href="/">
      <img src="/img/Equilab_logo_v2_white.png" alt="Equilab Icon">
    </a>

    <script id="template-menu-module" type="text/x-handlebars-template">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active" data-page="">
          <a class="nav-link" href="/">{{ home }} <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item" data-page="faq.php">
          <a class="nav-link" href="/faq.php">{{ faq }}</a>
        </li>
        <li class="nav-item" data-page="suggestionsbox.php">
          <a class="nav-link" href="/suggestionsbox.php">{{ suggestion-box }}</a>
        </li>
        <li class="nav-item" data-page="hiring.php">
          <a class="nav-link" href="/hiring.php"> {{ hiring }}</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">{{ language }}</a>
          <ul class="dropdown-menu">
            <li class="lang-item nav-link" data-locale="en-US" href="#">{{ languages.english }}</li>
            <li class="lang-item nav-link" data-locale="sv-SE" href="#">{{ languages.swedish }}</li>
          </ul>
        </li>
      </ul>
    </script>
    <div class="menu-module collapse navbar-collapse navbar-mobile" id="navbarSupportedContent"></div>

</nav>

<div class="container-width">
