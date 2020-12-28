 
 
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
                                    <span>Provider Name</span>
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
                                    <span>Fax</span>
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
                                    <span>Contact Person</span>
                                </div>
                            </th> 
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>Facility Name</span>
                                </div>
                            </th> 
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>Address</span>
                                </div>
                            </th> 
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>2nd Address</span>
                                </div>
                            </th>  
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>City</span>
                                </div>
                            </th> 
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>State</span>
                                </div>
                            </th> 
                            <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>Zip</span>
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
                                    <span>Dob</span>
                                </div>
                            </th> 
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>Phone</span>
                                </div>
                            </th> 
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>Alternate Phone</span>
                                </div>
                            </th>  
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>Email Patient</span>
                                </div>
                            </th> 
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>Patient's Address</span>
                                </div>
                            </th>
                            <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>Patient's 2nd Address</span>
                                </div>
                            </th> 
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>Patient's City</span>
                                </div>
                            </th> 
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>Patient's State</span>
                                </div>
                            </th> 
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>Patient's Zip</span>
                                </div>
                            </th> 
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>Height</span>
                                </div>
                            </th>  
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>Weight</span>
                                </div>
                            </th> 
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>Neck Size</span>
                                </div>
                            </th>
                            <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>Card Front</span>
                                </div>
                            </th> 
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>Card Back</span>
                                </div>
                            </th>  
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>Symptoms</span>
                                </div>
                            </th> 
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>Oxygen</span>
                                </div>
                            </th>
                            <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>LPM</span>
                                </div>
                            </th> 
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>Diagnostic Codes</span>
                                </div>
                            </th> 
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>Sleep Testing</span>
                                </div>
                            </th> 
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>Comment</span>
                                </div>
                            </th> 
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>Physician Name</span>
                                </div>
                            </th>  
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>Signature</span>
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
                                    <span>created_at</span>
                                </div>
                            </th>   
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>updated_at</span>
                                </div>
                            </th>  
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>created_by</span>
                                </div>
                            </th>  
                                                        <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>updated_by</span>
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
                                    <span><a href="{{route('MhstMedicalReferralForm.edit',$row->id)}}">Edit</a></span>
                                </div>
                            </td> 
                            <td>
                                <div class="d-flex align-items-center">  
                                    <span><a href="{{route('MhstMedicalReferralForm.create.zoom.meeting',$row->id)}}">Create Meeting</a></span>
                                </div>
                            </td> 
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->id}}</span>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->provider_name}}</span>
                                </div>
                            </td>  
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->telephone}}</span>
                                </div>
                            </td>  
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->fax}}</span>
                                </div>
                            </td>  
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->email}}</span>
                                </div>
                            </td>  
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->contact_person}}</span>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->facility_name}}</span>
                                </div>
                            </td>  
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->address}}</span>
                                </div>
                            </td> 
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->address_2}}</span>
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
                                    <span>{{ $row->zip}}</span>
                                </div>
                            </td>  
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->patient_name}}</span>
                                </div>
                            </td> 
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->dob}}</span>
                                </div>
                            </td>  
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->phone}}</span>
                                </div>
                            </td>  
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->alternate_phone}}</span>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->email_patient}}</span>
                                </div>
                            </td>  
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->address_patient}}</span>
                                </div>
                            </td> 
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->address_2_patient}}</span>
                                </div>
                            </td>  
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->city_patient}}</span>
                                </div>
                            </td>  
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->state_patient}}</span>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->zip_patient}}</span>
                                </div>
                            </td>  
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->height}}</span>
                                </div>
                            </td> 
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->weight}}</span>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->neck_size}}</span>
                                </div>
                            </td>  
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->card_front}}</span>
                                </div>
                            </td>  
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->card_back}}</span>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->symptoms}}</span>
                                </div>
                            </td>  
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->oxygen}}</span>
                                </div>
                            </td> 
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->lpm}}</span>
                                </div>
                            </td>  
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->diagnostic_codes}}</span>
                                </div>
                            </td>  
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->sleep_testing}}</span>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->comment}}</span>
                                </div>
                            </td>  
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->physician_name}}</span>
                                </div>
                            </td> 
                            <td>
                                <div class="d-flex align-items-center">
                                <img src="{{asset('manage/storage/'.$row->signature)}}" class="img-fluid"> 
                                    
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