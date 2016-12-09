@extends('layoutuser')
@section('content')
    <article>
        <h1>Semua Data Pendonor (Telah Disetujui)</h1>
        <table width=100% border=1>
            <tr bgcolor=cf0b0b>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Berat</th>
                <th>Tanggal Lahir</th>
                <th>Gol. Darah</th>
            </tr>
            <?php $no = 1; ?>
            @foreach($data as $d)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$d->fullname}}</td>
                    <td>{{$d->weight}} Kg</td>
                    <td>{{$d->dob}}</td>
                    <td align=center>{{$d->bloodtype->name}}</td>
                </tr>
                }
            @endforeach
        </table>
    </article>
@endsection