@extends('layout.app')

@section('content')
    <div class="container py-4">
        <h2 class="mb-4 text-center">Our best offers</h2>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3">

            @forelse ($trips as $trip)
                <div class="col">
                    <div class="card h-100 {{($trip->is_available == 0) ? 'bg-danger' : 'bg-light'}}">
                        <img src="{{ $trip->image }}" alt="{{ $trip->title }}"
                            style="height: 60%; width: auto; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="text-center mb-4">{{ $trip->title }}</h5>

                            <ul class="list-unstyled">

                                @if ($trip->place)
                                    <li>Posti visitati: {{ $trip->place }}</li>
                                @endif

                                <li>Partenza: {{ $trip->starting_date }}</li>

                                <li>Ritorno: {{ $trip->ending_date }}</li>

                                @if ($trip->max_participants)
                                    <li>Partecipanti massimi: {{ $trip->max_participants }}</li>
                                @endif

                                @if ($trip->is_available == 0)
                                    <li><strong>Non più disponibile!</strong></li>
                                @endif

                                @if ($trip->discount != 0)
                                <li><strong>Sconto: {{$trip->discount}}%</strong></li>
                            @endif
                                
                            </ul>

                            @if ($trip->discount != 0)
                                
                            <h6>Prezzo: <span class="text-decoration-line-through">{{ $trip->price }} €</span> -> {{($trip->price)*((100 - $trip->discount)/100)}} €</h6>

                            @else

                            <h6>Prezzo: {{ $trip->price }} €</h6>
                                
                            @endif
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
