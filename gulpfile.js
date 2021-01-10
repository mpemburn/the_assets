var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.sass('sass/app.scss', './public/css/app.css')
});
