<template>
    <section>
        <h1>index</h1>
        <form-product :categories="categories"></form-product>
        <table-product :products="update_products"></table-product>
    </section>
</template>

<script>


import FormProduct from './Form'
import TableProduct from './Table'
    export default {
        props:['categories','products'],
        components: {
            FormProduct,
            TableProduct
        },
        data() {
            return {
                update_products: this.products
            }
        },
        
    }
</script>
