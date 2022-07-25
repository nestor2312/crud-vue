<template> 
    <section>
      <h1>Registro Ciudad</h1>
     <form-city></form-city>
      <table-city :cities="city_update"></table-city>
     <!-- <h1>dfsdf</h1> -->
    </section>
</template>

<script>

import FormCity from './Form'
import TableCity from './Table'

  export default {
     props: ['cities'],
    // name:"indexCity",
    components:{
        FormCity,
        TableCity
    },
    data(){
      return{
        city_update: this.cities
      }
    }
  }
</script>