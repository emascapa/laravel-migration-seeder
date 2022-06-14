@extends('layout.app')

@section('content')
    <div class="container py-4">
        <h2 class="mb-4 text-center">Our best offers</h2>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3">

            @forelse ($trips as $trip)

            <div class="col">
                <div class="card bg-light h-100">
                    <img src="{{$trip->image}}" alt="{{$trip->title}}" style="height: 60%; width: auto; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="text-center">{{$trip->title}}</h5>
                    </div>
                </div>
            </div>


                
            @empty

            <div class="col-12">
                <h4>Sorry no trip found</h4>
            </div>
                
            @endforelse

        </div>
    </div>
@endsection