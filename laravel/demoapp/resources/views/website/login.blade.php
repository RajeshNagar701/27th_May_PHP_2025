@extends('website.layout.frame')

@section('main_section')


<!-- Start Content Page -->
<div class="container-fluid bg-light py-5">
    <div class="col-md-6 m-auto text-center">
        <h1 class="h1">Login Us</h1>

    </div>
</div>


<!-- Start Contact -->
<div class="container py-5">
    <div class="row py-5">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{url('login_auth')}}" class="col-md-9 m-auto" method="post" role="form">
            @csrf
            <div class="row">
                <div class="form-group col-md-12 mb-3">
                    <label for="inputemail">Email</label>
                    <input type="email" class="form-control mt-1" id="email" name="email" placeholder="Email">
                </div>
                <div class="form-group col-md-12 mb-3">
                    <label for="inputname">Password</label>
                    <input type="password" class="form-control mt-1" id="password" name="password" placeholder="Password">
                </div>

            </div>
            <div class="row">
                <div class="col text-start mt-2">
                    <a href="signup">If you not Registred then Signup Here</a>
                </div>
                <div class="col text-end mt-2">
                    <button type="submit" name="submit" class="btn btn-success btn-lg px-3">Login</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- End Contact -->
@endsection