<x-app-layout >
    <section class="container mt-5">
        <h1>actualizar hijo</h1>
        <form-son :updatable_son="{{$son}}" :people="{{$people}}"></form-son>
    </section>
  </x-app-layout >
  
{{-- <x-app-layout />
<div class="container mt-5">
    <form action="{{route('son.update',$sons)}}" method="POST">
        @csrf
        <div class="mb-2">
            <label for="" class="form-label">Name</label>
            <select name="person_id" id="" class="form-control ">
                @foreach($persons as $person)
                @if($person->id == $sons->person_id)
                    <option value="{{$person->id}}" selected> {{ $person->Name }}</option>
                @else
                    <option value="{{$person->id}}"> {{ $person->Name }}</option>
                @endif
            @endforeach
            </select>
        </div>
        <div class="mb-2">
            <label for="" class="form-label">Name</label>
            <input type="text" name="Name" value="{{$sons->Name}}" class="form-control" placeholder="Name" required >
        </div>
        <div class="mb-2">
            <label for="" class="form-label">Age</label>
            <input type="text" name="Age"value="{{$sons->Age}}" class="form-control" placeholder="Name" required >
        </div>
        <div class="mb-2">
            <label for="" class="form-label">Email</label>
            <input type="text" name="Email" value="{{$sons->Email}}" class="form-control" placeholder="Name" required >
        </div>
        <button type="submit" class="btn btn-info">Save</button>
    </form>
</div>
 --}}
