@extends('layouts.app')

@section('content')
        <div class="scrollbar-fancy h-100">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-9">
                        <div class="form-type">
                            <div class="main-top">
                                <h2>Client Type</h2>
                                <p>Create an amazing form to collect data easily</p>
                            </div>
                        </div>
                        <div class="class-type-items">
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="class-type">
                                        <a href="{{route('form-templetes')}}">
                                            <div class="image-item">
                                                <img src="{{ asset('public/theme-resources/images/class-icon.png')}}" />
                                            </div>
                                            <h4>Class A</h4>
                                            <p>Some description about it here</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="class-type">
                                        <a href="{{route('form-templetes')}}">
                                            <div class="image-item">
                                                <img src="{{ asset('public/theme-resources/images/class-icon.png')}}" />
                                            </div>
                                            <h4>Class B</h4>
                                            <p>Some description about it here</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
@endsection