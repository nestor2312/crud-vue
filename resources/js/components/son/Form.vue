<template>
    <section>
        <form @submit.prevent="storeSon">
         <div class="form-group">
                <label for="sel1">Person</label>
                <select class="form-control" v-model="son.person_id" required>
                  <option v-for="(person, index) in people"  :value="person.id" :key="index">{{person.name}} </option>
                </select>
              </div>
            <div class="mb-2">
              <label for="" class="form-label">Name</label>
              <input type="text" v-model="son.name" class="form-control" placeholder="Name" required>
            </div>
            <div class="mb-2">
                <label for="" class="form-label">Age</label>
                <input type="number"  v-model="son.age" class="form-control" placeholder="Age" required>
            </div>
            <div class="mb-2">
                <label for="" class="form-label">Email</label>
                <input type="Email"  v-model="son.email"  class="form-control" >
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
    </section>
</template>

<script>
import axios from 'axios'

  export default {
    // name: "Form-Son",
     props: ['people','updatable_son'],
    data(){
      return {
        son: {
          person_id: 0,
          name: null,
          age: null,
          email: null
        
        }
      }
    },
    mounted(){
      this.updatable_son ? this.son = this.updatable_son:''
    },
    methods:{
      async storeSon(){
        let url ='/son/store';
        if(this.updatable_son){
          url = `/son/update/${this.son.id}`;
        }
        await axios.post(url, this.son).then(res => {
          if(res.data.saved){
            this.son={
               person_id: 0,
               name: null,
               age: null,
               email: null
            }
             alert('guardado')
            //  console.log(res.data.son)
             this.$parent.son_update.push(res.data.son)
          }
          else if(res.data.updated){
            alert('actualizado')
            window.location.href="/son";
          }
        })
      }
    }
  }
</script>