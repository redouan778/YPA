@extends('app.layout')
@section('section')

    <?php $i =1; ?>

    <div class="explanation">
        <p>
            So as you can see, you receive <b>Ten Cars</b> from the <b>DATE</b>
            if you want to change the data you can change the url <b>http://127.0.0.1:8000/date/20190513</b>
            you see after /date/20190513 you can change it to the date that you want.
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

        @foreach ($autos as $car)
            @if ($car["datum_tenaamstelling"] == $datum)
                <tr>
                    <th scope="row">{{$i++}}</th>
                    <td> {{ $car['merk']}}</td>
                    <td> {{ $car['kenteken']}}</td>
                    <td> {{ $car['voertuigsoort']}}</td>
                </tr>
            @endif
       @endforeach
        </tbody>
    </table>
@endsection
