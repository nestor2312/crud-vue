<x-app-layout >
    <section class="container mt-5">
        <index-son :sons="{{$sons}}" :people="{{$people}}"></index-son>
    </section>
</x-app-layout >

{{-- <x-app-layout />
    <div class="container mt-5">
        <h1>Registrar hijo</h1>
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <form action="{{route('son.store')}}" method="POST">
            @csrf
            <div class="form-group">
              <label for="sel1">person</label>
              <select name="person_id" class="form-control" id="sel1">
                  @foreach ($persons as $person)
                  <option value="{{$person->id}}">{{$person->Name}}</option>
                  @endforeach
              </select>
            </div>
            <div class="mb-2">
              <label for="" class="form-label">Name</label>
              <input type="text" name="Name" class="form-control" placeholder="Name" required>
            </div>
            <div class="mb-2">
                <label for="" class="form-label">Age</label>
                <input type="number" name="Age" class="form-control" placeholder="Age" required>
              </div>
              <div class="mb-2">
                <label for="" class="form-label">Email</label>
                <input type="email" name="Email" class="form-control" placeholder="Email" required>
              </div>
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
            <div class="card mt-2">
                <div class="table-responsive card">  
                    <table class="table">
                        <thead  class=" text-white font-weight-bold thead-dark">
                            <tr>
                                <th>person</th>
                                <th>son</th>
                                <th>age</th>
                                <th>email</th>
                                <th>actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sons as $son)
                                <tr>
                                  <th>{{$son->person->Name}}</th>
                                    <th>{{$son->Name}}</th>
                                    <th>{{$son->Age}}</th>
                                    <th>{{$son->Email}}</th>
                                    <th>
                                        <a href="{{route('son.edit', $son)}}" class="btn btn-warning">edit</a>
                                        <a href="{{route('son.delete', $son)}}" class="btn btn-danger">delete</a>
                                    </th>
                                </tr>
                            @endforeach         
                        </tbody>
                    </table> 
                </div>
            </div>
    </div>
</body>
</html> --}}