// module.exports = {
//   entry: './src/index.js',
//   output: {
//     filename: 'public/bundle.js'
//   }
// };

const path = require('path');

module.exports = {
  entry: './src/index.js',
  output: {
    path: path.resolve(__dirname, 'dist'),
    filename: 'public/bundle.js'
  }
};
