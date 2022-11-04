@extends('header')

@section('content_1')
    <table class="table" style="text-align: center">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Jurusan</th>
            <th scope="col">Kelas</th>
            <th scope="col">Jumlah Mahasiswa</th>
        </tr>
        </thead>
        <tbody>
        @forelse($kelas as $x)
            <tr>
                @if($x[0] == 'CS')
                    <td>Computer Science</td>
                @elseif($x[0] == 'BC')
                    <td>Business Creation</td>
                @elseif($x[0] == 'DKV')
                    <td>Desain Komunikasi Visual</td>
                @endif
                <td>{{ $x[1] }}</td>
                @if($x[2] <= 20)
                    <td style="color:green">{{ $x[2] }}</td>
                @elseif($x[2] > 20 && $x[2] < 50)
                    <td style="color:#CCCC00">{{ $x[2] }}</td>
                @elseif($x[2] >= 50)
                    <td style="color:red">{{ $x[2] }}</td>
                @endif
            </tr>
        @empty
            <tr>
                <td> NULL </td>
                <td> NULL </td>
            </tr>
        @endforelse
        </tbody>
    </table>
@endsection
