const elixir = require('laravel-elixir');

require('laravel-elixir-vue');

elixir(mix => {
    mix.sass('./resources/assets/admin/sass/admin.scss')//por padrão vai ser salvo o css compilado em public/css/admin.css
    .copy('./node_modules/materialize-css/fonts/roboto', './public/fonts/roboto'); 
});