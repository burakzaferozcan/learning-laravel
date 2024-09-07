@extends("layouts.front")

@section("css")
@endsection

@section("icerik")
    <hr>
    About section
    <hr>
    gelen yaş değeri :{{$age??$person->age}}
    <hr>
    gelen isim değeri : {{$name??$person->name}}

    <hr>
@endsection

@section("js")
@endsection
