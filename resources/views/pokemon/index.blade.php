@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Pokedex: Reimagined</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 ">
                <table class="table table-dark table-striped mt-3">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Species</th>
                            <th scope="col">Primary Type</th>
                            <th scope="col">Weight</th>
                            <th scope="col">Height</th>
                            <th scope="col">HP</th>
                            <th scope="col">Attack</th>
                            <th scope="col">Defense</th>
                            <th scope="col">Legendary Status</th>
                            <th scope="col">Image</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pokemons as $pokemon)
                            <tr>
                                <td>{{ $pokemon->id }}</td>
                                <td>
                                    <img src="{{ Storage::url($product->photo) }}" class="img-thumbnail w-50">
                                </td>
                                <td>
                                    <a href="{{ route('pokemon.show', $product) }}">
                                        {{ $pokemon->name }}
                                    </a>
                                </td>
                                <td>{{ $pokemon->species }}</td>
                                <td>{{ $pokemon->primary_type }}</td>
                                <td>{{ $pokemon->weight }}</td>
                                <td>{{ $pokemon->height }}</td>
                                <td>{{ $pokemon->hp }}</td>
                                <td>{{ $pokemon->attack }}</td>
                                <td>{{ $pokemon->defense }}</td>
                                <td>{{ $pokemon->is_legendary }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a class="btn btn-warning" href="{{ route('pokemon.edit', $product) }}">
                                            Edit
                                        </a>
                                        <form action="{{ route('pokemon.destroy', $product) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
