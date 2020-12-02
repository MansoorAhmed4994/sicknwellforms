@extends('layouts.app')

@section('content') 
    <div class="main-content flex-1 d-flex flex-column">
        <h2 class="main-heading">Select a Template</h2>
        <div class="flex-1">
            <div class="scrollbar-fancy h-100">
                <div class="container-fluid">
                    <div class="row">
                         
                        @foreach($forms as $form)
                        <?php $form_id = $form->id; ?>
                        
                        <div class="col-12 col-md-3">
                            <div class="template-item">
                                <a href="{{route('client-form',$form_id)}}">
                                    <img src="{{ asset('public/theme-resources/images/form-1.png')}}" class="img-fluid" /> </a>
                                <a href="{{route('client-form',$form_id)}}" class="use-btn">{{$form->title}}</a>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </div> 
@endsection