<template>
    <section>
        <form @submit.prevent="storePerson">
            <div class="mb-2">
              <label for="" class="form-label">Name</label>
              <input type="text" v-model="person.name" class="form-control" placeholder="Name" required>
            </div>
            <div class="mb-2">
                <label for="" class="form-label">Age</label>
                <input type="number"  v-model="person.age" class="form-control" placeholder="Age" required>
            </div>
            <div class="mb-2">
                <label for="" class="form-label">Address</label>
                <input type="text" v-model="person.address" class="form-control" placeholder="Address" required>
            </div>
            <div class="form-group">
                <label for="sel1">City</label>
                <select class="form-control" v-model="person.city_id" required>
                  <option v-for="(city, index) in cities"  :value="city.id" :key="index">{{city.name}} </option>
                </select>
              </div>
            <div class="mb-2">
                <label for="" class="form-label">Phone</label>
                <input type="number"  v-model="person.phone"  class="form-control" placeholder="Phone" required>
            </div>
            <div class="mb-2">
                <label for="" class="form-label">Date of birth</label>
                <input type="date"  v-model="person.date_of_birth"  class="form-control" >
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
    </section>
</template>

<script>
import axios from 'axios'

  export default {
    // name: "Form"
     props: ['cities','updatable_person'],
    data(){
      return {
        person: {
          name: null,
          age: null,
          address: null,
          phone: null,
          date_of_birth: null,
          city_id: 0
        }
      }
    },
    mounted(){
      this.updatable_person ? this.person = this.updatable_person:''
    },
    methods:{
      async storePerson(){
        let url ='/person/store';
        if(this.updatable_person){
          url =`/person/update/${this.person.id}`;
          console.log(url);
        }
        await axios.post( url, this.person).then(res => {
             if(res.data.saved){
            this.person={
               name: null,
               age: null,
               address: null,
               phone: null,
               date_of_birth: null,
               city_id: 0
            }
              alert('guardado');
             this.$parent.people_update.push(res.data.person); 
          }
          else if(res.data.updated){
            alert('actualizado')
            window.location.href="/";
          }
        })
      }
    }
  }
</script>