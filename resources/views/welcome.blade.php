@extends('header')

@section('content_1')
    <table class="table" style="text-align: center">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Fakultas</th>
            <th scope="col">Jurusan</th>
        </tr>
        </thead>
        <tbody>
        @for($i = 0; $i < count ($fakultas); $i ++)
            <tr>
                <td>{{ $fakultas[$i][0]}}</td>
                <td>{{ $fakultas[$i][1]}}</td>
            </tr>
        @endfor
        </tbody>
    </table>
@endsection


