@extends('layouts.app')

@section('content') 
    <div class="main-content flex-1 d-flex flex-column">
        <h2 class="main-heading">Select a Template</h2>
        <div class="flex-1">
            <div class="scrollbar-fancy h-100">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-md-3">
                            <div class="template-item">
                                <a href="">
                                    <img src="{{ asset('public/theme-resources/images/form-1.png')}}" class="img-fluid" /> </a>
                                <a href="create-form-2.php" class="use-btn">Use Template</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
@endsection