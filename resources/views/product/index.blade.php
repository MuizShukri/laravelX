@extends('layouts.app')

@section('header')
    <h4>Product</h4>
@endsection

@section('content')
    <div class="d-flex justify-content-end">
        <a class="btn btn-success" href="{{ url(route('product.create')) }}">
            <i class="bi bi-plus-circle-fill"></i> Add new product
        </a>
    </div>
    <table class="table mt-3">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Price</th>
        <th scope="col">Stock</th>
        <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @php 
            $index = 1
        @endphp
        @forelse ($products as $product)
        <tr>
            <th scope="row">{{ $index++ }}</th>
            <td>{{ $product->name }}</td>
            <td>{{ $product->desc }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->stock }}</td>
            <td></td>
        </tr>
        @empty
        <tr>
            <th colspan="6" scope="row" class="text-center"> wow so empty...</th>
        </tr>
        @endforelse
    </tbody>
    </table>
@endsection