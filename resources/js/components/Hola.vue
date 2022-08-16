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
             <div class="container">
              <h1>api</h1>
                <div class="row">
                  <div class="col-md-4" v-for=" (character, index) in data.results" :key="index" @click="getlocation(character)">
                  <img :src="`${character.image}`">
                  <h3>{{character.name}}</h3>
                  </div>
                </div>
             </div>
    </section>
</template>

<script>
import axios from 'axios'



  export default {
    data(){
      return{
        numero_1: 0,
        numero_2: 0,
        sumatoria: 0,
        url: 'https://rickandmortyapi.com/api/character',
        data: {}
      }
    },
    created(){
     this.getdata()
    },
    methods:{
      sumar(){
        this.sumatoria = Number(this.numero_1) + Number(this.numero_2)
      },
       async getdata(){
       await axios.get(this.url).then(res =>{
        // console.log(res.data)
        this.data = res.data
       })
      },
      getlocation(character){
        alert(character.location.name)
      }
    }
  }
</script>