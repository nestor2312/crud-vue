<x-app-layout >
  <section class="container mt-5">
    <h1>actualizar ciudad</h1>
     <form-city :updatable_city="{{$city}}"></form-city>
  </section>
</x-app-layout >

    {{-- <div class="container mt-5">

      <form action="{{route('city.update',$cities)}}" method="POST">
        @csrf
          
            <div class="mb-2">
                <label for="" class="form-label">Name</label>
                <input type="text" name="City" value="{{$cities->City}}" class="form-control" placeholder="Name" required >
            </div>
           
        <button type="submit" class="btn btn-info">Save</button>
      </form>
    </div> --}}
