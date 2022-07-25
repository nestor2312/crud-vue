<template>
    <section>
        <h1 class="mt-5">Helloooo</h1>
        <div>
          <label for="">numero 1</label>
          <input type="number" v-model ="numero_1">
        </div>
        <div>
          <label for="">numero 2</label>
          <input type="number"  v-model ="numero_2">
        </div>
        <div>
          <button type="submit" @click="sumar"> suma</button>
        </div>
         <p>{{numero_1}}</p>
           <p>{{numero_2}}</p>
             <h1>la sumatoria es <p>{{sumatoria}}</p></h1>
    </section>

</template>

<script>
  export default {
    data(){
      return{
        numero_1: 0,
        numero_2: 0,
        sumatoria: 0
      }
    },
    methods:{
      sumar(){
        this.sumatoria = Number(this.numero_1) + Number(this.numero_2)
      }
    }
  }
</script>