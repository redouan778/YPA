@extends('app.layout')
@section('section')

    <?php $i =1; ?>
    <div class="explanation">
        <p>
            So as you can see, you receive <b>Ten Cars</b> from the <b>BRAND</b> FIAT
            if you want to change the brand you can change the url <b>http://127.0.0.1:8000/date/20190513/brand/FIAT</b>
            you see after /brand/Fiat you can change it to the brand that you want but dont forget it has to be UPPERCASE!
        </p>
    </div>

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
            @if ($car['merk'] == $brand)
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
