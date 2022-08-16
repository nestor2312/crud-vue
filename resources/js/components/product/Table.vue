<template>
    <section>
       <div class="table-responsive">
        <table class="table table-striped mt-2">
    <thead>
      <tr>
         <th>Category</th>
        <th>Name</th>
        <th>Description</th>
        <th>Amount</th>
        <th>Price</th>
        <th>Image</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="(product,index) in products" :key="index">
        <td> {{ product.category.name}}</td>
        <td> {{ product.name}}</td>
        <td> {{ product.description}}</td>
        <td> {{ product.amount}}</td>
        <td> {{ product.price}}</td>
        <td> <img :src="product.image" alt="" width="180" height="180" class="img-top img-responsive"></td>
         <td>
             <a :href="`product/edit/${product.id}`" class="btn btn-warning">Edit</a>
            <button class="btn btn-outline-danger"  @click="deleteProduct(product, index)" >Delete</button>
         </td>
      </tr> 
    </tbody>
  </table>
  
</div>
    </section>
</template>

<script>

    export default {
      props:['products'],
       methods: {
         async deleteProduct(product, index){
             await axios.delete(`product/delete/${product.id}`).then (res => {
                  if(res.data.deleted){
                    alert('product borrado')
                    this.$parent.update_products.splice(index,1)
                  }
             })
         }
    }
        
    }

</script>
