'use strict';

function addReplaceLangCode(url, langCode) {
  var a = document.createElement('a');
  a.href = document.getElementById('url').value; // or document.location.href;

  var paths = a.pathname.split('/');
  paths.shift();

  if(paths[0].length == 2) {
    paths[0] = langCode;
  }else{
    paths.unshift(langCode);
  }
  return a.protocol + '//' +
    a.host + '/' + paths.join('/') +
    (a.search != '' ?  a.search : '') +
    (a.hash != '' ?  a.hash : '');
}

function onClickReplaceEN() {
  document.getElementById('result').innerHTML = addReplaceLangCode( document.location.href, 'en');
}
function onClickReplaceSV() {
  document.getElementById('result').innerHTML = addReplaceLangCode( document.location.href, 'sv');
}
