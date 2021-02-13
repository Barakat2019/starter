<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">English <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">العربية</a>
            </li>

        </ul>

    </div>
</nav>
Add your offer
@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{Session::get('success')}}
</div>
@endif

<form method="post" action="{{route('offers.store')}}">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">{{__('messages.Offer Name')  }}</label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        @error('name')
        <small class="form-text text-danger">{{$message}}</small>
        @enderror


    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">{{__('messages.Offer Price')}}</label>
        <input type="text" name="price" class="form-control" id="exampleInputPassword1" placeholder="price">
        @error('price')
        <small class="form-text text-danger">{{$message}}</small>
        @enderror
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Offer Detials</label>
        <input type="text" name="details" class="form-control" id="exampleInputPassword1" placeholder="details">
        @error('details')
        <small class="form-text text-danger">{{$message}}</small>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Save Offer</button>
</form>
