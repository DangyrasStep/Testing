var Encore = require('@symfony/webpack-encore');

Encore
// projekto direktorija, kur bus saugomi visi sukompiliuoti resursai
    .setOutputPath('public/build/')

    // atvira direktorija, per kurią web serveris pasieks prieš tai aprašytą direktoriją
    .setPublicPath('/build')

    // bus sukuti public/build/app.js ir public/build/app.css
    .addEntry('js/app', './assets/js/app.js')
    .addEntry('js/one', './assets/js/one.js')
    .addEntry('js/two', './assets/js/two.js')
    .addStyleEntry('css/app', './assets/css/app.scss')


    .autoProvidejQuery()

    .enableSourceMaps(!Encore.isProduction())

    .enablePostCssLoader()

    .cleanupOutputBeforeBuild()

    .enableSassLoader()

    .enableReactPreset()

    .enableVersioning()
;

module.exports = Encore.getWebpackConfig();
