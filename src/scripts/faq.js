'use strict';

module.exports = {

  sortFaqByCategory: function () {
    const questions = document.querySelectorAll('.question');
    const categories = document.querySelectorAll('.category');

    if (questions.length > 0) {
      questions.forEach(question => {
        if (question.classList.contains('basics')) {
          question.classList.add('active-cat');
        }
      });
    }
    categories.forEach(catItem => catItem.addEventListener('click', filterFaq));

    function filterFaq (event) {
      const clickedCat = event.target.dataset.category;
      console.log(clickedCat);
      questions.forEach(question => {
        question.classList.remove('active-cat');
        if (question.classList.contains(clickedCat.toLowerCase())) {
          console.log('hej');
          question.classList.add('active-cat');
        }
      });
    }
  }

};
