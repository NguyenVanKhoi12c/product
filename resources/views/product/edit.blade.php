@extends('layout')

@section('content')

    <form action="{{route('product.update',$product->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleInputEmail1">name</label>
            <input type="text" class="form-control" name="name" value="{{$product->name}}">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">price</label>
            <input type="text" class="form-control" name="price" value="{{$product->price}}">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">toppings</label>
            <input type="text" class="form-control" name="toppings" value="{{$product->toppings}}">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">store</label>
            <select class="form-control" name="store_id">
                @foreach($store as $store)
                    <option value="{{ $store->id }}">{{ $store->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>



@endsection
