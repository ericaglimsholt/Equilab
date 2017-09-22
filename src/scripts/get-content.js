// import Cosmic from 'cosmicjs';
import Request from './request';

// TODO: set class on body and check page - then only fetch current page object?

let activeLanguage = document.querySelector('.active-lang').dataset.locale;
getPageContent('landingpage', activeLanguage);

const allLanguages = document.querySelectorAll('.lang-item');

allLanguages.forEach(function (language) {
  language.addEventListener('click', function () {
    if (language.classList.contains('active-lang')) return;
    document.querySelector('.active-lang').classList.remove('active-lang');
    language.classList.add('active-lang');
    activeLanguage = language.dataset.locale;
    getPageContent('landingpage', activeLanguage);
  });
});

function getPageContent (page, language) {
  const apiConfig = {
    bucket: { slug: 'equilab', read_key: 'uL8VNHCHAtT8yniCjW8jFaC90zooc8voQ1qDNVR8krjlKTo310' }
  };

  const params = {
    slug: page,
    locale: language
  };

  Request.getObject(apiConfig, params, (error, response) => {
    if (error) throw error;
    const page = response.object;
    const heading = document.querySelector('.landingpage-heading');
    heading.innerText = page.metadata.hero_title;
  });
}
