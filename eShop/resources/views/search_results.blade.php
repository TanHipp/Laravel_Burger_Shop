@extends('layouts.app') {{-- Change 'layouts.app' to your desired layout --}}

@section('content')
    <h3>Search Results</h3>

    @if (isset($message))
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @endif

    @if (count($products) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    {{-- Add other columns as needed --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ number_format($product->price, 0, ',', '.') }} VNĐ</td>
                        {{-- Add other columns as needed --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
