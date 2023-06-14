@extends('layouts.app')

@section('content')
<!--CARROUUUUUUUSEL ------>
<!-- 3D Slideshow Section -->
<style>


#slideshow {
	margin: 0 auto;
	padding-top: 50px;
	height: 400px;
	width: 100%;
	background-color: #E8C4C4;
	box-sizing: border-box;
}

.slideshow-title {
	font-family: 'Allerta Stencil';
	font-size: 62px;
	color: #fff;
	margin: 0 auto;
	text-align: center;
	margin-top: 25%;
	letter-spacing: 3px;
	font-weight: 300;
}

.sub-heading {
	padding-top: 50px;
	font-size: 18px;
} .sub-heading-two {
	font-size: 15px;
} .sub-heading-three {
	font-size: 13px;
} .sub-heading-four {
	font-size: 11px;
} .sub-heading-five {
	font-size: 9px;
} .sub-heading-six {
	font-size: 7px;
} .sub-heading-seven {
	font-size: 5px;
} .sub-heading-eight {
	font-size: 3px;
} .sub-heading-nine {
	font-size: 1px;
}

.entire-content {
	margin: auto;
	width: 190px;
	perspective: 1000px;
	position: relative;
	padding-top: 80px;
}

.content-carrousel {
	width: 100%;
	position: absolute;
	float: right;
	animation: rotar 15s infinite linear;
	transform-style: preserve-3d;
}

.content-carrousel:hover {
	animation-play-state: paused;
	cursor: pointer;
}

.content-carrousel figure {
	width: 100%;
	height: 120px;
	border: 1px solid #3b444b;
	overflow: hidden;
	position: absolute;
}

.content-carrousel figure:nth-child(1) {
	transform: rotateY(0deg) translateZ(300px);
} .content-carrousel figure:nth-child(2) {
	transform: rotateY(40deg) translateZ(300px);
} .content-carrousel figure:nth-child(3) {
	transform: rotateY(80deg) translateZ(300px);
} .content-carrousel figure:nth-child(4) {
	transform: rotateY(120deg) translateZ(300px);
} .content-carrousel figure:nth-child(5) {
	transform: rotateY(160deg) translateZ(300px);
} .content-carrousel figure:nth-child(6) {
	transform: rotateY(200deg) translateZ(300px);
} .content-carrousel figure:nth-child(7) {
	transform: rotateY(240deg) translateZ(300px);
} .content-carrousel figure:nth-child(8) {
	transform: rotateY(280deg) translateZ(300px);
} .content-carrousel figure:nth-child(9) {
	transform: rotateY(320deg) translateZ(300px);
} .content-carrousel figure:nth-child(10) {
	transform: rotateY(360deg) translateZ(300px);
}

.shadow {
    position: absolute;
    box-shadow: 0px 0px 20px 0px #000;
    border-radius: 1px;
}

.content-carrousel img {
	image-rendering: auto;
	transition: all 300ms;
	width: 100%;
	height: 100%;
}

.content-carrousel img:hover {
	transform: scale(1.2);
	transition: all 300ms;
}

@keyframes rotar {
	from {
		transform: rotateY(0deg);
	} to {
		transform: rotateY(360deg);
	}
}

</style>
<div class="card my-4">
    <h5 class="card-header">Recherche</h5>
    <form class="card-body" action="/search" method="GET" role="search">
        {{ csrf_field() }}
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Rechercher..." name="q">
            <span class="input-group-btn">
        <button class="btn btn-secondary" type="submit">Go!</button>
      </span>
        </div>
    </form>
</div>
<section id="slideshow">
    <div class="entire-content">
        <div class="content-carrousel">
            @foreach ($products as $product)
            <figure class="shadow">
                <img src="{{ $product->picture }}" alt="">

                </figure>
                @endforeach


</div>
</section>




















<h1 class="text-center mt-2">All Products</h1>
<hr>
<br>


<div class="">
    <div class="row">
        <div class="col-md-6" style="display:flex">
            @foreach ($products as $product)
            <div class="card m-2 p-2" style="width: 18rem;">
                <img src="{{ $product->picture }}" class="card-img-top" alt="...">
                <img src="/images/{{ $product->picture }}" alt="">

                <div class="card-body" >
                  <h5 class="card-title">{{ $product->title }}</h5>
                  <h5 class="card-title">Price: ${{ $product->price }}</h5>
                  <hr>
                  <p class="card-text">{{ $product->description}} </p>

                  <a href="{{route('products.show',$product->id)}}" class="btn btn-primary">View Detail</a>
                  <br>

                </div>
              </div>
            @endforeach
        </div>
    </div>
</div>


@endsection
