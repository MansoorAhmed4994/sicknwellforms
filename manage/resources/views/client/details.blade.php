@extends('layouts.app')

@section('content')


<h2 class="main-heading d-flex w-100 align-items-center justify-content-between">
            <span>Add Client</span>
            <!--<a href="add-client.php">Edit</a>-->
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
@endsection