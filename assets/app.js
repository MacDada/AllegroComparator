// todo: don't know why import works and this does not: const Vue = require('vue');
import Vue from 'vue';

import Table from './vue_components/table.vue';

require('./app.scss');

const greet = require('./greet');

new Vue({
    el: '#demo',
    data: {
        searchQuery: '',
        columns: ['name', 'power'],
        data: [
            { name: 'Chuck Norris', power: Infinity },
            { name: 'Bruce Lee', power: 9000 },
            { name: 'Jackie Chan', power: 7000 },
            { name: 'Jet Li', power: 8000 }
        ]
    },
    components: { AppTable: Table }
});
