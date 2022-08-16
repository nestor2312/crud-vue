<template>
    <section>
         <form @submit.prevent="savepost">
            <div class="form-group">
                <label class="form-label">Titulo</label>
                <input type="text" class="form-control" v-model="post.title"/>
            </div>
            <div class="form-group">
                <label class="form-label">Descripcion</label>
                <input type="text" class="form-control" v-model="post.description"/>
            </div>
            <div class="form-group">
                <label class="form-group">Imagen</label>
                <input type="file" class="form-control-file" @change="VistaPrevia">
            </div>
            <div>
                <button type="submit" class="btn btn-outline-primary btn-lg">Save</button>
            </div>
            <div class="form-group" v-if="show">
                <img :src="post.image">
            </div>
        </form>
    </section>

</template>
<script>
import axios from 'axios'

 export default {
    props:['edit_post'],
    data(){
        return{
            post:{
                title:'',
                description:'',
                image:''
            },
            image:'',
            show:false
        }
    },
    mounted(){
        this.edit_post ? this.post = this.edit_post:''
        if(this.edit_post){
            this.show = true
        }
    },
    methods:{
        VistaPrevia(event){
            this.image = event.target.files[0]
            this.post.image = URL.createObjectURL(this.image)
            this.show = true
        },
       async savepost(){
            let url = '/post/store/'
                 if(this.edit_post){
                url =`/post/update/${this.post.id}`
                }
            let post = new FormData()
            post.append('title',this.post.title)
            post.append('description',this.post.description)
            if(this.show){
                post.append('image',this.image, this.image.name)
            }
            await axios.post(url ,post).then(res=>{
               if(res.data.saved){
                    alert('post guardado');
                    this.post = {
                        title:'',
                        description:'',
                        image:''
                    }
                    this.image='',
                    this.show=false
                    this.$parent.post_update.push(res.data.post)
               }else if(res.data.updated){
                alert('post actualizado')
                window.location.href="/post"
               }
              
            })    
        }
    }
 }
</script>