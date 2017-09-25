'use strict';

const url = 'https://api.cosmicjs.com';
const apiVersion = 'v1';

module.exports = {

  getObject: function (config, params, callback) {
    const endpoint = url + '/' + apiVersion + '/' + config.bucket.slug + '/object/' + params.slug + '/?locale=' + params.locale + '&read_key=' + config.bucket.read_key;
    console.log(endpoint);
    fetch(endpoint)
    .then(function (response) {
      if (response.status >= 400) {
        var err = {
          'message': 'There was an error with this request.'
        };
        return callback(err, false);
      }
      return response.json();
    })
    .then(function (response) {
      return callback(false, response);
    });
  }
};
