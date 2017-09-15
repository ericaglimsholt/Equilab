import Cosmic from 'cosmicjs';

const apiConfig = {
  bucket: { slug: 'equilab' }
};

// const params = {
//   type_slug: 'hirings',
//   limit: 5,
//   skip: 0
// };
//
const params = {
  type_slug: 'hirings',
  limit: 5,
  skip: 0
};


Cosmic.getObjectType(apiConfig, params, (error, response) => {
  const objects = response.objects.all;
  // console.log(objects);
  objects.forEach(obj => {
    console.log(obj.title);
  });
  // for (let obj in object) {
  //   console.log(obj.title);
  // }

});
