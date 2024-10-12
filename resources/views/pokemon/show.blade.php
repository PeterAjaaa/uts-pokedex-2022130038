@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>{{ $pokemon->name }}</h1>
                <p>
                    {{ $pokemon->species }}
                </p>
                @if ($pokemon->photo)
                    <img src="{{ Storage::url($pokemon->photo) ?? 'https://placehold.co/200' }}" class="img-thumbnail w-25">
                @else
                    <img src="https://placehold.co/200" class="img-thumbnail w-25">
                @endif
            </div>
            <table class="table table-dark table-striped mt-3">
                <tbody>
                    <tr>
                        <td><b>Primary Type</b></td>
                        <td>{{ $pokemon->primary_type }}</td>
                    </tr>
                    <tr>
                        <td><b>Weight</b></td>
                        <td>{{ $pokemon->weight }}</td>
                    </tr>
                    <tr>
                        <td><b>Height</b></td>
                        <td>{{ $pokemon->height }}</td>
                    </tr>
                    <tr>
                        <td><b>HP</b></td>
                        <td>{{ $pokemon->hp }}</td>
                    </tr>
                    <tr>
                        <td><b>Attack</b></td>
                        <td>{{ $pokemon->attack }}</td>
                    </tr>
                    <tr>
                        <td><b>Defense</b></td>
                        <td>{{ $pokemon->defense }}</td>
                    </tr>
                    <tr>
                        <td><b>Legendary Status</b></td>
                        @if ($pokemon->is_legendary)
                            <td>Yes</td>
                        @else
                            <td>No</td>
                        @endif
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
