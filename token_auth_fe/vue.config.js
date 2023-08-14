const { defineConfig } = require("@vue/cli-service");
module.exports = defineConfig({
  transpileDependencies: true,
});

module.exports = defineConfig({
  transpileDependencies: true,
  devServer: {
    proxy: {
      '^/api*': {
        target: "http://127.0.0.1:80",
        // secure: false,
        ws: true,
        changeOrigin: true,
        // pathRewrite: {
        //   '^api': '/api'
        // },
      },
      // headers: {
      //   Connection: 'keep-alive'
      // }
    }
  }
})
