@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Pokedex: Reimagined (Card View)</h1>
            </div>
        </div>


        <div class="row mt-3">
            @foreach ($pokemons as $pokemon)
                <div class="col-4">
                    <div class="card mt-3" style="width: 25rem;">
                        @if ($pokemon->photo)
                            <a href="{{ route('pokemon.show', $pokemon) }}">
                                <img src="{{ Storage::url($pokemon->photo) ?? 'https://placehold.co/200' }}"
                                    class="img-thumbnail w-100">
                            </a>
                        @else
                            <a href="{{ route('pokemon.show', $pokemon) }}">
                                <img src="https://placehold.co/200" class="img-thumbnail w-100">
                            </a>
                        @endif
                        <div class="card-body">
                            <p class="card-text"> {{ '#' . Str::padleft($pokemon->id, 4, 0) }} </p>
                            <a href={{ route('pokemon.show', $pokemon) }} class="text-reset text-decoration-none">
                                <b class="card-title">{{ $pokemon->name }}</b>
                            </a>
                            <p class="card-text mt-3">
                                <span class="badge rounded-pill bg-success">{{ $pokemon->primary_type }}</span>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-3 col-12">
            {{ $pokemons->links() }}
        </div>
    </div>
@endsection
