<template>
<section>
     <table class="table table-dark table-striped mt-2"  id="post" >
    <thead>
      <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Imaage</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="(post, index) in posts" :key="index">
        <td>{{post.title}}</td>
        <td>{{post.description}}</td>
        <td><img :src="post.image" style="width: 150px;"></td>
        <td>
            <a :href="`post/edit/${post.id}`" class="btn btn-warning" >edit</a>
            <button type="submit" class="btn btn-outline-danger" @click="deletePost(post, index)">delete</button>
        </td>
      </tr>
    </tbody>
  </table>
</section>
</template>
<script>
 export default {
     props: ['posts'],
      methods: {
         async deletePost(post, index){
             await axios.delete(`post/delete/${post.id}`).then (res => {
                  if(res.data.deleted){
                    alert('post borrado')
                    this.$parent.post_update.splice(index,1)
                  }
             })
         }
    }
    
 }
</script>