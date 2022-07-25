import './bootstrap';

import Vue from 'vue'

// import HelloWorld from '@/components/Hola'
import IndexPerson from '@/components/person/Index'
import IndexCity from '@/components/city/Index'
import IndexSon from '@/components/son/Index'
// import TablePerson from '@/components/person/Index'

new Vue ({
    el: '#app',
    components: {
        IndexPerson,
        IndexCity,
        IndexSon
        // TablePerson,
        // HelloWorld
    }
})
