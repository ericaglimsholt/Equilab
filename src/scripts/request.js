'use strict';

// Base API url
const url = 'https://api.cosmicjs.com';
const apiVersion = 'v1';

module.exports = {
  // Get object from API
  getObject: function (config, params, callback) {
    const endpoint = url + '/' + apiVersion + '/' + config.bucket.slug + '/object/' + params.slug + '/?locale=' + params.locale + '&read_key=' + config.bucket.read_key;
    fetch(endpoint)
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
    .then(function (response) {
      return callback(false, response);
    });
  }
};
