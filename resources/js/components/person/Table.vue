<template>
    <section>
        <div class="card mt-2">
                <div class="table-responsive card">  
                    <table class="table">
                        <thead  class=" text-white font-weight-bold thead-dark">
                            <tr>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Address</th>
                                <th>City</th>
                                <th>Phone</th>
                                <th>Date of birth</th>
                                <th>actions</th>
                            </tr>
                        </thead>
                        <tbody>                      
                                <tr v-for="(person, index) in people" :key="index">
                                    <th>{{person.name}}</th>
                                    <th>{{person.age}}</th>
                                    <th>{{person.address}}</th>
                                    <th>{{person.city.name}}</th> 
                                    <th>{{person.phone}}</th> 
                                    <th>{{person.date_of_birth}}</th>
                                    <td>
                                         <a :href="`person/edit/${person.id}`" class="btn btn-warning">Edit</a>
                                    <button class="btn btn-outline-danger " @click="deletePerson(person, index)">Delete</button>
                                    </td>
                                </tr>
                        </tbody>
                    </table> 
                </div>
            </div>
    </section>
 
</template>

<script>
  export default {
    //  name:"TablePerson",
    props: ['people'],
    methods: {
         async deletePerson(person, index){
             await axios.delete(`person/delete/${person.id}`).then (res => {
                  if(res.data.deleted){
                    alert('persona borrada')
                    this.$parent.people_update.splice(index,1)
                  }
             })
         }
    }
  }
</script>
