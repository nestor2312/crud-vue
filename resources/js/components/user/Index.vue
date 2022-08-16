<template>
    <section >
    <div class="card mt-3" v-for="(category, index) in categories" :key="index">
            <div class="card-header bg-secondary text-white">
                <h3 class="card-title">Category: {{ category.name }}</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3"  v-for="(product, index) in category.products" :key="index">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="align-items-center">
                                    <img :src="product.image" :alt="product.name" width="180" height="180" class="card-img-top img-responsive">
                                    <div class="card-body">
                                        <h4 class="card-title text-center">{{ product.name }}</h4>
                                        <h3 class="text-center">${{ product.price}}</h3> 
                                          <!-- <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data"> -->
                                           <form @submit.prevent="cart.store">
                                            @csrf
                                            <input type="hidden" :value="product.id" name="id"> 
                                            <input type="hidden" :value="product.name" name="name">
                                            <input type="hidden" :value="product.price" name="price">
                                            <input type="hidden" :value="product.image"  name="image">
                                            <input type="hidden" value="1" name="quantity">
                                             <button class="btn btn-outline-success btn-block">Add To Cart</button>
                                        </form>
                                     <button class="btn btn-outline-success btn-block font-weight-bold">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            
    </section>
</template>

<script>
 export default {
    props:['categories'],
    // data() {
    //     return {
    //         id:
    //     }
    // },
    // methods: {
    //     name() {
    //         axios.post(`{{route ('cart.store')}}`,)
            
    //     }
    // },
 }
</script>


