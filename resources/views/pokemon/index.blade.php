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
                            <th scope="col" class="text-center">ID</th>
                            <th scope="col" class="text-center">Name</th>
                            <th scope="col" class="text-center">Species</th>
                            <th scope="col" class="text-center">Primary Type</th>
                            <th scope="col" class="text-center">Weight</th>
                            <th scope="col" class="text-center">Height</th>
                            <th scope="col" class="text-center">HP</th>
                            <th scope="col" class="text-center">Attack</th>
                            <th scope="col" class="text-center">Defense</th>
                            <th scope="col" class="text-center">Legendary Status</th>
                            <th scope="col" class="text-center">Image</th>
                            <th scope="col" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pokemons as $pokemon)
                            <tr>
                                <td class="text-center">{{ $pokemon->id }}</td>
                                <td class="text-center">
                                    <a href="{{ route('pokemon.show', $pokemon) }}">
                                        {{ $pokemon->name }}
                                    </a>
                                </td>
                                <td class="text-center">{{ $pokemon->species }}</td>
                                <td class="text-center">{{ $pokemon->primary_type }}</td>
                                <td class="text-center">{{ $pokemon->weight }}</td>
                                <td class="text-center">{{ $pokemon->height }}</td>
                                <td class="text-center">{{ $pokemon->hp }}</td>
                                <td class="text-center">{{ $pokemon->attack }}</td>
                                <td class="text-center">{{ $pokemon->defense }}</td>
                                @if ($pokemon->is_legendary)
                                    <td class="text-center">Yes</td>
                                @else
                                    <td class="text-center">No</td>
                                @endif
                                <td class="text-center">
                                    <img src="{{ Storage::url($pokemon->photo) }}" class="img-thumbnail w-50">
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a class="btn btn-warning" href="{{ route('pokemon.edit', $pokemon) }}">
                                            Edit
                                        </a>
                                        <form action="{{ route('pokemon.destroy', $pokemon) }}" method="POST">
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
