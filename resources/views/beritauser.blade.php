@extends('layoutuser')

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
            <?php
            if (auth()->user()->status == 'aktif'){
            ?>
            <div class="komen">
                <form action="{{route('submitkomentar')}}" method="POST" accept-charset="utf-8">
                    {{csrf_field()}}
                    <input type="hidden" name="information_id" value="{{$d->id}}">
                    <textarea name="komentar"
                              style='border-radius: 5px;margin-top: 10px;margin-bottom: 10px;width: 625px'></textarea>
                    <input class="float-right" type="submit" name="submitkomentar" value="Komentar">
                </form>
            </div>
            <?php
            }
            ?>
        </article>
    @endforeach

@endsection
