'use strict';

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
  console.log(json.objects);
});
