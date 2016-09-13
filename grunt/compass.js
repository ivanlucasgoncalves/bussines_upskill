// Compile SASS into CSS via Compass
module.exports = {
  dist: {
    options: {
      sassDir: 'src/css/',
      cssDir: 'build/inc/css',
      outputStyle: 'compressed'
    }
  }
};
