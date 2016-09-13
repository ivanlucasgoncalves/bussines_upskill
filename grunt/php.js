// Run a local server
module.exports = {
  server: {
    options: {
      port: 8787,
      hostname: '<%=ip%>',
      base: require('path').resolve('./build/'),
      livereload: 35729,
      open: true,
      directives: {
        'error_log': require('path').resolve('error.log')
      },
      env: {
        DEV_IP: '<%=ip%>'
      }
    }
  }
};
