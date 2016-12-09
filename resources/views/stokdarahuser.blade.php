@extends('layoutuser')
@section('content')

    <article>
        <h1>Semua Data Stok Darah Masuk dan Keluar</h1>
        {{--@foreach($bloodtypes as $b)--}}
            {{--<option value="{{$b->id}}">{{$b->name}}</option>--}}
        {{--@endforeach--}}
        <table width=100% border=1>
            <tr bgcolor=cf0b0b>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Gol. Darah</th>
                <th>Jumlah</th>
                <th>Status</th>
                <th>Date Of Birth</th>
            </tr>
            <?php $no = 1?>
            <tr>
                @foreach($data as $d)
                    <td>{{$no++}}</td>
                    <td>{{$d->user->fullname}}</td>
                    <td align=center>{{$d->user->bloodType->name}}</td>
                    <td>{{$d->total}}</td>
                    <td style='text-transform:capitalize'>{{$d->status}}</td>
                    <td>{{$d->user->dob}}</td>
            </tr>
            @endforeach
        </table>
    </article>
@endsection