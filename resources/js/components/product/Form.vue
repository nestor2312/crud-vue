<template>
     <form @submit.prevent="storeProduct">
             <div class="form-group">
                <label >Category</label>
                <select class="form-control" v-model="product.category_id" required>
                  <option v-for="(category, index) in categories"  :value="category.id" :key="index">{{category.name}} </option>
                </select>
              </div>
            <div class="form-group">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" v-model="product.name"/>
            </div>
            <div class="form-group">
                <label class="form-label">Descripcion</label>
                <input type="text" class="form-control" v-model="product.description"/>
            </div>
            <div class="form-group">
                <label class="form-label">Quantity</label>
                <input type="number" class="form-control" v-model="product.quantity"/>
            </div>
            <div class="form-group">
                <label class="form-label">Price</label>
                <input type="number" class="form-control" v-model="product.price"/>
            </div>
            <div class="form-group">
                <label class="form-group">Imagen</label>
                <input type="file" class="form-control-file" @change="VistaPrevia">
            </div>
            <div class="form-group" v-if="show">
                <img width="250" :src="product.image">
            </div>
            <div>
                <button type="submit" class="btn btn-outline-primary btn-lg">Save</button>
            </div>
            
        </form>
</template>

<script>
import axios from 'axios'

    export default {
        props: ['categories','edit_product'],
            data(){
            return{
                product:{
                    category_id: 0,
                    name: '',
                    description: '',
                    quantity: '',
                    price: '',
                    image:''
                },
                image:'',
                show:false
                }
            },
             mounted(){
            this.edit_product ? this.product = this.edit_product:''
            if(this.edit_product){
                this.show = true
            }
        },
            methods:{
             VistaPrevia(event){
            this.image = event.target.files[0]
            this.product.image = URL.createObjectURL(this.image)
            this.show = true
        },
       async storeProduct(){
            let url = '/product/store/'
                 if(this.edit_product){
                url =`/product/update/${this.product.id}`
                }
            let product = new FormData()
            product.append('name',this.product.name)
            product.append('description',this.product.description)
            product.append('quantity',this.product.quantity)
            product.append('price',this.product.price)
            product.append('category_id',this.product.category_id)
            if(this.show){
                product.append('image',this.image, this.image.name)
                }    
               await axios.post(url, product).then(res=>{
                    if(res.data.saved){
                        alert('product guardado');
                         this.product = {
                         category_id: 0,
                         name: '',
                         description: '',
                         quantity: '',
                         price: '',
                         image:''
                    }
                    this.image='',
                    this.show=false
                    this.$parent.update_products.push(res.data.product)
                    } else if(res.data.updated){
                alert('product actualizado')
                window.location.href="/product"
               }
            })  
            }
        }
    }
    
</script>
