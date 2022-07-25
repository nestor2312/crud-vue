<x-app-layout >
    <section class="container mt-5">
        <index-person :cities="{{$cities}}" :people="{{$people}}"></index-person>
    </section>
    {{-- :cities={{$cities}} --}}
</x-app-layout >

{{-- <section class="container" >
    <div class="container mt-5">
        <h1>Registrar persona</h1>
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <form action="{{route('person.store')}}" method="POST">
            @csrf
            <div class="mb-2">
              <label for="" class="form-label">Name</label>
              <input type="text" name="Name" class="form-control" placeholder="Name" required>
            </div>
            <div class="mb-2">
                <label for="" class="form-label">Age</label>
                <input type="number" name="Age" class="form-control" placeholder="Age" required>
            </div>
            <div class="mb-2">
                <label for="" class="form-label">Address</label>
                <input type="text" name="Address" class="form-control" placeholder="Address" required>
            </div>
            <div class="form-group">
                <label for="sel1">City</label>
                <select name="city_id" class="form-control" id="sel1">
                    @foreach ($cities as $city)
                    <option value="{{$city->id}}">{{$city->City}}</option>
                    @endforeach
                </select>
              </div>
            <div class="mb-2">
                <label for="" class="form-label">Phone</label>
                <input type="number" name="Phone" class="form-control" placeholder="Phone" required>
            </div>
            <div class="mb-2">
                <label for="" class="form-label">Date of birth</label>
                <input type="date"  name="Date_of_birth" class="form-control" >
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
            <div class="card mt-2">
                <div class="table-responsive card">  
                    <table class="table">
                        <thead  class=" text-white font-weight-bold thead-dark">
                            <tr>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Address</th>
                                <th>City</th>
                                <th>Phone</th>
                                <th>Date of birth</th>
                                <th>actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($persons as $person)
                                <tr>
                                    <th>{{$person->Name}}</th>
                                    <th>{{$person->Age}}</th>
                                    <th>{{$person->Address}}</th>
                                    <th>{{$person->city->City}}</th>
                                    <th>{{$person->Phone}}</th>
                                    <th>{{$person->Date_of_birth}}</th>
                                    <th>
                                        <a href="{{route('person.edit', $person)}}" class="btn btn-warning">edit</a>
                                        <a href="{{route('person.delete', $person)}}" class="btn btn-danger">delete</a>
                                    </th>
                                </tr>
                            @endforeach         
                        </tbody>
                    </table> 
                </div>
            </div>
    </div>
   
</section> --}}



   

