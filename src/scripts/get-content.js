// import Cosmic from 'cosmicjs';
import Request from './request';
import Handlebars from 'handlebars';

// check language in cookies instead or set to default en-US
let activeLanguage = document.querySelector('.active-lang').dataset.locale;
let DOMloaded = false;
let apiData = null;

document.addEventListener('DOMContentLoaded', function (event) {
  DOMloaded = true;
  if (apiData) {
    putContentLandingpage(apiData);
  }
});

getPageContentFromApi('landingpage', activeLanguage);

const allLanguages = document.querySelectorAll('.lang-item');

allLanguages.forEach(function (language) {
  language.addEventListener('click', function () {
    if (language.classList.contains('active-lang')) return;
    document.querySelector('.active-lang').classList.remove('active-lang');
    language.classList.add('active-lang');
    activeLanguage = language.dataset.locale;
    getPageContentFromApi('landingpage', activeLanguage);
  });
});

function getPageContentFromApi (page, language) {
  const apiConfig = {
    bucket: { slug: 'equilab', read_key: 'uL8VNHCHAtT8yniCjW8jFaC90zooc8voQ1qDNVR8krjlKTo310' }
  };
  const params = {
    slug: page,
    locale: language
  };
  Request.getObject(apiConfig, params, (error, response) => {
    if (error) throw error;
    apiData = response.object;
    if (DOMloaded) {
      putContentLandingpage(apiData);
    }
  });
}

function putContentLandingpage (pageObject) {
  // console.log(pageObject);
  // document.querySelector('.test').innerText = pageObject.metadata.hero_title;
  const source = document.getElementById('template').innerHTML;
  const template = Handlebars.compile(source);
  const data = {
    title: pageObject.metadata.hero_title
  };
  document.body.querySelector('.content-wrap').innerHTML = template(data);
}
