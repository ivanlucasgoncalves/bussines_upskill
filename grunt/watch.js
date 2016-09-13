// Keep an eye on source files in case anything changes
module.exports = {
  sass: {
    files: ['src/css/**/*'],
    tasks: ['compass']
  },
  javascript: {
    files: ['src/js/**/*'],
    tasks: ['uglify']
  },
  livereload: {
    options: {
      livereload: 35729
    },
    files: ['build/**/*'],
  }
};
