
@extends('users.layouts.skeleton')
@section('content')
    {{-- declare-title --}}
    @section('title','Artist Connect')

    {{-- row --}}
    <div class="row d-flex justify-content-end p-4 welcome">
        <div class="col-md-4">
            <form id="signin text-center">
                <div class="row d-flex ">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-10 justify-content-center text-center">

                        <img src="img/letter-a.png" class="logo-1"/>
                    </div>
                </div>
               <div class="row">
                   <div class="col-md-2">
                        <span class="badge badge-danger"><i class="fas fa-user mx-2"></i></span>
                    </div>
                    <div class="col-md-5">
                        <input type="text" class="form-control m-1" placeholder="First Name" name="first_name" required/>
                    </div>
                    <div class="col-md-5">
                        <input type="text" class="form-control m-1" placeholder="Last Name" name="last_name" required/>
                    </div>
               </div>
               <div class="row">
                    <div class="col-md-2">
                            <span class="badge badge-danger"><i class="fas fa-envelope mx-2"></i></span>
                    </div>
                    <div class="col-md-10">
                        <input type="email" class="form-control m-1" placeholder="E-Mail Address" name="email_address" required />
                    </div>
               </div>
               <div class="row">      
                   <div class="col-md-2">          
                        <span class="badge badge-danger"><i class="fas fa-phone mx-2"></i></span>
                   </div>
                   <div class="col-md-10">
                       <input type="phone" class="form-control m-1" placeholder="Phone Number" name="phone" required />
                   </div>
               </div>
                
                <hr/>
               
                <div class="row">
                    <div class="col-md-2">
                            <span class="badge badge-danger"><i class="fas fa-key mx-2"></i></span>
                    </div>
                    <div class="col-md-10">
                        <input type="password" class="form-control m-1" placeholder="Password" name="password_1" required />
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2">
                            <span class="badge badge-danger"> <i class="fas fa-key mx-2"></i></span>
                    </div>
                    <div class="col-md-10">
                        <input type="password" class="form-control m-1" placeholder="Confirm Password" name="password_2" required />
                    </div>
                </div>
              
                <hr/>
                <div class="row">
                    <div class="col-md-2">
                        {{-- <i class="fas fa-circle-notch mx-2"></i> --}}
                    </div>
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="submit" class="form-control m-2 btn btn-success b-welcome">Enter <i class="fas fa-arrow-right mx-2"></i></button>
                                </div>
                                <div class="col-md-6">
                                    <button type="reset" class="form-control m-2 btn btn-danger b-welcome">Clear <i class="fas fa-eraser mx-2"></i></button>
                                </div>
                            </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    {{-- row --}}

    


@endsection