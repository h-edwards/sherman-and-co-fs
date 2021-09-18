let mix = require("laravel-mix");
mix.webpackConfig({
    resolve:{
        modules:[
            path.resolve("./node_modules")
        ]
    }
})

mix.setPublicPath(path.resolve(__dirname));
mix.sass("resources/sass/app.scss","assets/css/app.css").js("resources/js/app.js","assets/js/app.js");