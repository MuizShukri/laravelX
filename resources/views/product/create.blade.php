@extends('layouts.app')

@section('header')
    <h4>Create new product</h4>
@endsection

@section('content')

    <form action="{{ route('product.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <label for="desc" class="form-label">Description</label>
            <input type="text" class="form-control @error('desc') is-invalid @enderror" id="desc" name="desc">
            @error('desc')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <label for="price" class="form-label">price</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price">
            @error('price')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <label for="stock" class="form-label">stock</label>
            <input type="text" class="form-control @error('stock') is-invalid @enderror" id="stock" name="stock">
            @error('stock')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>

@endsection