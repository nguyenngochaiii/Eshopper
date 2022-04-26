@extends('adminlte::page')

@section('title', 'User | Create Product')

@section('content_header')
<h1>Create Product</h1>
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
                <label for="InputName">Name</label>
                <input type="text" name="name" class="form-control" id="InputName" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="InputCode">Code</label>
                <input type="text" name="code" class="form-control" id="InputCode" placeholder="Code">
            </div>
            <div class="form-group">
                <label for="InputPrice">Price</label>
                <input type="text" name="price" class="form-control" id="InputPrice" placeholder="Price">
            </div>
            <div class="form-group">
                <label for="InputQuantity">Quantity</label>
                <input type="text" name="quantity" class="form-control" id="InputQuantity" placeholder="Quantity">
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