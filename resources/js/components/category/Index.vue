<template>
    <section>
      <form-category></form-category>
     <table-category :categories="update_category"></table-category>
    </section>
</template>

<script>

import FormCategory from './Form'
import TableCategory from './Table'

    export default {
      props: ['categories'],
       components: {
        FormCategory,
        TableCategory
       },
       data(){
      return{
        update_category: this.categories
      }
    }
    }
</script>

