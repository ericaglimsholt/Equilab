'use strict';
// From suggestion box
let button = document.getElementById('counter');
let video = document.getElementById('video');
// Plays video on suggestion box
if (button) {
  button.addEventListener('click', function () {
    video.play();
  }, false);
}
