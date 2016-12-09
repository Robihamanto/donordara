@extends('layoutadmin')
@section('content')
    <article>
        <h1>Semua Data Calon Pendonor (Belum Disetujui)</h1>
        <table width=100% border=1>
            <tr bgcolor=cf0b0b>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Berat</th>
                <th>Umur</th>
                <th>Gol. Darah</th>
                <th></th>
            </tr>
            <?php $no = 1?>
            @foreach($data as $r)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$r->username}}</td>
                <td>{{$r->weight}} Kg</td>
                <td>{{$r->dob}}</td>
                <td align=center>{{$r->bloodType->name}}</td>
                <td align=center>
                    <a href='{{route('aktifkan', ['id' => $r->id])}}'>Aktifkan</a> |
                    <a href='{{route('hapuscalon', ['id' => $r->id])}}'>Hapus</a>
                </td>
            </tr>
            @endforeach
        </table>
    </article>
@endsection