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
    @if(isset($person)&&isset($person->age))
        @switch($person->age)
            @case(0)
                geçersiz değer girildi
                @break
            @case($person->age>=1&&$person->age<18)
                çocuk
                @break
            @case($person->age>=18&&$person->age<45)
                yetişkin
                @break
            @case($person->age>=45&&$person->age<1800)
                yaşlı
                @break
            @default
                geçersiz değer girildi
                @break
        @endswitch
    @else
        gelmedi
    @endif
    <hr>

@endsection

@section("js")
@endsection
