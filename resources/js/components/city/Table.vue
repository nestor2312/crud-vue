<template>
    <section> 
        <div class="card mt-2">
                <div class="table-responsive card">  
                    <table class="table">
                        <thead  class=" text-white font-weight-bold thead-dark">
                            <tr>
                                <th>City</th>  
                                <th>actions</th>
                            </tr>
                        </thead>
                        <tbody>             
                            <tr v-for="(city, index) in cities" :key="index">
                               <th>{{city.name}}</th> 
                               <th>
                                   <a :href="`city/edit/${city.id}`" class="btn btn-warning">Edit</a>
                                   <button class="btn btn-outline-danger" @click="deleteCity(city, index)">Delete</button>
                               </th>    
                                    
                            </tr>
                        </tbody>
                    </table> 
                </div>
            </div> 
     </section>
 
</template>

<script>

  export default {
     props: ['cities'],
     methods: {
        async deleteCity(city, index){
            await axios.delete(`city/delete/${city.id}`).then (res => {
                if(res.data.deleted){
                     alert('ciudad borrada')
                     this.$parent.city_update.splice(index,1)
                }
            })
        }
     }
  }
</script> 