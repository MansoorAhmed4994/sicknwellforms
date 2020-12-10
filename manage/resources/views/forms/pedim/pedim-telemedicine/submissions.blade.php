
 
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
                                    <span>DOB</span>
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
                                    <span>Description</span>
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
                                    <span>First Name</span>
                                </div>
                            </th> 
                            <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>Middle Name</span>
                                </div>
                            </th> 
                            <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>Last Name</span>
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
                                    <span>Email</span>
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
                                    <span>IS PATIENT MINOR</span>
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
                                    <span>RESPONSIBLE PART</span>
                                </div>
                            </th>
                            
                            <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>SUBSCRIBER</span>
                                </div>
                            </th>
                            
                            <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>TELEPHONE</span>
                                </div>
                            </th>
                            
                            <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>EMAIL</span>
                                </div>
                            </th>
                            
                            <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>PRIMARY INSURANCE COMPANY</span>
                                </div>
                            </th>
                            
                            <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>SECONDARY INSURANCE COMPANY</span>
                                </div>
                            </th>
                            
                            <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>P.ACCEPT FINANCIAL POLICY</span>
                                </div>
                            </th>
                            
                            <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>FP.DATE</span>
                                </div>
                            </th>
                            
                            <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>ACCEPT CONSENT FOR TREATMENT</span>
                                </div>
                            </th>
                            
                            <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>CFT DATE</span>
                                </div>
                            </th>
                            
                            <th>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>HEAR ABOUT US</span>
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
                                    <span><a href="{{route('PedimTelemedicine.edit',$row->id)}}">Edit</a></span>
                                </div>
                            </td> 
                            <td>
                                <div class="d-flex align-items-center">  
                                    <span><a href="{{route('PedimTelemedicine.create.zoom.meeting',$row->id)}}">Create Meeting</a></span>
                                </div>
                            </td> 
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->id}}</span>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->visit_type}}</span>
                                </div>
                            </td>  
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->description_of_issue}}</span>
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
                                    <span>{{ $row->appointment_date }}</span>
                                </div>
                            </td> 

                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->patient_fname}}</span>
                                </div>
                            </td>  
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->patient_mname}}</span>
                                </div>
                            </td>  
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->patient_lname}}</span>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->telephone}}</span>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->email}}</span>
                                </div>
                            </td>  

                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->guardian_fname}}</span>
                                </div>
                            </td>  
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->guardian_mname}}</span>
                                </div>
                            </td>    
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->guardian_lname}}</span>
                                </div>
                            </td> 
                              
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->dob}}</span>
                                </div>
                            </td>  
                            
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->is_patient_minor}}</span>
                                </div>
                            </td> 

                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->symptoms}}</span>
                                </div>
                            </td>
                            
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->responsible_party_name}}</span>
                                </div>
                            </td>  
                            
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->insurance_subscriber}}</span>
                                </div>
                            </td> 

                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->relation_patient}}</span>
                                </div>
                            </td>  
                            
                             
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->insurance_telephone}}</span>
                                </div>
                            </td> 
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->insurance_email}}</span>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->primary_insurance_company}}</span>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->patient_secondary_insurance_company}}</span>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->secondary_insurance_company}}</span>
                                </div>
                            </td>

                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->accept_financial_policy}}</span>
                                </div>
                            </td>

                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->fp_date}}</span>
                                </div>
                            </td>

                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->accept_consent_for_treatment}}</span>
                                </div>
                            </td>
                            
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->cft_date}}</span>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->hear_about_us}}</span>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center"> 
                                    <span>{{ $row->client_forms_id}}</span>
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