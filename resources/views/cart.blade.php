<x-app-layout >
    <section >
        <main class="my-8 mt-5">
            <div class="container px-5 mx-auto">
                <div class="flex justify-center my-5">
                    <div class="flex flex-col w-full p-5 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5 rounded border border-dark">
                      @if ($message = Session::get('success'))
                          <div class="p-4 mb-3 alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                              <p class="text-center">{{ $message }}</p>
                          </div>
                      @endif
                        <div class="table-responsive">
                            <h2>Cart List</h2>
                            <table class="table">
                                <thead>
                                    <tr>
                                      <th></th>
                                      <th>Name</th>
                                      <th>
                                        <span title="Quantity">Qtd</span>
                                        <span >Quantity</span>
                                      </th>
                                      <th class=""> price</th>
                                      <th class=""> Remove </th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($cartItems as $item)
                                  <tr>
                                    <td class="hidden pb-4 md:table-cell">
                                      <a href="#">
                                        <img src="{{ $item->attributes->image }}" width="180" height="180" alt="Thumbnail">
                                      </a>
                                    </td>
                                    <td>
                                        <p class="mb-2 md:ml-4">{{ $item->name }}</p>
                                    </td>
                                    <td class="justify-center mt-6 md:justify-end md:flex">
                                      <div class="h-10 w-28">
                                        <div class="relative flex flex-row w-full h-8">
                                          
                                          <form action="{{ route('cart.update') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $item->id}}" >
                                          <input type="number" name="quantity" value="{{ $item->quantity }}" 
                                          class="w-6 text-center bg-gray-300" />
                                          <button type="submit" class="btn btn-primary">update</button>
                                          </form>
                                        </div>
                                      </div>
                                    </td>
                                    <td class="">
                                      <span class="">
                                          ${{ $item->price }}
                                      </span>
                                    </td>
                                    <td class="hidden ">
                                      <form action="{{ route('cart.remove') }}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{ $item->id }}" name="id">
                                        <button class="btn btn-outline-danger">x</button>
                                    </form>
                                    </td>
                                  </tr>
                                  @endforeach
                                </tbody>  
                            </table>
                            <div>
                                <h6>Total: $ {{ Cart::getTotal() }}</h6>
                            </div>
                            <div>
                              <form action="{{ route('cart.clear') }}" method="POST">
                                @csrf
                                <button class="btn btn-outline-danger">Remove All Cart</button>
                                <a href="user" class="btn btn-outline-success ml-2">Add more products</a>
                              </form>
                            
                            </div>

                          </div>
                      </div>
                    </div>
                  </div>
            </div>

            
    </section>
</x-app-layout >