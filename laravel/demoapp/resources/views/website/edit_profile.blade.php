@extends('website.layout.frame')

@section('main_section')


    <!-- Start Content Page -->
    <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1">Edit Profile</h1>
        </div>
    </div>

   
    <!-- Start Contact -->
    <div class="container py-5">
        <div class="row py-5">
            <form action="{{url('update_profile/'.$customer->id)}}" class="col-md-9 m-auto" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-12 mb-3">
                        <label for="inputemail">Name</label>
                        <input type="text" value="{{$customer->name}}" class="form-control mt-1" id="name" name="name" placeholder="Name">
                    </div>
                    <div class="form-group col-md-12 mb-3">
                        <label for="inputemail">Email</label>
                        <input type="email" value="{{$customer->email}}" class="form-control mt-1" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group col-md-12 mb-3">
                        <label for="inputname">Gender : </label><br>
                        @php
                        $gender=$customer->gender;
                        @endphp
                        Male : <input type="radio" class="mt-1" <?php if($gender=="Male"){echo "checked";}?>  name="gender" value="Male"> 
                        Female : <input type="radio" class="mt-1" <?php if($gender=="Female"){echo "checked";}?>  name="gender" value="Female"> 
                    </div>
                    <div class="form-group col-md-12 mb-3">
                        <label for="inputname">Hobby : </label><br>
                        @php
                        $hobby=$customer->hobby;
                        $hobby_arr=explode(",",$hobby);
                        @endphp
                        Sports : <input type="checkbox" class="mt-1"  name="hobby[]" value="Sports" <?php if(in_array("Sports",$hobby_arr)){ echo "checked";}?>> 
                        Singing : <input type="checkbox" class="mt-1"  name="hobby[]" value="Singing" <?php if(in_array("Singing",$hobby_arr)){ echo "checked";}?>> 
                        Dancing : <input type="checkbox" class="mt-1"  name="hobby[]" value="Dancing" <?php if(in_array("Dancing",$hobby_arr)){ echo "checked";}?>> 
                    </div>
                    <div class="form-group col-md-12 mb-3">
                        <label for="inputname">Mobile</label>
                        <input type="number" value="{{$customer->mobile}}" class="form-control mt-1" id="password" name="mobile" placeholder="Mobile">
                    </div>
                    <div class="form-group col-md-12 mb-3">
                        <label for="inputname">Upload Profile Pic</label>
                        <input type="file" class="form-control mt-1" name="image" placeholder="File">
                        <img src="{{url('upload/customers/'.$customer->image)}}" width="50px">
                    </div>
                </div>
              
                
                <div class="row">
                    <div class="col text-end mt-2">
                        <button type="submit" name="submit" class="btn btn-success btn-lg px-3">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End Contact -->
@endsection