'use strict';

module.exports = {

  sortFaqByCategory: function () {
    const questions = document.querySelectorAll('.question');
    const categories = document.querySelectorAll('.category');

    if (questions.length > 0) {
      questions.forEach(question => {
        // set default choosen category
        categories.forEach(cat => {
          if (cat.dataset.category === 'basics') {
            cat.classList.add('active-cat-heading');
          }
        });
        if (question.classList.contains('basics')) {
          question.classList.add('active-cat');
        }
        question.querySelector('h3').addEventListener('click', showAnswer);
      });
    }
    categories.forEach(catItem => catItem.addEventListener('click', filterFaq));

    function filterFaq (event) {
      categories.forEach(catItem => catItem.classList.remove('active-cat-heading'));
      event.target.classList.add('active-cat-heading');
      const clickedCat = event.target.dataset.category;
      questions.forEach(question => {
        question.classList.remove('active-cat');
        if (question.classList.contains(clickedCat.toLowerCase())) {
          question.classList.add('active-cat');
        }
      });
    }
    function showAnswer (event) {
      const question = event.target;
      question.classList.toggle('active-question');
      const answer = event.target.parentElement.querySelector('p');
      answer.classList.toggle('active-answer');
    }
  }

};
