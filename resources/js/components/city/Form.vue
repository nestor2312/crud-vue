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
   props: ['updatable_city'],
    data(){
      return {
        city: {
          name: null,
        }
      }
    },
    mounted() {
      this.updatable_city ? this.city = this.updatable_city:''
    },
    methods:{
      async storeCity(){
        let url='/city/store';
        if(this.updatable_city){
          url = `/city/update/${this.city.id}`;
          console.log(url);
        }
        await axios.post(url, this.city).then(res => {
            if(res.data.saved){
            this.city={            
               name: null,
            }
             alert('guardado')
             this.$parent.city_update.push(res.data.city)
          }
          else if(res.data.updated){
            alert('actualizado')
            window.location.href="/city";
          }
        })
      }
    }
  }
</script>