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
                                </tr>
                        </tbody>
                    </table> 
                </div>
            </div> 
    </section>
 
</template>

<script>
  export default {
    props: ['sons']
  }
</script> 