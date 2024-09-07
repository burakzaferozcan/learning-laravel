@extends("layouts.front")

@section("css")
@endsection


@section("icerik")
    <form action="" method="POST">
        @csrf
        {{--        @method("DELETE")--}}
        @auresMethod(`delete`)
        <input type="text" name="fullname">
        <button type="submit">Gönder</button>
    </form>
    <hr>
    içerik alanı
    <hr>
    gelen yaş değeri : {{$age??"yaş değeri gönderilmedi"}}
    <hr>
    gelen isim değeri : {{$name??"isim değeri gönderilmedi"}}
    <hr>

@endsection


@section("js")
@endsection
