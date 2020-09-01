var Encore = require('@symfony/webpack-encore');

const path = require('path');
const glob = require('glob');

Encore
    .setOutputPath('./src/Resources/public/')
    .setPublicPath('/')

    .cleanupOutputBeforeBuild()
    .enableSassLoader(function (options) {
        options.sassOptions.includePaths = glob.sync(
            path.join(__dirname, '**/node_modules/@material')
        ).map((dir) => path.dirname(dir));

        options.implementation = require('sass');
    })
    .enableSourceMaps(false)
    .enableVersioning(false)
    .disableSingleRuntimeChunk()
    .autoProvidejQuery()
    .addEntry('js/material-bundle', './assets/js/app.js')
    .addStyleEntry('css/material-bundle', './assets/scss/app.scss')
;

module.exports = Encore.getWebpackConfig();
