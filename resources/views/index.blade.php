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
          @foreach ($array_ten_cars as $user)
              <tr>
                  <th scope="row">{{$i++}}</th>
                  <td> {{ $user['merk']}}</td>
                  <td> {{ $user['kenteken']}}</td>
                  <td> {{ $user['voertuigsoort']}}</td>
              </tr>
          @endforeach

          @foreach (output_brand as $car)
              <?php $carBrand = $car['merk'];?>
              @if ($carBrand == $brand)
                  <tr>
                      <th scope="row">{{$i++}}</th>
                      <td> {{ $car['merk']}}</td>
                      <td> {{ $car['kenteken']}}</td>
                      <td> {{ $car['voertuigsoort']}}</td>
                  </tr>
              @endif
          @endforeach

          @foreach ($output_date as $car)
              <?php $dateTenaamstelling = $car['datum_tenaamstelling'];?>
              @if ($dateTenaamstelling  == $datum)
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
