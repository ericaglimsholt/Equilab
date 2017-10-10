'use strict';

let activeLanguage;
// check if language is set in local storage
if (!localStorage.getItem('lang')) {
  activeLanguage = 'en-US';
} else {
  activeLanguage = localStorage.getItem('lang');
}

export default activeLanguage;
