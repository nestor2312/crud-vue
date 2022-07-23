<x-app-layout />
    <div class="container mt-5">
        <h1>Registrar cuidad</h1>
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <form action="{{route('city.store')}}" method="POST">
            @csrf
            <div class="mb-2">
              <label for="" class="form-label">City</label>
              <input type="text" name="City" class="form-control" placeholder="City" required>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
            <div class="card mt-2">
                <div class="table-responsive card">  
                    <table class="table">
                        <thead  class=" text-white font-weight-bold thead-dark">
                            <tr>
                                <th>City</th>
                                <th>actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cities as $city)
                                <tr>
                                    <th>{{$city->City}}</th>
                                    <th>
                                        <a href="{{route('city.edit', $city)}}" class="btn btn-warning">edit</a>
                                        <a href="{{route('city.delete', $city)}}" class="btn btn-danger">delete</a>
                                    </th>
                                </tr>
                            @endforeach         
                        </tbody>
                    </table> 
                </div>
            </div>
