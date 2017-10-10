<?php require(__DIR__.'/partials/header.php'); ?>

<!-- Hero -->
<script id="template-hero-module" type="text/x-handlebars-template">
  <!-- Hero image -->
  <img class="danny" src="/img/fabian-1920x1080.jpg" alt="">
  <!-- Social media links -->
  <div class="title-hero">
    <h1>{{ title }}</h1>
  </div>
  <div class="social-media-holder">
    <a href="#">
      <img class="social" src="/img/download_apple.png" alt="">
    </a>
    <a href="#">
      <img class="social" src="/img/download_google.png" alt="">
    </a>
  </div>
</script>
<div class="hero-module"></div>

<!-- Curve -->
<div class="curve hero"></div>
  <!-- Selling points -->
  <script id="template-selling-points-module" type="text/x-handlebars-template">
    <div class="row selling-points-row">

      {{#each sellingPoints}}
      <div class="col-md-4 selling-point">
        <img src="{{ icon }}" alt="{{ title }}"> <!-- TODO: add specific alt field to CMS -->
        <h2>{{ title }}</h2>
        <p>{{ description }}</p>
      </div>
      {{/each}}
    </div>
  </script>
  <div class="container selling-points-module"></div>

  <!-- Image seperator -->
  <div class="image-seperator horse">
    <img src="/img/Equilab_midpage-topcurve.jpg" alt="Equilab is for every horserider">
    <img class="mobile" src="/img/midhorse-mobile-01.png" alt="Equilab is for every horserider">
  </div>
  <!-- Curve -->
  <div class="curve"></div>
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
  <div class="image-seperator wireframes">
    <img src="/img/mockup-a.png" alt="Equilab is for every horserider">
    <img src="/img/mockup-b.png" alt="Equilab is for every horserider">
  </div>
  <!-- Description -->
  <script id="template-description-module" type="text/x-handlebars-template">
    <div class="row description">
      <h2>{{ title }}</h2>
      <p>{{ description }}</p>
      <!-- Social media links -->
      <div class="app-links">
        <a href="https://itunes.apple.com/se/app/equilab/id1133163586?utm_campaign=DownloadApp&utm_medium=Website_click&utm_source=Website">
          <img src="/img/download_apple.png" alt="Equilab Apple Store">
        </a>
        <a href="https://play.google.com/store/apps/details?id=horse.schvung.equilab&utm_campaign=Download+App&utm_medium=Website&utm_source=Website">
          <img src="/img/download_google.png" alt="Equilab Google Play">
        </a>
      </div>
    </div>
  </script>
<div class="container description-module"></div>

<?php require(__DIR__.'/partials/footer.php'); ?>
