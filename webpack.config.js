const patch = require('path');

module.exports = {
    resolve: {
        alias: {
            '@':patch.resolve(__dirname, 'resources/js'),
        },
    },
};