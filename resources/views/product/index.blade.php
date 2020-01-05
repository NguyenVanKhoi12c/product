@extends('layout')

@section('content')

    <div class="container">

        <a class="btn btn-primary" href="{{route('product.create')}}">Create</a>
        <form class="form-inline my-2 my-lg-0" action="{{route('product.search')}}" method="get">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name ='keyword'>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">name</th>
            <th scope="col">price</th>
            <th scope="col">toppings</th>
            <th scope="col">store</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($product as $product)
        <tr>
            <th scope="row">{{$product->id}}</th>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->toppings}}</td>


            <td>{{ !empty($product->store) ? $product->store->name: ''}}</td>
            <td>
                <form action="{{route('product.destroy',$product->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <a class="btn btn-success" href="{{route('product.edit',$product->id)}}">Edit</a>
                    <button class="btn btn-danger" type="submit" onclick="confirm('ban co chac muon xoa khong?')">Delete</button>
                </form>

            </td>
        </tr>
            @endforeach

        </tbody>
    </table>



@endsection
