<x-app-layout />
<div class="container mt-5">
    <h1>registro persona: {{$persons->Name}}</h1>
        <form action="{{route('person.update',$persons)}}" method="POST">
            @csrf
            <div class="mb-2">
                <label for="" class="form-label">Name</label>
                <input type="text" name="Name" value="{{$persons->Name}}" class="form-control" placeholder="Name" required >
              </div>
              <div class="mb-2">
                  <label for="" class="form-label">Age</label>
                  <input type="number" name="Age"  value="{{$persons->Age}}" class="form-control" placeholder="Age" required>
              </div>
              <div class="mb-2">
                  <label for="" class="form-label">Address</label>
                  <input type="text" name="Address"  value="{{$persons->Address}}" class="form-control" placeholder="Address" required>
              </div>
              <div class="form-group">
                  <label for="sel1">City</label>
                  <select name="city_id" id="" class="form-control ">
                    @foreach($cities as $city)
                    @if($city->id == $persons->city_id)
                        <option value="{{$city->id}}" selected> {{ $city->City }}</option>
                    @else
                        <option value="{{$city->id}}"> {{ $city->City }}</option>
                    @endif
                @endforeach
                </select>
                </div>
              <div class="mb-2">
                  <label for="" class="form-label">Phone</label>
                  <input type="number" name="Phone"  value="{{$persons->Phone}}" class="form-control" placeholder="Phone" required>
              </div>
              <div class="mb-2">
                  <label for="" class="form-label">Date of birth</label>
                  <input type="date"  name="Date_of_birth"  value="{{$persons->Date_of_birth}}" class="form-control" >
              </div>
            <button type="submit" class="btn btn-info">Save</button>
          </form>
    </div>
