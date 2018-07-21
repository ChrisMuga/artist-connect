@extends('users.layouts.skeleton')
@section('title','Login')
@section('content')
    {{-- row --}}
    <div class="row d-flex justify-content-end p-4 welcome">
        <div class="col-md-4">
            <form id="signin" class="text-center" >
                {{csrf_field()}}
                <div class="row d-flex ">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-10 justify-content-center text-center">

                        <img src="img/letter-a.png" class="logo-1"/>
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
              
                
                <hr/>
               
                <div class="row">
                    <div class="col-md-2">
                            <span class="badge badge-danger"><i class="fas fa-key mx-2"></i></span>
                    </div>
                    <div class="col-md-10">
                        <input type="password" class="form-control m-1" placeholder="Password" name="password_1" required />
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
                                    <button type="button" id="bt1" class="form-control m-2 btn btn-success b-welcome">Enter <i class="fas fa-arrow-right mx-2"></i></button>
                                </div>
                                <div class="col-md-6">
                                    <button type="reset" class="form-control m-2 btn btn-danger b-welcome">Clear <i class="fas fa-eraser mx-2"></i></button>
                                </div>
                            </div>

                            <div class="row d-flex justify-content-center">
                                <a href="/" class="badge badge-secondary">Not registered? Register here</a>
                            </div>

                    </div>
                </div>

            </form>
        </div>
    </div>
    {{-- row --}}

    <script>
        jQuery(document).ready(function(){
            try{
                jQuery('#bt1').click(function(e){
                    e.preventDefault();
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    var formData = new FormData($("#signin")[0]);
                    jQuery.ajax({
                        url: "{{ url('/register_user') }}",
                        method: 'post',
                        processData: false, 
                        contentType: false,
                        data: formData,
                        success: function(result){
                            var code=result['code'];
                            if(code=='1')
                            {
                                swal('success',result['msg'], 'success').then((value) => {
                                    $('#signin')[0].reset();
                                    window.location.replace("login");

                                });
                            }
                            else if(code=='0')
                            {
                                swal('error',result['msg'], 'error').then((value) => {

                                   $('#signin')[0].reset();
                                   

                                });
                                console.log(result['msg']);
                                
                            }
                            
                            
                        },
                        error: function(result){
                            swal('error','an error occured', 'error');
                            
                        }
                    });
                });
            }
            catch (e)
            {
                console.log("error");
            }
        });
    </script>


@endsection