<template>
    <section>
        <form @submit.prevent="storeCategory">
          <div class="form-group">
            <label >name:</label>
            <input type="text" class="form-control"  v-model="category.name" placeholder="category name">
          </div>
          <button type="submit" class="btn btn-primary" >Save</button>
        </form>
    </section>
</template>

<script>
   import axios from 'axios'

  export default {
     props: ['categories','update_category'],
    data(){
      return {
        category: {      
          name: null
        }
      }
    },
    mounted(){
      this.update_category ? this.category = this.update_category:''
    },
    methods:{
      async storeCategory(){
        let url ='/category/store';
        if(this.update_category){
          url = `/category/update/${this.category.id}`;
        }
        await axios.post(url, this.category).then(res => {
          if(res.data.saved){
            this.category={
               name: null,
            }
             alert('categoria guardada')
            //  console.log(res.data.category)
             this.$parent.update_category.push(res.data.category)
          }
          else if(res.data.updated){
            alert('actualizado')
            window.location.href="/category";
          }
        })
      }
    }
  }
</script>
