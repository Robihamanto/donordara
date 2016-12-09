@extends('layoutadmin')
@section('content')

    <article>
        <h1>Semua Data Pendonor (Telah Disetujui)</h1>
        <table width=100% border=1>
            <tr bgcolor=cf0b0b>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Berat</th>
                <th>Umur</th>
                <th>Gol. Darah</th>
                <th>Edit</th>
            </tr>
            <?php $no=1;?>
            @foreach($data as $r)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$r->fullname}}</td>
                <td>{{$r->weight}} Kg</td>
                <td>{{$r->dob}}</td>
                <td align=center>{{$r->bloodType->name}}</td>
                <td align=center>
                    <a href='{{route('editdatapendonor', ['id' => $r->id])}}'>Pilih</a>
                </td>
            </tr>

            @endforeach
        </table>
    </article>

@endsection 