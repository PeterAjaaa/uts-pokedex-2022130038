@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Pokedex: Reimagined (List View)</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 ">
                <div class="col-12 d-flex justify-content-end mb-3">
                    <a class="btn btn-primary mb-3 mt-3" href="{{ route('pokemon.create') }}">Add Pokemon!</a>
                </div>
                <table class="table table-dark table-striped mt-3">
                    {{ $pokemons->links() }}
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">ID</th>
                            <th scope="col" class="text-center">Name</th>
                            <th scope="col" class="text-center">Species</th>
                            <th scope="col" class="text-center">Primary Type</th>
                            <th scope="col" class="text-center">Power</th>
                            <th scope="col" class="text-center">Image</th>
                            <th scope="col" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pokemons as $pokemon)
                            <tr>
                                <td class="text-center">{{ '#' . Str::padleft($pokemon->id, 4, 0) }}</td>
                                <td class="text-center">
                                    <a href="{{ route('pokemon.show', $pokemon) }}">
                                        {{ $pokemon->name }}
                                    </a>
                                </td>
                                <td class="text-center">{{ $pokemon->species }}</td>
                                <td class="text-center">{{ $pokemon->primary_type }}</td>
                                <td class="text-center">{{ $pokemon->hp + $pokemon->attack + $pokemon->defense }}</td>
                                <td class="text-center">
                                    @if ($pokemon->photo)
                                        <img src="{{ Storage::url($pokemon->photo) ?? 'https://placehold.co/200' }}"
                                            class="img-thumbnail w-50">
                                    @else
                                        <img src="https://placehold.co/200" class="img-thumbnail w-50">
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a class="btn btn-warning mt-3 rounded-0 me-3"
                                            href="{{ route('pokemon.edit', $pokemon) }}">
                                            Edit
                                        </a>
                                        <form action="{{ route('pokemon.destroy', $pokemon) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger mt-3 rounded-0" type="submit">Delete</button>
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
