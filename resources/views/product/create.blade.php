@extends('layout')

@section('content')

    <a class="btn btn-success" href="{{route('product')}}">back</a>

    <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">name</label>
            <input type="text" class="form-control" name="name">

        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">price</label>
            <input type="text" class="form-control" name="price">
        </div>

        <div class="form-group">
        <label for="exampleInputEmail1">topping</label>
        <input type="text" class="form-control" name="toppings">
        </div>


        <div class="form-group">
            <label for="exampleInputEmail1">Store</label>
            <select class="form-control" name="category_id">
                @foreach($store as $store)
                    <option value="{{ $store->id }}">{{ $store->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


@endsection
