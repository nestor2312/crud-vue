 <template>
    <section> 
        <div class="card mt-2">
                <div class="table-responsive card">  
                    <table class="table">
                        <thead  class=" text-white font-weight-bold thead-dark">
                            <tr>
                                <th>Person</th>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Email</th>
                                <th>actions</th>
                            </tr>
                        </thead>
                        <tbody>                      
                                <tr v-for="(son, index) in sons " :key="index">
                                    <th>{{son.person.name}}</th>
                                    <th>{{son.name}}</th>
                                    <th>{{son.age}}</th>
                                    <th>{{son.email}}</th>
                                     <th>
                                         <a :href="`son/edit/${son.id}`" class="btn btn-warning">Edit</a>
                                   <button class="btn btn-outline-danger" @click="deleteSon(son, index)">Delete</button>
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
    props: ['sons'],

     methods: {
        async deleteSon(son, index){
            await axios.delete(`son/delete/${son.id}`).then (res => {
                if(res.data.deleted){
                     alert('hijo borrado')
                     this.$parent.son_update.splice(index,1)
                }
            })
        }
     }
  }
</script> 