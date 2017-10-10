<?php require(__DIR__.'/partials/header.php'); ?>

<!-- Hero image -->
<div class="hero-image">
  <img src="/img/suggestionhorse-1920x500.jpg" alt="">
</div>
<!-- Curve -->
<div class="curve sugg"></div>
<!-- Suggestion box -->
<div class="container suggestion-box">
  <div class="row introducation">
    <!-- Introduction text -->
    <div class="col-md-12">
      <h2>Suggestion Box</h2>
      <p>Listed below are suggestions for new functionality that might be added to the app. Please vote for the suggestions you like to see appear in future updates!</p>
    </div>
  </div>

  <div class="row suggestions">
    <!-- Suggestions -->
    <div class="col-md-10">
      <video id="video" class="arrow-video" height="auto" preload="true">
       <source type="video/mp4" src="/img/arrow-tilted.mp4">
      </video>
      <h3>Instagram integration</h3>
      <p>Directly after you have stopped exercising you press stopp training, add some extra informationen if you want that. Then all you need to do is press save activity which will make the app save and process the information.</p>
    </div>

    <!-- Counter -->
    <div class="col-md-2 counter">
      <button class="counter-before" id="counter" type="button" name="counter">
        <img class="heart-icon" src="/img/heart.png" alt="">
      </button>
    </div>

  </div>
  <div class="row suggestions">
    <!-- Suggestions -->
    <div class="col-md-10">
      <video id="video" class="arrow-video" height="auto" preload="true">
       <source type="video/mp4" src="/img/arrow-tilted.mp4">
      </video>
      <h3>Comparision and competition between stables</h3>
      <p>Directly after you have stopped exercising you press stopp training, add some extra informationen if you want that. Then all you need to do is press save activity which will make the app save and process the information.</p>
    </div>
    <!-- Counter -->
    <div class="col-md-2 counter">
      <button id="counter" type="button" name="counter">
        <img class="heart-icon" src="/img/heart.png" alt=""> 800</button>
    </div>
  </div>
  <div class="row suggestions">
    <!-- Suggestions -->
    <div class="col-md-10">
      <video id="video" class="arrow-video" height="auto" preload="true">
       <source type="video/mp4" src="/img/arrow-tilted.mp4">
      </video>
      <h3>Encourage your friends training</h3>
      <p>Directly after you have stopped exercising you press stopp training, add some extra informationen if you want that. Then all you need to do is press save activity which will make the app save and process the information.</p>
    </div>
    <!-- Counter -->
    <div class="col-md-2 counter">
      <button id="counter" type="button" name="counter">
        <img class="heart-icon" src="/img/heart.png" alt=""> 249</button>
    </div>
  </div>
  <div class="row suggestions">
    <!-- Suggestions -->
    <div class="col-md-10">
      <video id="video" class="arrow-video" height="auto" preload="true">
       <source type="video/mp4" src="/img/arrow-tilted.mp4">
      </video>
      <h3>Training achievements</h3>
      <p>Directly after you have stopped exercising you press stopp training, add some extra informationen if you want that. Then all you need to do is press save activity which will make the app save and process the information.</p>
    </div>
    <!-- Counter -->
    <div class="col-md-2 counter">
      <button id="counter" type="button" name="counter">
        <img class="heart-icon" src="/img/heart.png" alt=""> 113</button>
    </div>
  </div>
  <div class="row forms">
    <div class="col-md-12 text">
      <h3>Missing a feature?<br/>
      Please send us your thoughts and ideas!</h3>
      <div class="send-box">
        <p class="send">Make a suggestion</p>
      </div>
    </div>
  </div>
</div>

<script>
'use strict';
// From suggestion box
let button = document.getElementById('counter');
let video = document.getElementById('video');
// Plays video on suggestion box
button.addEventListener('click',function(){
  video.play();
},false);

</script>

<?php require(__DIR__.'/partials/footer.php'); ?>
