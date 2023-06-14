@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('GOOD JOB You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <a href="{{route('products.index')}}" class="btn btn-success">Go Home</a>

    <a href="{{route('admin.products')}}" class="btn btn-success">ARE U L ADMIN?</a>
    <style>

    </style>

</div>
<div class="container mt-5">
    <!-- Success message -->
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @endif
    <h1> contactez nous</h1>
    <form  action="dataInsert" method="post" >
        <!-- CROSS Site Request Forgery Protection -->
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" id="email">
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" class="form-control" name="phone" id="phone">
        </div>
        <div class="form-group">
            <label>Subject</label>
            <input type="text" class="form-control" name="subject" id="subject">
        </div>
        <div class="form-group">
            <label>Message</label>
            <textarea class="form-control" name="message" id="message" rows="4"></textarea>
        </div>
        <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
    </form>
</div>
<style>  .container {
    max-width: 500px;
    margin: 50px auto;
    text-align: left;
    font-family: sans-serif;

}
form {
    border: 1px solid #1A33FF;
    background: #FFF;
    padding: 40px 50px 45px;
}
.form-control:focus {
    border-color: #000;
    box-shadow: none;
}
label {
    font-weight: 600;
}
.error {
    color: red;
    font-weight: 400;
    display: block;
    padding: 6px 0;
    font-size: 14px;
}
.form-control.error {
    border-color: red;
    padding: .375rem .75rem;
}</style>
@endsection
