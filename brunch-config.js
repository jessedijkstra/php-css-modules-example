const glob = require("glob");
const fs = require("fs-extra");
const path = require("path");

// See http://brunch.io/#documentation for docs.
exports.config = {
  sourceMaps: "absoluteUrl",
  files: {
    stylesheets: {
      joinTo: {
        "css/app.css": ["app/components/**/*.css", "assets/css/app.css"]
      }
    }
  },

  // Phoenix paths configuration
  paths: {
    // Dependencies and current project directories to watch
    watched: ["app/components", "assets/css/app.css"],
    // Where to compile files to
    public: "./app/static"
  },

  conventions: {
    // This option sets where we should place non-css and non-js assets in.
    // By default, we set this to "/assets/static". Files in this directory
    // will be copied to `paths.public`, which is "priv/static" by default.
    assets: /^(assets\/static)/
  },

  // Configure your plugins
  plugins: {
    postcss: {
      modules: {
        getJSON: function(cssFileName, json) {
          console.log(cssFileName);
          fs.outputJsonSync(cssFileName + ".json", json);

          return json;
        }
      },
      processors: [
        require("postcss-mixins"),
        require("postcss-nested"),
        require("postcss-import"),
        require("postcss-color-function"),
        require("autoprefixer")
      ]
    }
  }
};
