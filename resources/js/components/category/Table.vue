<template>
    <section>
        <div class="table-responsive">
        <table class="table table-striped mt-2">
    <thead>
      <tr>
        <th>Name</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="(category,index) in categories" :key="index">
        <td> {{ category.name}}</td>
         <td>
             <a :href="`category/edit/${category.id}`" class="btn btn-warning">Edit</a>
            <button class="btn btn-outline-danger"  @click="deleteCategory(category, index)" >Delete</button>
         </td>
      </tr> 
    </tbody>
  </table>
  </div>
    </section>
</template>

<script>
    export default {
         props: ['categories'],
              methods: {
        async deleteCategory(category, index){
            await axios.delete(`category/delete/${category.id}`).then (res => {
                if(res.data.deleted){
                     alert('categoria borrada')
                     this.$parent.update_category.splice(index,1)
                }
            })
        }
     }
    }
</script>
