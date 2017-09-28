<?php require(__DIR__.'/partials/header.php'); ?>

<div class="faq-hero-module">
  <img src="/img/horseriding.png" alt="">
</div>

<script id="template-faq-module" type="text/x-handlebars-template">
  <div class="row faq-heading">
    <h1>FAQ</h1>
  </div>

  <div class="row faq">
    <div class="col-md-5 categories">
      <ul>
        <li><h2>Basics</h2></li>
        <li><h2>Usage</h2></li>
        <li><h2>Functionality</h2></li>
        <li><h2>Privacy</h2></li>
        <li><h2>Miscellaneous</h2></li>
      </ul>
    </div>


      <div class="row questions">
        {{#each faq}}
        <div class="col-md-4 question {{ category }}">
          <p>{{ question }}</p>
          <p>{{ answer }}</p>
        </div>
        {{/each}}
      </div>
  </script>
</div>
<div class="container faq-module"></div>



<?php require(__DIR__.'/partials/footer.php'); ?>
