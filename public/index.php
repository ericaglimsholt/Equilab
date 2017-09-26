<?php require(__DIR__.'/partials/header.php'); ?>

  <!-- Hero content -->
  <script id="template-hero-module" type="text/x-handlebars-template">
    <div class="row hero-row">
      <div class="app-links">
        <h1>{{ title }}</h1>
        <a href="https://itunes.apple.com/se/app/equilab/id1133163586?utm_campaign=DownloadApp&utm_medium=Website_click&utm_source=Website">
          <img src="/img/appstore-logo.png" alt="Equilab Apple Store">
        </a>
        <a href="https://play.google.com/store/apps/details?id=horse.schvung.equilab&utm_campaign=Download+App&utm_medium=Website&utm_source=Website">
          <img src="/img/googleplay-logo.png" alt="Equilab Google Play">
        </a>
      </div>
    </div>
  </script>
  <div class="container hero-module"></div>

  <!-- Selling points -->
  <script id="template-selling-points-module" type="text/x-handlebars-template">
    <div class="row selling-points-row">
      {{#each sellingPoints}}
      <div class="col-md-4 selling-point">
        <img src="{{ icon }}" alt="">
        <h2>{{ title }}</h2>
        <p>{{ description }}</p>
      </div>
      {{/each}}
    </div>
  </script>
  <div class="containter selling-points-module"></div>

  <!-- Image seperator -->
  <div class="image-seperator">
    <img src="/img/horseriding.png" alt="Equilab is for every horserider">
  </div>

  <!-- Quotes -->
  <script id="template-quotes-module" type="text/x-handlebars-template">

    <div class="row quotes">
      {{#each quotes}}
      <div class="col-md-4 quote">
        <h3>{{ quote }}</h3>
        <p class="name">{{ name }}</p>
        <p>{{ position }}</p>
      </div>
      {{/each}}
    </div>
  </script>
  <div class="container quotes-module"></div>

  <!-- Image seperator -->
  <div class="image-seperator">
    <img src="/img/iphoneapp.png" alt="Equilab is for every horserider">
  </div>

  <!-- Description -->
  <script id="template-description-module" type="text/x-handlebars-template">
    <div class="row description">
      <!-- Include title from API here -->
      <h2>{{ title }}</h2>
      <!-- Include description from API here -->
      <p>{{ description }}</p>
      <!-- Include appstore icon from API here -->
      <a href="https://itunes.apple.com/se/app/equilab/id1133163586?utm_campaign=DownloadApp&utm_medium=Website_click&utm_source=Website">
        <img src="/img/appstore-logo.png" alt="Equilab Apple Store">
      </a>
      <!-- Include google play icon from API here -->
      <a href="https://play.google.com/store/apps/details?id=horse.schvung.equilab&utm_campaign=Download+App&utm_medium=Website&utm_source=Website">
        <img src="/img/googleplay-logo.png" alt="Equilab Google Play">
      </a>
    </div>
  </script>
  <div class="container description-module"></div>

<?php require(__DIR__.'/partials/footer.php'); ?>
