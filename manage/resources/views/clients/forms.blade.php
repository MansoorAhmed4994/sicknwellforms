@extends('layouts.app')

@section('content') 

    <div class="main-content flex-1 d-flex flex-column">
        <h2 class="main-heading">Select a Template</h2>

        <div class="flex-1">
            <div class="scrollbar-fancy h-100">
                {{-- {{dd($client->form->first()->id);     }} --}}
                @foreach($client->form as $form)
                <div class="forms-items">
                    <div class="form-item d-flex align-items-center">
                        <i class="fas fa-user"></i>
                        <div class="name-and-details flex-1">
                            
                        <h4><a href="{{route($form->form_link.'.submissions', $form->pivot->id)}}">{{$form->form_name}}</a></h4>
                        </div>
                        <div class="actions-list align-self-stretch">
                            <ul class="h-100">
                                <li class="dropdown  h-100 d-flex align-items-center">
                                    <span class="h-100 d-flex align-items-center justify-content-center" data-toggle="dropdown" data-display="static" data-position="right"><span>More <i class="fas fa-caret-down"></i></span> </span>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li> 
                                                <a href="{{route($form->form_link.'.submissions', $form->pivot->id)}}" class="d-flex align-items-center">
                                                    <i class="fas fa-eye"></i><span>View Submissions</span>
                                                </a>
                                            </li>  
                                            <li> 
                                                <a href="{{route('form.embed.link', [$form->form_link,$form->pivot->id])}}" class="d-flex align-items-center">
                                                    <i class="fas fa-eye"></i><span>Get Embed Links</span>
                                                </a>
                                            </li> 
                                            <li> 
                                                <a href="{{route($form->form_link.'.submissions', $form->pivot->id)}}" class="d-flex align-items-center">
                                                    <i class="fas fa-trash"></i><span>Delete</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach




            </div>
        </div>  
@endsection
