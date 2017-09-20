import Cosmic from 'cosmicjs';

const apiConfig = {
  bucket: { slug: 'equilab' }
};

const params = {
  type_slug: 'pages',
  limit: 5,
  skip: 0
};

// TODO: check language before api-request
Cosmic.getObjectType(apiConfig, params, (error, response) => {
  if (error) throw error;
  const objects = response.objects.all;
  const hiringpage = objects.map(function(obj) {
    if (obj.slug === 'landingpage') {
      console.log(obj);
    }
  });
  // console.log(hiringpage);
  // objects.forEach(obj => {
  //   console.log(obj.title);
  // });
  // for (let obj in object) {
  //   console.log(obj.title);
  // }
});
