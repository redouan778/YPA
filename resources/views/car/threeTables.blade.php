@extends('app.layout')
@section('section')

    <?php
        $i =1;
        $t = 1;
        $r = 1;
    ?>

{{--    <div class="container">--}}

    <div class="explanation">
        <p>
            So as you can see
        </p>
    </div>
        <div class="row">
            <div class="col-m">
                <table class="table px-5">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Merk</th>
                        <th scope="col">Kenteken</th>
                        <th scope="col">Voertuigsoort</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach ($output_brand as $car_brand)
                        @if (isset($car_brand['merk']) && ($car_brand['merk'] === $brand))
                            <tr>
                                <th scope="row">{{$i++}}</th>
                                <td> {{ $car_brand['merk']}}</td>
                                <td> {{ $car_brand['kenteken']}}</td>
                                <td> {{ $car_brand['voertuigsoort']}}</td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-m">

                <table class="table px-5">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Merk</th>
                        <th scope="col">Kenteken</th>
                        <th scope="col">Voertuigsoort</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach ($output_date as $car)
                        @if (isset($car['datum_tenaamstelling']) && ($car['datum_tenaamstelling'] === $date))
                            <tr>
                                <th scope="row">{{$r++}}</th>
                                <td> {{ $car['merk']}}</td>
                                <td> {{ $car['kenteken']}}</td>
                                <td> {{ $car['voertuigsoort']}}</td>
                            </tr>
                        @else
                            <p>information not clear</p>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-m">
                <table class="table px-5">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Merk</th>
                        <th scope="col">Kenteken</th>
                        <th scope="col">Voertuigsoort</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach ($output_ten_cars as $car)
                        <tr>
                            <th scope="row">{{$t++}}</th>
                            <td> {{ $car['merk']}}</td>
                            <td> {{ $car['kenteken']}}</td>
                            <td> {{ $car['voertuigsoort']}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
