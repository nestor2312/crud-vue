import './bootstrap';

import Vue from 'vue'

// import HelloWorld from '@/components/Hola'
import IndexPerson from './components/person/Index'
import IndexCity from './components/city/Index'
import IndexSon from './components/son/Index'
import FormCity from './components/city/Form'
import FormPerson from './components/person/Form'
import FormSon from './components/son/Form'
import IndexPost from './components/post/Index'
import FormPost from './components/post/Form'
import IndexCategory from './components/category/Index'
import FormCategory from './components/category/Form'
import IndexProduct from './components/product/Index'
import FormProduct from './components/product/Form'
import IndexUser from './components/user/Index'

// 

new Vue ({
    el: '#app',
    components: {
        IndexPerson,
        IndexCity,
        IndexSon,
        FormCity,
        FormPerson,
        FormSon,
        IndexPost,
        FormPost,
        IndexCategory,
        FormCategory,
        IndexProduct,
        FormProduct,
        IndexUser
        // HelloWorld
    }
})
