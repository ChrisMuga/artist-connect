jQuery('#bt1').click(register_user);
function register_user(e)
{
    e.preventDefault();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var formData = new FormData($("#signin")[0]);
    jQuery.ajax({
        url: "/register_user",
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
                    window.location.replace("../login");

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
}