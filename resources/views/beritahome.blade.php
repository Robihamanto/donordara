@extends('layouthome')

@section('content')

    @foreach($data as $d)
        <article>
            <h1>{{$d->title}}</h1>
            <i>{{$d->updated_at}}</i>
            <b>Oleh Administrator</b>
            <p>{!! nl2br($d->content) !!}</p>
            @foreach($d->comment as $c)
                <b>Oleh {{$c->user->fullname}}</b>
                <br>
                {{$c->comment}}
            @endforeach
        </article>
    @endforeach

@endsection
