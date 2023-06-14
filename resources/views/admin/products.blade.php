@extends('layouts.app')

@section('content')
{{--<img src="https://jamvie.net/images/UTCTFscreenshot2.png" width="1700"
height="350"alt="">--}}
<h1 class="text-center">Admin All Table Products</h1>
<br>


<a href="{{route('admin.contacts')}}" class="btn btn-success">VOIR COMMENTS</a>
<a href="{{route('admin.panier')}}" class="btn btn-success">commandes</a>
<a href="liste" class="btn btn-success">liste users</a>


<div class="container">
    <div class="row">
        <div class="col-md-12" style="display:flex">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Price</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)


                            <tr>
                                <th scope="row">{{ $product->id }}</th>
                                <td>{{ $product->title }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->description }}</td>
                                <td> <a class="btn btn-primary" href="{{route('product.create')}}">create</a></td>
                                <td> <a class="btn btn-info" href="{{route('products.show',$product->id)}}">view</a></td>
                                <td> <a class="btn btn-success" href="{{route('products.edit',$product->id)}}">edit</a></td>
                                
                                <td>
                                    <form action="{{route('admin.products.delete',$product->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>


        </div>

    </div>
</div>






<br>



















@endsection
