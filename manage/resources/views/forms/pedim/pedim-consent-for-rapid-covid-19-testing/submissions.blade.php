
 
@extends((Auth::guard('clients')->check()) ? 'client.layouts.app' : 'layouts.app');

@section('content')
    <div class="modal login-modal" id="loginModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form>
                <input type="hidden" value="{{$client_id}}" id="client_id">
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
     <div  class="blur-container">
        <div class="submission-headers d-flex align-items-center justify-content-between">
            <h2 class="flex-1">Form name here submissions</h2>
            <div class="search-form d-flex">
                <i class="far fa-search search-icon"></i>
                <input type="text" placeholder="Search" />
                <button type="submit">Filter <i class="fas fa-filter"></i></button>
            </div>
            <a href="" class="download-all align-self-stretch d-flex align-items-center"><i class="fal fa-long-arrow-down"></i><span>Download All</span></a>
        </div>
        <div class="flex-1">
            <div class="scrollbar-fancy h-100">
                <table class="submissions-table table">
                        <tr>
                            <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>Edit</span>
                                </div>
                            </th>
                            <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>Approved</span>
                                </div>
                            </th>
                            <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>ID</span>
                                </div>
                            </th> 
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>Patient Name</span>
                                </div>
                            </th> 
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>Is Patient Minor</span>
                                </div>
                            </th> 
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>Parent/Guardian</span>
                                </div>
                            </th> 
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>Email</span>
                                </div>
                            </th> 
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>Telephone</span>
                                </div>
                            </th> 
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>Sign Responsible Party</span>
                                </div>
                            </th> 
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>Date</span>
                                </div>
                            </th> 
                                                         
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>Client Forms ID</span>
                                </div>
                            </th> 

                            <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>Created At</span>
                                </div>
                            </th>

                            <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>Updated At</span>
                                </div>
                            </th>

                            <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>Created By</span>
                                </div>
                            </th>

                            <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>Updated By</span>
                                </div>
                            </th>
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>Status</span>
                                </div>
                            </th>        
                    </tr>





 
                        
                         @foreach($submissions as $row) 
                        <tr> 
                            <td>
                                <div class="d-flex align-items-center">  
                                    <span><a href="{{route('PedimConsentForRapidCovid19Testing.edit',$row->id)}}">Edit</a></span>
                                </div>
                            </td> 
                            <td>
                                <div class="d-flex align-items-center">  
                                    <span><a href="{{route('PedimConsentForRapidCovid19Testing.create.zoom.meeting',$row->id)}}">Create Meeting</a></span>
                                </div>
                            </td> 
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->id}}</span>
                                </div>
                            </td>  
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->patient_name}}</span>
                                </div>
                            </td>  
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->is_patient_minor}}</span>
                                </div>
                            </td>  
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->parent_guardian}}</span>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->patient_email}}</span>
                                </div>
                            </td>  
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->telephone}}</span>
                                </div>
                            </td>    
                            <td>
                                <div class="d-flex align-items-center"> 
                                    
                                    <span><img src="{{asset('manage/storage/'.$row->sign_responsible_party)}}" class="img-fluid"></span>
                                </div>
                            </td> 
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->date}}</span>
                                </div>
                            </td>   
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->client_forms_id}}</span>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->created_at}}</span>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->updated_at}}</span>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->created_by}}</span>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->updated_by}}</span>
                                </div>
                            </td>  
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->status}}</span>
                                </div>
                            </td>
                        </tr>
                        @endforeach 
                    
                    
                     
                    
                </table>
            </div>
        </div>
        <div class="submissions-footer">
            <p>Total: {{$submissions->count()}}</p>
        </div>
     </div>
         
        
        
        @endsection