<template>
<section>
     <post-form></post-form>
     <post-table :posts="post_update"></post-table>
</section>
</template>
<script>
import PostForm from './Form'
import PostTable from './Table'
 export default {
    props:['posts'],
    components:{
        PostForm,
        PostTable
    },
    data(){
      return{
        post_update: this.posts
      }
    }

 }
</script>