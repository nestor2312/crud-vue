@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in!') }}
                </div>
            </div>
                <div class="card mt-5">
                    <div class="card-header card bg-secondary text-white"><h4>Categoria</h4></div>
                        <div class="card-body col-md-4">
                            <div class="card"  width="250px">
                                <img class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
                                <div class="card-body">
                                  <h4 class="card-title text-center">name</h4>
                                  <p class="card-text">description</p>
                                  <a href="#" class="btn btn-primary">view more</a>
                                </div>
                              </div>   
                        </div> 
                    </div>

                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
