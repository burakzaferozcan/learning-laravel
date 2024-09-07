@extends("layouts.front")

@section("css")
@endsection

@section("icerik")
    <hr>
    <h1>
        iletişim sayfası
    </h1>
    <div class="col-8 mx-auto">
        <form action="{{route("contact")}}" method="POST">
            @csrf
            {{--        <input type="hidden" name="_token" value="{{csrf_token()}}">--}}
            <input type="text" class="form-control" name="fullname">
            <br>
            <input type="email" class="form-control" name="email">
            <br>
            <button class="btn btn-success" type="submit">Gönder</button>
        </form>
    </div>
    <hr>
    <hr>
    <hr>
    <h1>
        iletişim sayfası 2
    </h1>
    <div class="col-8 mx-auto">
        <form action="{{route("user",['id'=>10])}}" method="POST">
            @csrf
            {{--        <input type="hidden" name="_token" value="{{csrf_token()}}">--}}
            <input type="text" class="form-control" name="fullname">
            <br>
            <input type="email" class="form-control" name="email">
            <br>
            <button class="btn btn-success" type="submit">Gönder</button>
        </form>
    </div>
    <hr>
    <hr>
    <hr>
    <h1>
        support form
    </h1>
    <div class="col-8 mx-auto">
        <form action="{{route("support-form.support")}}">
            @csrf
            {{--        <input type="hidden" name="_token" value="{{csrf_token()}}">--}}
            <input type="text" class="form-control" name="fullname">
            <br>
            <input type="email" class="form-control" name="email">
            <br>
            <button class="btn btn-success" type="submit">Gönder</button>
        </form>
    </div>
    <hr>

@endsection

@section("js")
@endsection
