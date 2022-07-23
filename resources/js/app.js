requere('./bootstrap');

import Vue from 'vue'

import HelloWorld from '@/components/Hola'
// import IndexPerson from '@/components/person/index'

new Vue ({
    el: '#app',
    components: {
        // IndexPerson
        HelloWorld
    }
})
