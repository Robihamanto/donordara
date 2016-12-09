@extends('layoutadmin')
@section('content')
    <article>
        <h1>Tambah Berita</h1>
        @foreach($data as $d)
        <form action='{{route('editberitaproses')}}' method='POST'>
            {{csrf_field()}}
            <table width=100%>
                <tr>
                        <td><input  value="{{$d->title}}" name='title' type='text' style='width:70%'></td>
                </tr>
                <tr>
                    <td><textarea name='content' type="'text" style='width:100%; height:250px' >{{$d->content}}</textarea></td>
                </tr>
                <tr>
                    <td><input type='submit' name='tambah' value='Tambahkan'></td>
                </tr>
            </table>
        @endforeach
        </form>
    </article>
@endsection()