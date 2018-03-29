// todo: don't know why import works and this does not: const Vue = require('vue');
import Vue from 'vue';

import Grid from './vue_components/grid.vue';

require('./app.scss');

const greet = require('./greet');

new Vue({
    el: '#demo',
    data: {
        searchQuery: '',
        gridColumns: ['name', 'power'],
        gridData: [
            { name: 'Chuck Norris', power: Infinity },
            { name: 'Bruce Lee', power: 9000 },
            { name: 'Jackie Chan', power: 7000 },
            { name: 'Jet Li', power: 8000 }
        ]
    },
    components: { Grid }
});
