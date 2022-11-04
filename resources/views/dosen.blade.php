@include('header')

<table class="table" style="text-align: center">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Kode Dosen</th>
        <th scope="col">Nama Dosen</th>
        <th scope="col">Jurusan</th>
    </tr>
    </thead>
    <tbody>
    @foreach($dosen as $x)
        <tr>
            <td>{{ $x[2] }}</td>
            <td>{{ $x[0] }}</td>
            @if($x[1] == 'CS')
                <td>Computer Science</td>
            @elseif($x[1] == 'BC')
                <td>Business Creation</td>
            @elseif($x[1] == 'DKV')
                <td>Desain Komunikasi Visual</td>
            @endif
        </tr>
    @endforeach
    </tbody>
</table>
