@extends('app.layout')
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
        @foreach ($autos as $key => $car)
            <?php $carBrand = $car['merk'];?>
            @if ($carBrand == $brand)
                <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>  <a href="{{ route('overview', $key) }}">{{ $car['merk']}} </a></td>
                    <td> {{ $car['kenteken']}}</td>
                    <td> {{ $car['voertuigsoort']}}</td>
                </tr>
            @endif
        @endforeach
        </tbody>
    </table>
@endsection
