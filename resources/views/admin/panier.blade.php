@extends('layouts.app')

@section('content')
{{--<img src="https://jamvie.net/images/UTCTFscreenshot2.png" width="1700"
height="350"alt="">--}}
<br>






<h1 class="text-center">les commandes reçues:</h1>

<br>



<div class="container">
    <div class="row">
        <div class="col-md-12" style="display:flex">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">nom-client</th>
                        <th scope="col">prenom-client</th>
                        <th scope="col">email-client </th>
                        <th scope="col">tel-client</th>

                        <th scope="col">article-choisi</th>
                    </tr>
                    </thead>

                    <tbody>
                        @foreach ($panier as $client)


                            <tr>
                                
                                <td>{{ $client ->nomclient }}</td>
                                <td>{{ $client ->prenomclient }}</td>
                                <td>{{ $client ->telclient }}</td>
                                <td>{{ $client ->emailclient }}</td>
                                <td>{{ $client ->id_product }}</td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>


        </div>


    </div>
</div>















@endsection
