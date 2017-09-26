<?php require(__DIR__.'/partials/header.php'); ?>

  <!-- Hero content -->
  <picture>
    <source srcset="/img/danny-gallegos-desktop.jpg" media="(min-width: 1000px)">
    <!-- <source srcset="/img/danny_cropped.jpg" media="(min-width: 800px)"> -->
    <img class="hero-image" srcset="/img/danny-gallegos-desktop.jpg" alt="…">
  </picture>
  <script id="template-hero-module" type="text/x-handlebars-template">

    <div class="row hero-row">
        <div class="col-md-6 title">
          <h1>{{ title }}</h1>
        </div>
        <div class="col-md-6 links">
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
      <div class="col-md-4 selling-point">
        <!-- Add icon from API here -->
        <img src="/img/disciplines.png" alt="">
        <!-- Add title from API here -->
        <h2>Track</h2>
        <!-- Add description from API here -->
        <p>Automatically collect information about your training by turning on Equilab and keeping the phone in your pocket while riding. The app gathers information on speed, turning, intensity, gait, surface hardness and jumps.</p>
      </div>
      <div class="col-md-4 selling-point">
        <!-- Add icon from API here -->
        <img src="/img/disciplines.png" alt="">
        <!-- Add title from API here -->
        <h2>Follow</h2>
        <!-- Add description from API here -->
        <p>Afterwards you can analyze your training by looking at your performance, energy consumption, gait distribution, intensity jumps, stride, beat, pace, distance and much more. Look at your weekly and monthly trends and get an understanding of how to balance your training och monitor differences in your results.</p>
      </div>
      <div class="col-md-4 selling-point">
        <!-- Add icon from API here -->
        <img src="/img/disciplines.png" alt="">
        <!-- Add title from API here -->
        <h2>Share</h2>
        <!-- Add description from API here -->
        <p>Organize your training with coaches and co-riders by getting live updates on when you, your friends or your horse has been training.</p>
      </div>
    </div>
  </script>
  <div class="containter selling-points-module"></div>

  <!-- Image seperator -->
  <div class="image-seperator horse">
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
  <div class="image-seperator wireframes">
    <img src="/img/iphoneapp.png" alt="Equilab is for every horserider">
  </div>

  <!-- Description -->
  <div class="container description-module">
    <div class="row description">
      <!-- Include title from API here -->
      <h2>Used by more than 30 000 riders worldwide!</h2>
      <!-- Include description from API here -->
      <p>We all love horses and wants what’s best for them. This requires us to keep track of our horses and exercise them in a sustainable way. We hope to make this a little bit easier by helping you to automatically track your trainings with the help of your phone. This will help you keep better control over your exercises and make sure you balanced it in the best possible way for your horse & goals.</p>

    <div class="app-links">
      <a href="https://itunes.apple.com/se/app/equilab/id1133163586?utm_campaign=DownloadApp&utm_medium=Website_click&utm_source=Website">
        <img src="/img/appstore-logo.png" alt="Equilab Apple Store">
      </a>
      <!-- Include google play icon from API here -->
      <a href="https://play.google.com/store/apps/details?id=horse.schvung.equilab&utm_campaign=Download+App&utm_medium=Website&utm_source=Website">
        <img src="/img/googleplay-logo.png" alt="Equilab Google Play">
      </a>
    </div>

    </div>
  </div>

<?php require(__DIR__.'/partials/footer.php'); ?>
