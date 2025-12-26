@extends('website.layout.frame')

@section('main_section')


    <!-- Start Content Page -->
    <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1">Signup Us</h1>
            
        </div>
    </div>

   
    <!-- Start Contact -->
    <div class="container py-5">
        <div class="row py-5">
            <form action="{{url('signup')}}" class="col-md-9 m-auto" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-12 mb-3">
                        <label for="inputemail">Name</label>
                        <input type="text" class="form-control mt-1" id="name" name="name" placeholder="Name">
                    </div>
                    <div class="form-group col-md-12 mb-3">
                        <label for="inputemail">Email</label>
                        <input type="email" class="form-control mt-1" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group col-md-12 mb-3">
                        <label for="inputname">Password</label>
                        <input type="password" class="form-control mt-1" id="password" name="password" placeholder="Password">
                    </div>
                    <div class="form-group col-md-12 mb-3">
                        <label for="inputname">Gender : </label><br>
                        Male : <input type="radio" class="mt-1"  name="gender" value="Male"> 
                        Female : <input type="radio" class="mt-1"  name="gender" value="Female"> 
                    </div>
                    <div class="form-group col-md-12 mb-3">
                        <label for="inputname">Hobby : </label><br>
                        Sports : <input type="checkbox" class="mt-1"  name="hobby[]" value="Sports"> 
                        Singing : <input type="checkbox" class="mt-1"  name="hobby[]" value="Singing"> 
                        Dancing : <input type="checkbox" class="mt-1"  name="hobby[]" value="Dancing"> 
                    </div>
                    <div class="form-group col-md-12 mb-3">
                        <label for="inputname">Mobile</label>
                        <input type="number" class="form-control mt-1" id="password" name="mobile" placeholder="Mobile">
                    </div>
                    <div class="form-group col-md-12 mb-3">
                        <label for="inputname">Upload Profile Pic</label>
                        <input type="file" class="form-control mt-1" name="image" placeholder="File">
                    </div>
                </div>
              
                
                <div class="row">
                    <div class="col text-start mt-2">
                        <a href="login">If you already Registred then Login Here</a>
                    </div>
                    <div class="col text-end mt-2">
                        <button type="submit" name="submit" class="btn btn-success btn-lg px-3">Signup</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End Contact -->
@endsection