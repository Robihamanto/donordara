@extends('layoutadmin')
@section('content')

    <article>
        <h1>Semua Daftar Informasi/Berita</h1>
        <table width=100% border=1>
            <tr bgcolor=cf0b0b>
                <th>No</th>
                <th>Judul Info</th>
                <th>tanggal</th>
                <th></th>
            </tr>
            <?php $no = 1; ?>
            @foreach($data as $r)
                <tr>
                    <td valign=top>{{$no++}}</td>
                    <td valign=top>{{$r->title}}</td>
                    <td width='140px'>{{substr($r->updated_at, 0, 10)}}</td>
                    <td valign=top><a href='{{route('editberita', ['id' => $r->id])}}'>Edit |</a><a
                                href='{{route('delete-berita', ['id' => $r->id])}}'> Delete</a></td>
                </tr>
            @endforeach
        </table>
        <a href='{{route('tambahberita')}}'>Tambah Berita</a>
    </article>

@endsection 