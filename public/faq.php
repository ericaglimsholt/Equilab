<?php require(__DIR__.'/partials/header.php'); ?>
<!-- Hero image -->
<div class="faq-hero-module">
  <img src="/img/faqhorse-1920x500.jpg" alt="">
</div>
<!-- Curve -->
<div class="curve"></div>
<!-- FAQ -->
<script id="template-faq-module" type="text/x-handlebars-template">
  <!-- Introducation -->
  <div class="row faq-heading">
    <div class="col-md-12">
      <h2>FAQ</h2>
    </div>
  </div>
  <div class="row faq">
    <!-- Categories -->
    <div class="col-md-4 categories">
      <ul>
        {{#each categories}}
        <li><h3 class="category" data-category="{{ datasetCategory }}">{{ category }}</h3></li>
        {{/each}}
      </ul>
    </div>
    <!-- Questions and answers -->
    <div class="col-md-6">
      {{#each faq}}
      <div class="question {{ category }}">
        <!-- Question  -->
        <h3>{{ question }}</h3>
        <!-- Answer -->
        <p>{{ answer }}</p>
      </div>
      {{/each}}
    </div>
  </div>
</script>
<div class="container faq-module"></div>

<?php require(__DIR__.'/partials/footer.php'); ?>
