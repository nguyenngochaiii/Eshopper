@extends('adminlte::page')

@section('title', 'Admin | Create Product')

@section('content_header')
<h1>Create Product</h1>
@if (session('error'))
<div class="alert alert-warning">
    {{session('error')}}
</div>
@endif
@stop

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Add Product</h3>
    </div>
    <form action="{{ route('admin.products.store') }}" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="InputName">Name<span class="text-danger">*</span></label>
                <input type="text" name="name" class="form-control" id="InputName" placeholder="Name"
                    value="{{ old('name')}}">
                @error('name')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="InputCode">Code<span class="text-danger">*</span></label>
                <input type="text" name="code" class="form-control" id="InputCode" placeholder="Code"
                    value="{{ old('code')}}">
                @error('code')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="InputPrice">Price<span class="text-danger">*</span></label>
                <input type="text" name="price" class="form-control" id="InputPrice" placeholder="Price"
                    value="{{ old('price')}}">
                @error('price')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="InputQuantity">Quantity<span class="text-danger">*</span></label>
                <input type="text" name="quantity" class="form-control" id="InputQuantity" placeholder="Quantity"
                    value="{{ old('quantity')}}">
                @error('quantity')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@stop

@section('css')
<!-- <link rel="stylesheet" href="/css/admin_custom.css"> -->
@stop

@section('js')
<script>
console.log('Hi!');
</script>
@stop