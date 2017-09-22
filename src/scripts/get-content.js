// import Cosmic from 'cosmicjs';
import Request from './request';

// TODO: check language before api-request
// set class on body and check page - then only fetch current page object?

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
    console.log(page);
  });
}
getPageContent('landingpage', 'en-US');
// set languages short codes with dataset on menuitems - check active one

document.querySelectorAll('.lang-item');
