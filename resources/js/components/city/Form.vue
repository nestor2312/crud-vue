<template>
    <section>
        <form  @submit.prevent="storeCity">
            <div class="mb-2">
              <label for="" class="form-label">Name</label>
              <input type="text"  v-model="city.name" class="form-control" placeholder="Name" required>
            </div>   
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
    </section>
</template>

<script>
import axios from 'axios'

  export default {
    // name: "Form-city"
   
    data(){
      return {
        city: {
          name: null,
        }
      }
    },
    methods:{
      async storeCity(){
        await axios.post('/city/store', this.city).then(res => {
            if(res.data.saved){
            this.city={            
               name: null,
            }
             alert('guardado')
             this.$parent.city_update.push(res.data.cities)
          }
        })
      }
    }
  }
</script>