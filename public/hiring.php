<?php require(__DIR__.'/partials/header.php'); ?>

<!-- Header image -->
<div class="row hero-image">
  <img src="/img/minecraft-1920x500.jpg" alt="">
</div>

<div class="curve"></div>

<!-- Work -->
<script id="template-hirings-module" type="text/x-handlebars-template">
  <!-- Introduction -->
  <div class="row work">
    <div class="col-md-12">
      <h2>{{ heading }}</h2>
      {{#each textBlocks}}
      <h3>{{ title }}</h3>
      <p>{{ textContent }}</p>
      {{/each}}
    </div>
  </div>
  <!-- Wanted jobs -->
  <div class="row jobs">
    {{#each ads}}
    <div class="col-md-12 job">
      <img src="/img/v1question_white@2x.png" alt="Searching job?">
      <h2>{{ adTitle }}</h2>
      <p>{{ adPreamble }}</p>
      {{#each moreInfo }}
      <h3>{{ heading }}</h3>
      <p>{{ infoText }}</p>
      {{/each}}
    </div>
    {{/each}}
  </div>
</script>
<div class="container hirings-module"></div>

<?php require(__DIR__.'/partials/footer.php'); ?>
