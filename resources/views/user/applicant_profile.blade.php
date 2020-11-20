@extends('layouts.app')
@section('content') 
<!-- Header start --> 
@include('includes.header') 
<!-- Header end --> 
<!-- Inner Page Title start --> 
@include('includes.inner_page_title', ['page_title'=>__($page_title)]) 
<!-- Inner Page Title end -->
<div class="listpgWraper">
    <div class="container">  
        @include('flash::message')  
        

        <!-- Job Detail start -->
        <div class="row">
            <div class="col-md-8"> 
				
				<!-- Job Header start -->
        <div class="job-header">
            <div class="jobinfo">
                
                   
                        <!-- Candidate Info -->
                        <div class="candidateinfo">
                            <div class="userPic">{{$user->printUserImage()}}</div>
                            <div class="title">
                                {{$user->getName()}}
                                @if((bool)$user->is_immediate_available)
                                <sup style="font-size:12px; color:#090;">{{__('Sofort verfügbar')}}</sup>
                                @endif
                            </div>
                            <div class="desi">{{$user->getLocation()}}</div>
                            <div class="loctext"><i class="fa fa-history" aria-hidden="true"></i> {{__('Mitglied seit')}}, {{$user->created_at->format('M d, Y')}}</div>
                            
                            <div class="clearfix"></div>
                        </div>
                    
                    
                                 
                   
                
            </div>

            <!-- Buttons -->
            <div class="jobButtons">
                @if(isset($job) && isset($company))
                @if(Auth::guard('company')->check() && Auth::guard('company')->user()->isFavouriteApplicant($user->id, $job->id, $company->id))
                <a href="{{route('remove.from.favourite.applicant', [$job_application->id, $user->id, $job->id, $company->id])}}" class="btn"><i class="fa fa-floppy-o" aria-hidden="true"></i> {{__('Short Listed Applicant')}} </a>
                @else
                <a href="{{route('add.to.favourite.applicant', [$job_application->id, $user->id, $job->id, $company->id])}}" class="btn"><i class="fa fa-floppy-o" aria-hidden="true"></i> {{__('Short List This Applicant')}}</a>
                @endif
                @endif

                @if(null !== $profileCv)<a href="{{asset('cvs/'.$profileCv->cv_file)}}" class="btn"><i class="fa fa-download" aria-hidden="true"></i> {{__('Lebenslauf herunterladen')}}</a>@endif
              {{--  <a href="javascript:;" onclick="send_message()" class="btn"><i class="fa fa-envelope" aria-hidden="true"></i> {{__('Nachricht senden')}}</a>--}}

            </div>
        </div>
				
				
				
				
                <!-- About Employee start -->
                <div class="job-header">
                    <div class="contentbox">
                        <h3>{{__('Über mich')}}</h3>
                        <p>{{$user->getProfileSummary('summary')}}</p>
                    </div>
                </div>

                <!-- Education start -->
                <div class="job-header">
                    <div class="contentbox">
                        <h3>{{__('Bildung')}}</h3>
                        <div class="" id="education_div"></div>            
                    </div>
                </div>

                <!-- Experience start -->
                <div class="job-header">
                    <div class="contentbox">
                        <h3>{{__('Erfahrung')}}</h3>
                        <div class="" id="experience_div"></div>            
                    </div>
                </div>

                <!-- Portfolio start -->
                <div class="job-header">
                    <div class="contentbox">
                        <h3>{{__('Geschäftsbereich')}}</h3>
                        <div class="" id="projects_div"></div>            
                    </div>
                </div>
            </div>
            <div class="col-md-4"> 
				
				 <!-- Candidate Contact -->
				<div class="job-header">
					<div class="jobdetail">
                        <h3>{{__('Kontakt')}}</h3>
                        <div class="candidateinfo">            
                            @if(!empty($user->Telefonnummer))
                            <div class="loctext"><i class="fa fa-Telefonnummer" aria-hidden="true"></i> <a href="tel:{{$user->Telefonnummer}}">{{$user->Telefonnummer}}</a></div>
                            @endif
                            @if(!empty($user->mobile_num))
                            <div class="loctext"><i class="fa fa-Telefonnummer" aria-hidden="true"></i> <a href="tel:{{$user->mobile_num}}">{{$user->mobile_num}}</a></div>
                            @endif
                            @if(!empty($user->email))
                            <div class="loctext"><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:{{$user->email}}">{{$user->email}}</a></div>
                            @endif
							<div class="loctext"><i class="fa fa-map-marker" aria-hidden="true"></i> {{$user->street_address}}</div>
                        </div>  
					</div>
				</div>
				
				
                <!-- Candidate Detail start -->
                <div class="job-header">
                    <div class="jobdetail">
                        <h3>{{__('Kandidat Detail')}}</h3>
                        <ul class="jbdetail">

                            <li class="row">
                                <div class="col-md-6 col-xs-6">{{__('E-Mail verifiziert')}}</div>
                                <div class="col-md-6 col-xs-6"><span>{{((bool)$user->verified)? 'Ja':'Nein'}}</span></div>
                            </li>
                            <li class="row">
                                <div class="col-md-6 col-xs-6">{{__('Sofort verfügbar')}}</div>
                                <div class="col-md-6 col-xs-6"><span>{{((bool)$user->is_immediate_available)? 'Ja':'Nein'}}</span></div>
                            </li>

                            <li class="row">
                                <div class="col-md-6 col-xs-6">{{__('Alter')}}</div>
                                <div class="col-md-6 col-xs-6"><span>{{$user->getAge()}} Jahre</span></div>
                            </li>
                            <li class="row">
                                <div class="col-md-6 col-xs-6">{{__('Geschlecht')}}</div>
                                <div class="col-md-6 col-xs-6"><span>{{$user->getGender('gender')}}</span></div>
                            </li>
                            <li class="row">
                                <div class="col-md-6 col-xs-6">{{__('Famillienstand')}}</div>
                                <div class="col-md-6 col-xs-6"><span>{{$user->getMaritalStatus('marital_status')}}</span></div>
                            </li>
                            <li class="row">
                                <div class="col-md-6 col-xs-6">{{__('Erfahrung')}}</div>
                                <div class="col-md-6 col-xs-6"><span>{{$user->getJobExperience('job_experience')}}</span></div>
                            </li>
                            <li class="row">
                                <div class="col-md-6 col-xs-6">{{__('Karriere Level')}}</div>
                                <div class="col-md-6 col-xs-6"><span>{{$user->getCareerLevel('career_level')}}</span></div>
                            </li>             
                            <li class="row">
                                <div class="col-md-6 col-xs-6">{{__('Aktuelles Gehalt')}}</div>
                                <div class="col-md-6 col-xs-6"><span class="permanent">{{$user->current_salary}} {{$user->salary_currency}}</span></div>
                            </li>
                            <li class="row">
                                <div class="col-md-6 col-xs-6">{{__('Erwartetes Gehalt')}}</div>
                                <div class="col-md-6 col-xs-6"><span class="freelance">{{$user->expected_salary}} {{$user->salary_currency}}</span></div>
                            </li>              
                        </ul>
                    </div>
                </div>

                <!-- Google Map start -->
                <div class="job-header">
                    <div class="jobdetail">
                        <h3>{{__('Fertigkeiten')}}</h3>
                        <div id="skill_div"></div>            
                    </div>
                </div>

                <div class="job-header">
                    <div class="jobdetail">
                        <h3>{{__('Sprachen')}}</h3>
                        <div id="language_div"></div>            
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="sendmessage" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <form action="" id="send-form">
                @csrf
                <input type="hidden" name="seeker_id" id="seeker_id" value="{{$user->id}}">
                <div class="modal-header">                    
                    <h4 class="modal-title">Nachricht senden</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <textarea class="form-control" name="message" id="message" cols="10" rows="7"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">registrieren</button>
                </div>
            </form>
        </div>

    </div>
</div>
@include('includes.footer')
@endsection
@push('styles')
<style type="text/css">
    .formrow iframe {
        height: 78px;
    }
</style>
@endpush
@push('scripts') 
<script type="text/javascript">
    $(document).ready(function () {
    $(document).on('click', '#send_applicant_message', function () {
    var postData = $('#send-applicant-message-form').serialize();
    $.ajax({
    type: 'POST',
            url: "{{ route('contact.applicant.message.send') }}",
            data: postData,
            //dataType: 'json',
            success: function (data)
            {
            response = JSON.parse(data);
            var res = response.success;
            if (res == 'success')
            {
            var errorString = '<div role="alert" class="alert alert-success">' + response.message + '</div>';
            $('#alert_messages').html(errorString);
            $('#send-applicant-message-form').hide('slow');
            $(document).scrollTo('.alert', 2000);
            } else
            {
            var errorString = '<div class="alert alert-danger" role="alert"><ul>';
            response = JSON.parse(data);
            $.each(response, function (index, value)
            {
            errorString += '<li>' + value + '</li>';
            });
            errorString += '</ul></div>';
            $('#alert_messages').html(errorString);
            $(document).scrollTo('.alert', 2000);
            }
            },
    });
    });
    showEducation();
    showProjects();
    showExperience();
    showSkills();
    showLanguages();
    });
    function showProjects()
    {
    $.post("{{ route('show.applicant.profile.projects', $user->id) }}", {user_id: {{$user->id}}, _method: 'POST', _token: '{{ csrf_token() }}'})
            .done(function (response) {
            $('#projects_div').html(response);
            });
    }
    function showExperience()
    {
    $.post("{{ route('show.applicant.profile.experience', $user->id) }}", {user_id: {{$user->id}}, _method: 'POST', _token: '{{ csrf_token() }}'})
            .done(function (response) {
            $('#experience_div').html(response);
            });
    }
    function showEducation()
    {
    $.post("{{ route('show.applicant.profile.education', $user->id) }}", {user_id: {{$user->id}}, _method: 'POST', _token: '{{ csrf_token() }}'})
            .done(function (response) {
            $('#education_div').html(response);
            });
    }
    function showLanguages()
    {
    $.post("{{ route('show.applicant.profile.languages', $user->id) }}", {user_id: {{$user->id}}, _method: 'POST', _token: '{{ csrf_token() }}'})
            .done(function (response) {
            $('#language_div').html(response);
            });
    }
    function showSkills()
    {
    $.post("{{ route('show.applicant.profile.skills', $user->id) }}", {user_id: {{$user->id}}, _method: 'POST', _token: '{{ csrf_token() }}'})
            .done(function (response) {
            $('#skill_div').html(response);
            });
    }

    function send_message() {
        const el = document.createElement('div')
        el.innerHTML = "Please <a class='btn' href='{{route('login')}}' onclick='set_session()'>log in</a> as a Employer and try again."
        @if(null!==(Auth::guard('company')->user()))
        $('#sendmessage').modal('show');
        @else
        swal({
            title: "You are not Loged in",
            content: el,
            icon: "error",
            button: "OK",
        });
        @endif
    }
    if ($("#send-form").length > 0) {
        $("#send-form").validate({
            validateHiddenInputs: true,
            ignore: "",

            rules: {
                message: {
                    required: true,
                    maxlength: 5000
                },
            },
            messages: {

                message: {
                    required: "Message is required",
                }

            },
            submitHandler: function(form) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                @if(null !== (Auth::guard('company')->user()))
                $.ajax({
                    url: "{{route('submit-message-seeker')}}",
                    type: "POST",
                    data: $('#send-form').serialize(),
                    success: function(response) {
                        $("#send-form").trigger("reset");
                        $('#sendmessage').modal('hide');
                        swal({
                            title: "Success",
                            text: response["msg"],
                            icon: "success",
                            button: "OK",
                        });
                    }
                });
                @endif
            }
        })
    }
</script> 
@endpush
