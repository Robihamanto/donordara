@extends('layoutadmin')
@section('content')

    <article>
        <h1>Semua Pesan masuk</h1>
        <table width=100% border=1>
            <tr bgcolor=cf0b0b>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Isi Pesan</th>
                <th>Aksi</th>
            </tr>
            <tr>
                <td valign=top>$no</td>
                <td width='140px' align=center valign=top>$r[nama_lengkap]</td>
                <td>$r[isi_pesan]</td>
                <td valign=top><a href='index.php?page=kelolapesanmasuk&id=$r[id_hubungi_kami]'>Hapus</a></td>
            </tr>
        </table>
    </article>

@endsection 