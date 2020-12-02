
 
@extends((Auth::guard('clients')->check()) ? 'client.layouts.app' : 'layouts.app')


@section('content')
    <div class="modal login-modal" id="loginModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form> 
                    <input type="hidden" name="client_id" value="{{$client_id}}" id="client_id">
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
                        <input class="btn btn-primary" type="button" id="check_credentials" name="check_credentials" value="Submit">
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
                                    <span>Patient F.Name</span>
                                </div>
                            </th> 
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>Patient M.Name</span>
                                </div>
                            </th> 
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>Patient L.Name</span>
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
                                    <span>Gender</span>
                                </div>
                            </th> 
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>DOB</span>
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
                                    <span>Adress 1</span>
                                </div>
                            </th> 
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>Address 2</span>
                                </div>
                            </th> 
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>CITY</span>
                                </div>
                            </th> 
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>STATE</span>
                                </div>
                            </th> 
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>ZIP CODE</span>
                                </div>
                            </th>  
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>VISIT TYPE</span>
                                </div>
                            </th> 
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>DESCRIPTION</span>
                                </div>
                            </th> 
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>APPOINTMENT FROM</span>
                                </div>
                            </th> 
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>APPOINTMENT TO</span>
                                </div>
                            </th> 
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>APPOINTMENT DATE</span>
                                </div>
                            </th>
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>IS PATIENT MINOR</span>
                                </div>
                            </th> 
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>PARENT GUARDIAN</span>
                                </div>
                            </th> 
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>RELATION TO PATIENT</span>
                                </div>
                            </th> 
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>EMPLOYER OCCUPATION</span>
                                </div>
                            </th> 
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>QCARD NUMBER</span>
                                </div>
                            </th> 
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>PAYMENT OPTION</span>
                                </div>
                            </th> 
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>MEMBERSHIP TYPE</span>
                                </div>
                            </th> 
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>CC FIRST NAME</span>
                                </div>
                            </th> 
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>CC LAST NAME</span>
                                </div>
                            </th> 
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>CC NUMBER</span>
                                </div>
                            </th> 
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>CC CVC</span>
                                </div>
                            </th> 
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>CC EXPIRATION</span>
                                </div>
                            </th> 
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>CLIENT FORMS ID</span>
                                </div>
                            </th> 
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>CREATED AT</span>
                                </div>
                            </th> 
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>CREATED BY</span>
                                </div>
                            </th> 
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>UPDATED AT</span>
                                </div>
                            </th> 
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>UPDATED BY</span>
                                </div>
                            </th> 
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>STATUS</span>
                                </div>
                            </th> 
                                                         
                        
                        
                        <!---->
                        <!--<tr>-->
                        <!---->
                        <!--    <th>-->
                        <!--        <div class="d-flex align-items-center">-->
                        <!--            <i class="fas fa-calendar-alt"></i>-->
                        <!--            <span>id</span>-->
                        <!--        </div>-->
                        <!--    </th> -->
                        <!--     -->
                        
                            
                        
                        
                        
                        
                        
                       
                        
                        
                        
                        
                        
                            
                    </tr>





 
                        
                        
                         @foreach($submissions as $row) 
                        <tr>  
                            <td>
                                <div class="d-flex align-items-center">  
                                    <span><a href="{{route('edit-QcmTelemedicineForm',$row->id)}}">Edit</a></span>
                                </div>
                            </td> 
                            <td>
                                <div class="d-flex align-items-center">  
                                    <span><a href="{{route('QcmTelemedicineForm.create.zoom.meeting',$row->id)}}">Create Meeting</a></span>
                                </div>
                            </td> 
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->id}}</span>
                                </div>
                            </td> 
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->patient_first_name}}</span>
                                </div>
                            </td>  
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->patient_middle_name}}</span>
                                </div>
                            </td>  
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->patient_last_name}}</span>
                                </div>
                            </td>  
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->telephone}}</span>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->gender}}</span>
                                </div>
                            </td>  
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->dob}}</span>
                                </div>
                            </td>    
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->email}}</span>
                                </div>
                            </td> 
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->address1}}</span>
                                </div>
                            </td>  
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->address2}}</span>
                                </div>
                            </td>  
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->city}}</span>
                                </div>
                            </td>  
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->state}}</span>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->zip_code}}</span>
                                </div>
                            </td>
                            
                            
                            
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->visit_type }}</span>
                                </div>
                            </td>  
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->description}}</span>
                                </div>
                            </td>  
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->appointment_from }}</span>
                                </div>
                            </td>  
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->appointment_to}}</span>
                                </div>
                            </td>  
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->appointment_date}}</span>
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
                                    <span>{{ $row->relation_to_patient}}</span>
                                </div>
                            </td> 
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->employer_occupation}}</span>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->qcard_number}}</span>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->payment_option}}</span>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->membership_type}}</span>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->cc_first_name}}</span>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->cc_last_name}}</span>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->cc_number}}</span>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->cc_cvc}}</span>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->cc_expiration}}</span>
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
                                    <span>{{ $row->created_by}}</span>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->updated_at}}</span>
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