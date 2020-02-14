@extends('layout')
@section('section')

    <?php $i =1; ?>

    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Merk</th>
                <th scope="col">Kenteken</th>
                <th scope="col">Voertuigsoort</th>
            </tr>
        </thead>
    <tbody>
        @foreach ($data  as $user)
            <tr>
                <th scope="row">{{$i++}}</th>
                <td> {{ $user['merk']}}</td>
                <td> {{ $user['kenteken']}}</td>
                <td> {{ $user['voertuigsoort']}}</td>
            </tr>
        @endforeach

    </tbody>
    </table>

@endsection
