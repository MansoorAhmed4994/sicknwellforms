@extends('layouts.app')

@section('content')
<div class="modal login-modal" id="loginModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h5 class="modal-title">Log in</h5>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="text" class="form-control" placeholder="Enter email" id="id" name="id">
                    </div>
                    <div class="form-group">
                        <label for="pass">Password:</label>
                        <input type="password" class="form-control" placeholder="Enter password" id="pass">
                    </div>
                    <div class="form-group">
                        <span class="text-danger errshow" style="display: none;">Wrong Credentials</span>
                    </div>

                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-secondary" onclick="window.history.back()">Back</button>
                    <input class="btn btn-primary" type="button" id="check_credentials" name="check_credentials"
                        value="Submit">
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
    $('#loginModal').modal({backdrop: 'static', keyboard: false},'show')
})
</script>

<div class="blur-container">
<h2 class="main-heading d-flex w-100 align-items-center justify-content-between">
    <span>Add Client</span>
    <a href="add-client.php">Edit</a>
</h2>
<div class="flex-1">
    <div class="scrollbar-fancy h-100">
        <div class="form-type-1">
            <form action="clients.php">
                <div class="container-fluid">
                    <div class="row form-group align-items-center">
                        <div class="col-12 col-md-4 col-lg-2">
                            <label>Full Name</label>
                        </div>
                        <div class="col-12 col-md-8 col-lg-10">
                            <div class="form-val">
                                <p>{{$clients['name']}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group align-items-center">
                        <div class="col-12 col-md-4 col-lg-2">
                            <label>Company Name</label>
                        </div>
                        <div class="col-12 col-md-8 col-lg-10">
                            <div class="form-val">
                                <p>{{$clients['company_name']}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group align-items-center">
                        <div class="col-12 col-md-4 col-lg-2">
                            <label>Job Title</label>
                        </div>
                        <div class="col-12 col-md-8 col-lg-10">
                            <div class="form-val">
                                <p>{{$clients['job_title']}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group align-items-center">
                        <div class="col-12 col-md-4 col-lg-2">
                            <label>Industry</label>
                        </div>
                        <div class="col-12 col-md-8 col-lg-10">
                            <div class="form-val">
                                <p>{{$clients['industry']}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group align-items-center">
                        <div class="col-12 col-md-4 col-lg-2">
                            <label>Username</label>
                        </div>
                        <div class="col-12 col-md-8 col-lg-10">
                            <div class="form-val">
                                <p>{{$clients['user_name']}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group align-items-center">
                        <div class="col-12 col-md-4 col-lg-2">
                            <label>Email Address</label>
                        </div>
                        <div class="col-12 col-md-8 col-lg-10">
                            <div class="form-val">
                                <p>{{$clients['email']}}</p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </form>
    </div>
</div>
</div>
</div>

<script>
    jQuery('[name="check_credentials"]').on('click', function() {  
             
             jQuery.ajax({
                 url: base_url + "/clients/details/verified",
                 type: "POST",
                 beforeSend: function() {
                     jQuery('[name="available_qty"]').empty().append('<option> Loading...<option>');
                 },
                 data: {
                     id: jQuery("#id").val(),
                     pass: jQuery("#pass").val(),
                     client_id: "{{$clients["id"]}}",
                     _token: token
                 },
                 dataType: "json"
             }).done(function(data) { 
                 if (data.status) {
                     $('#loginModal').modal('hide')
                     $('.blur-container').removeClass('blur-container')
                 }else{
                     $(".errshow").show();
                 }
             }).fail(function(jqXHR, textStatus) {
                 alert("Something went wrong. Try Again.");
             });
         
     });
        
</script>
@endsection