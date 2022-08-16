<template> 
    <section>
      <h1>Registro hijo</h1>
      <form-son :people="people"></form-son>
      <table-son  :sons="son_update"></table-son>
   
    </section>
</template>

<script>

import FormSon from './Form'
import TableSon from './Table'
// 
  export default {
    // name:"index",
    props: ['people','sons'],
     data(){
      return{
        son_update: this.sons
      }
    },

    components:{
        FormSon,
        TableSon
    }
  }
</script>