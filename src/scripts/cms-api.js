import Cosmic from 'cosmicjs';

const apiConfig = {
  bucket: { slug: 'equilab', read_key: 'uL8VNHCHAtT8yniCjW8jFaC90zooc8voQ1qDNVR8krjlKTo310' }
};

// TODO: check language before api-request
// set class on body and check page - then only fetch current page object?

// function getContentByLanguage (page, language, typeslug) {
const params = {
  type_slug: 'pages',
  slug: 'landingpage', // 'landingpage'
  locale: 'en-US'// 'en-US' // optional, if localization set on Objects
};
// console.log(params);

Cosmic.getObject(apiConfig, params, (error, response) => {
  if (error) throw error;
  console.log(response);
  // const pages = response.objects.all;
  // console.log(pages);
  // console.log(objects);
  // const landingpage = pages.find(function (obj) {
  //   return obj.slug === 'landingpage';
  // });
  // document.querySelector('.landingpage-heading').innerText = landingpage.metadata.title_landingpage;

  // const hiringpage = pages.find(function (obj) {
  //   return obj.slug === 'hiring';
  // });
});
// }
// getContentByLanguage('landingpage', 'en-US', 'pages');
