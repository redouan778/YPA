@extends('layout')
@section('section')


    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">Merk</th>
            <th scope="col">Kenteken</th>
            <th scope="col">handelsbenaming</th>
            <th scope="col">vervaldatum_apk</th>
            <th scope="col">catalogusprijs</th>
            <th scope="col">Voertuigsoort</th>
        </tr>

        </thead>
        <tbody>

          <?php
            // $apk = ;
            // $date =

          ?>
          <td>{{$details['merk']}}</td>
          <td>{{$details['kenteken']}}</td>
          <td>{{$details['handelsbenaming']}}</td>
          <td>{{date('d-M-Y', strtotime($details['vervaldatum_apk']))}}</td>
          <td>
              € {{$details['catalogusprijs']}},-
          </td>
          <td>{{$details['voertuigsoort']}}</td>
        </tbody>
    </table>
@endsection
