'use strict';

module.exports = {
  sortFaqByCategory: function () {
    const questions = document.querySelectorAll('.question');
    const categories = document.querySelectorAll('.category');

    if (questions.length > 0) {
      questions.forEach(question => {
        // Set default displayed category
        categories.forEach(category => {
          if (category.dataset.category === 'basics') {
            category.classList.add('active-cat-heading');
          }
        });
        if (question.classList.contains('basics')) {
          question.classList.add('active-cat');
        }
        question.querySelector('h3').addEventListener('click', showAnswer);
      });
    }
    categories.forEach(category => category.addEventListener('click', filterFaq));

    // Filter faq by clicked category
    function filterFaq (event) {
      categories.forEach(category => category.classList.remove('active-cat-heading'));
      const clickedCategory = event.target;
      clickedCategory.classList.add('active-cat-heading');
      questions.forEach(question => {
        question.classList.remove('active-cat');
        if (question.classList.contains(clickedCategory.dataset.category.toLowerCase())) {
          question.classList.add('active-cat');
        }
      });
    }
    function showAnswer (event) {
      const question = event.target;
      const answer = event.target.parentElement.querySelector('p');
      question.classList.toggle('active-question');
      answer.classList.toggle('active-answer');
    }
  }
};
