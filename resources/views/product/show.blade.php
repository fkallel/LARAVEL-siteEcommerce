@extends('layouts.app')

@section('content')

<h1 class="text-center mt-2">{{ $product->title }} | Detail</h1>
<hr>
<br>


<div class="container">
    <div class="row">
        <div class="col-md-9" style="display:flex">

            <div class="container m-2 p-2">
                <img src="/images/{{ $product->picture }}" height="450px" alt="...">
                <div class="container m-2 p-2">
                  <h2>{{ $product->title }}</h2>
                  <h3>Price: ${{ $product->price }}</h3>
                  <h4>réference: {{ $product->id }}</h4>
                  <hr>
                  <p>{{ $product->description }}</p>
                  <a href="{{route('products.index')}}" class="btn btn-success">Go Home</a>

                  <a href="{{route('products.panier')}}" class="btn btn-warning">Ajouter au panier</a>




                  
                 </form>
                </div>
              </div>

        </div>





    </div>
</div>




@endsection




























