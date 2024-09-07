@extends("layouts.front")

@section("css")
@endsection


@section("icerik")
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
