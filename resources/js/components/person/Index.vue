<template> 
    <section>
      <h1>Registro personas</h1>
      <form-person :cities="cities"></form-person>
      <table-person :people="people_update"></table-person>
     <!-- <h1>dfsdf</h1> -->
    </section>
</template>

<script>

import FormPerson from './Form'
import TablePerson from './Table'

  export default {
    // name:"index",
    props: ['cities','people'],
    components:{
        FormPerson,
        TablePerson
    },
    data(){
      return{
        people_update: this.people
      }
    }
  }
</script>