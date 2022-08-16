<x-app-layout >
    <section class="container mt-5">
        <h1>vista usuario</h1>
        <index-user :categories="{{$categories}}" ></index-user>

        {{-- <div class="card-body">
            <div class="row">
                @foreach ($products as $product)
                <div class="col-md-3">  
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="align-items-center">
                                <img src="{{ url($product->image) }}" alt="" width="180" height="180" >
                                <div class="card-body">
                                    <h4 class="card-title text-center">{{ $product->name }}</h4>
                                    <h3 class="text-center">${{ $product->price}}</h3>
                                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" value="{{ $product->id }}" name="id">
                                        <input type="hidden" value="{{ $product->name }}" name="name">
                                        <input type="hidden" value="{{ $product->price }}" name="price">
                                        <input type="hidden" value="{{ $product->image }}"  name="image">
                                        <input type="hidden" value="1" name="quantity">
                                        <button class="btn btn-outline-success btn-block font-weight-bold">Add To Cart</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
                @endforeach
            </div>
        </div>  --}}
    </section>
</x-app-layout >