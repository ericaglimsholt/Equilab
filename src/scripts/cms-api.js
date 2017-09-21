import Cosmic from 'cosmicjs';

const apiConfig = {
  bucket: { slug: 'equilab' }
};

// TODO: check language before api-request
Cosmic.getObjects(apiConfig, (error, response) => {
  if (error) throw error;
  const pages = response.objects.all;
  // console.log(objects);
  const landingpage = pages.find(function (obj) {
    return obj.slug === 'landingpage';
  });
  document.querySelector('.landingpage-heading').innerText = landingpage.metadata.title_landingpage;

  const hiringpage = pages.find(function (obj) {
    return obj.slug === 'hiring';
  });
  console.log(hiringpage);
});
