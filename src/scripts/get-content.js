// import Cosmic from 'cosmicjs';
import Request from './request';
import Handlebars from 'handlebars';
import Faq from './faq';
import ActiveLanguage from './activeLanguage';

let activeLanguage = ActiveLanguage;

function fetchMenu () {
  fetch('/data/menu.json')
  .then(function (response) {
    // Error handlebars when error 400 appears
    if (response.status >= 400) {
      var err = {
        'message': 'There was an error with this request.'
      };
      return callback(err, false);
    }
    return response.json();
  })
  .then(function (json) {
    let menu;
    if (activeLanguage === 'sv-SE') {
      menu = json.languages.sv;
    } else {
      menu = json.languages.en;
    }
    putContentInDOM(menu, 'menu');
  })
  .then(function () {
    const allLanguages = document.querySelectorAll('.lang-item');
    allLanguages.forEach(function (language) {
      language.addEventListener('click', function () {
        activeLanguage = language.dataset.locale;
        localStorage.setItem('lang', activeLanguage);
        getCurrentPage(activeLanguage);
        fetchMenu();
      });
    });
  });
}
fetchMenu();

// fetch api data based on current page
function getCurrentPage () {
  let currentPageUrl = location.pathname.substring(1);
  if (currentPageUrl === '') {
    fetchLandingPage();
  }
  if (currentPageUrl === 'hiring.php') {
    fetchHiringPage();
  }
  if (currentPageUrl === 'faq.php') {
    fetchFaqPage();
  }
  if (currentPageUrl === 'suggestionsbox.php') {
    fetchSuggestionboxPage();
  }
}
getCurrentPage();

// Fetch landingpage
function fetchLandingPage () {
  getContentFromApi('hero', activeLanguage, (dataResponse) => {
    const heroData = {
      title: dataResponse.title
    };
    putContentInDOM(heroData, 'hero');
  });

// Get content from selling points in API
  getContentFromApi('selling-points', activeLanguage, (dataResponse) => {
    const sellingPoints = dataResponse.metadata.selling_points;
    const dataArray = [];
    sellingPoints.forEach(function (point) {
      const data = {
        icon: point.metadata.icon.imgix_url,
        title: point.metadata.title,
        description: point.metadata.description
      };
      dataArray.push(data);
    });
    const sellingPointsData = {sellingPoints: dataArray};
    putContentInDOM(sellingPointsData, 'selling-points');
  });

// Get content from qoutes in API
  getContentFromApi('quotes', activeLanguage, (dataResponse) => {
    const quotes = dataResponse.metadata.get_quotes;
    const dataArray = [];
    quotes.forEach(function (quote) {
      const data = {
        quote: quote.metadata.quote,
        name: quote.metadata.name,
        position: quote.metadata.position
      };
      dataArray.push(data);
    });
    const quotesData = {quotes: dataArray};
    putContentInDOM(quotesData, 'quotes');
  });

  getContentFromApi('description', activeLanguage, (dataResponse) => {
    const description = dataResponse.metadata;
    const descriptionData = {
      title: description.title,
      description: description.content
    };
    putContentInDOM(descriptionData, 'description');
  });
}

// Get content from hiring in API
function fetchHiringPage () {
  getContentFromApi('hirings', activeLanguage, (dataResponse) => {
    const hirings = dataResponse.metadata;
    const textBlocksArray = [];
    const adsArray = [];
    hirings.textblock.forEach(function (block) {
      const data = {
        title: block.hiring_block_title,
        textContent: block.hiring_block_text
      };
      textBlocksArray.push(data);
    });
    hirings.hiring_ads.forEach(function (ad) {
      const moreInfoArray = [];
      ad.metadata.ad_text_block.forEach(function (block) {
        const moreInfo = {
          heading: block.ad_text_block_heading,
          infoText: block.ad_text
        };
        moreInfoArray.push(moreInfo);
      });
      const data = {
        adTitle: ad.title,
        adPreamble: ad.metadata.the_task_at_hand,
        moreInfo: moreInfoArray
      };
      adsArray.push(data);
    });
    const hiringsData = {
      heading: hirings.hirings_heading,
      textBlocks: textBlocksArray,
      ads: adsArray
    };
    putContentInDOM(hiringsData, 'hirings');
  });
}

// Get content from faq in API
function fetchFaqPage () {
  getContentFromApi('faq', activeLanguage, (dataResponse) => {
    const questions = dataResponse.metadata.questions;
    const categories = dataResponse.metadata.faq_category_list;
    const datasetCategories = dataResponse.metadata.dataset_categories;
    const questionsArray = [];
    const categoriesArray = [];
    questions.forEach(function (question) {
      const data = {
        question: question.metadata.question,
        answer: question.metadata.answer,
        category: question.metadata.faq_category
      };
      questionsArray.push(data);
    });
    let i = 0;
    categories.forEach(function (category) {
      const data = {
        category: ucFirst(category),
        datasetCategory: datasetCategories[i]
      };
      categoriesArray.push(data);
      i++;
    });

    const faqData = { faq: questionsArray, categories: categoriesArray };
    putContentInDOM(faqData, 'faq');
  });
}

function fetchSuggestionboxPage () {
}

function getContentFromApi (moduleObj, language, onDone) {
  const apiConfig = {
    bucket: { slug: 'equilab', read_key: 'tB0fiR44Yh7ZUUct6iqu3Do9PGSEy1gdUlX4xMWIAwb6sE6Dfx' }
  };
  const params = {
    slug: moduleObj,
    locale: language
  };
  Request.getObject(apiConfig, params, (error, response) => {
    if (error) throw error;
    onDone(response.object);
  });
}

// put api content in dom using Handlebars templating
function putContentInDOM (data, moduleObj) {
  const templateElement = document.getElementById('template-' + moduleObj + '-module');
  const moduleElement = document.body.querySelector('.' + moduleObj + '-module');
  const source = templateElement.innerHTML;
  const template = Handlebars.compile(source);
  moduleElement.innerHTML = template(data); // +=
  if (moduleObj === 'faq') {
    Faq.sortFaqByCategory();
  }
}

// make first letter of string uppercase
function ucFirst (string) {
  return string.charAt(0).toUpperCase() + string.slice(1);
}
