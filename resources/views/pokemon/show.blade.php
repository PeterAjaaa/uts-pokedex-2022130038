@extends('layouts.app')

@section('content')
    <div class="container">
        <main>
            <h1>{{ $pokemon->name }}</h1>
            <p>
                {{ $pokemon->species }}
            </p>

            <table class="table table-primary">
                <tbody>
                    <tr>
                        <td><b>Retail Price</b></td>
                        <td>{{ $pokemon->retail_price }}</td>
                    </tr>
                    <tr>
                        <td><b>Wholesale Price</b></td>
                        <td>{{ $pokemon->wholesale_price }}</td>
                    </tr>
                    <tr>
                        <td><b>Min Wholesale Qty.</b></td>
                        <td>{{ $pokemon->min_wholesale_qty }}</td>
                    </tr>
                    <tr>
                        <td><b>Quantity</b></td>
                        <td>{{ $pokemon->quantity }}</td>
                    </tr>
                </tbody>
            </table>
        </main>
    </div>
@endsection
