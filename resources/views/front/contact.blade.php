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

    <hr>
    <hr>
    <hr>
    <h1>
        patch kullanımı
    </h1>
    <div class="col-8 mx-auto">
        <form action="{{route("user.update",["id"=>8])}}" method="POST">
            @csrf
            @method("PATCH")
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
    <hr>
    <h1>
        put kullanımı
    </h1>
    <div class="col-8 mx-auto">
        <form action="{{route("user.updateAll",["id"=>88])}}" method="POST">
            @csrf
            @method("PUT")
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
    <hr>
    <h1>
        delete kullanımı
    </h1>
    <div class="col-8 mx-auto">
        <form action="{{route("user.delete",["id"=>3])}}" method="POST">
            @csrf
            @method("DELETE")
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
