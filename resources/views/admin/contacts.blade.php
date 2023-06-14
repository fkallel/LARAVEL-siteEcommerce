 @extends('layouts.app')

@section('content')

<h1 class="text-center">Admin All Product Comments</h1>
<br>


<div class="container">
    <div class="row">
        <div class="col-md-12" style="display:flex">
                <table class="table">

                    <thead>
                        <tr>
                            <th scope="col">nom</th>
                            <th scope="col">email</th>
                            <th scope="col">phone </th>
                            <th scope="col">subject</th>

                            <th scope="col">message</th>
                        </tr>
                        </thead>

                        <tbody>
                          <tr>
                            <td> leila</td>
                            <td> leila@yahoo.com</td>
                            <td> 2222222</td>
                            <td> iphone</td>
                            <td> le prix de votre article est exagére</td>
                                 {{-- @foreach ($customer_comments as $item)


                    <td> {{ $item->name }} </td>
                    <td>{{ $item->email }} </td>
                    <td> {{ $item->phone }} </td>
                    <td> {{ $item->subject }} </td>
                    <td> {{ $item->message }} </td>


                    @endforeach --}}





                          </tr>

                        </tbody>



                </table>
        </div>
    </div>
</div>


@endsection

