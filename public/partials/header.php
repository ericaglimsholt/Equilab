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
      <!-- Pages -->
      <ul class="navbar-nav ml-auto">
        {{#each menuItems}}
          {{#if @last}}
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">{{ menuItem }}</a>
            <ul class="dropdown-menu">
              {{#each languages}}
              <li class="lang-item nav-link" data-locale="{{ locale }}" href="#">{{ language }}</li>
              {{/each}}
            </ul>
          </li>
          {{else}}
          <li class="nav-item">
            <a class="nav-link" href="{{ pageLink }}">{{ menuItem }}</a>
          </li>
          {{/if}}
        {{/each}}
      </ul>
    </script>
  <div class="menu-module collapse navbar-collapse navbar-mobile" id="navbarSupportedContent"></div>
</nav>
