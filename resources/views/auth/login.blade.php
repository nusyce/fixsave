@extends('layouts.app')
@section('content')
<!-- Header start -->
@include('includes.header')
<!-- Header end --> 
<!-- Inner Page Title start -->
@include('includes.inner_page_title', ['page_title'=>__('Login')])
<!-- Inner Page Title end -->
<div class="listpgWraper">
    <div class="container">
        @include('flash::message')
       
            <div class="useraccountwrap">
                <div class="userccount">
                    <div class="userbtns">
                        <ul class="nav nav-tabs">
                            <?php
                            $c_or_e = old('candidate_or_employer', 'candidate');
                            ?>
                            <li class="nav-item"><a class="nav-link {{($c_or_e == 'candidate')? 'active':''}}" data-toggle="tab" href="#candidate" aria-expanded="true">{{__('Bewerber')}}</a></li>
                            <li class="nav-item"><a class="nav-link {{($c_or_e == 'employer')? 'active':''}}" data-toggle="tab" href="#employer" aria-expanded="false">{{__('Firma')}}</a></li>
                        </ul>
                    </div>
					
					
                    <div class="tab-content">
                        <div id="candidate" class="formpanel tab-pane {{($c_or_e == 'candidate')? 'active':''}}">
                           {{-- <div class="socialLogin">
                                        <h5>{{__('Login with Social')}}</h5>
                                        <a href="{{ url('login/jobseeker/facebook')}}" class="fb"><i class="fa fa-facebook" aria-hidden="true"></i></a><a href="{{ url('login/jobseeker/twitter')}}" class="tw"><i class="fa fa-twitter" aria-hidden="true"></i></a> </div>--}}
                            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}
                                <input type="hidden" name="candidate_or_employer" value="candidate" />
                                <div class="formpanel">
                                    <div class="formrow{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <input style="margin-bottom:14px;" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="{{__('E-Mail-Addresse')}}">
                                        @if ($errors->has('email'))
                                        <span class="help-block"  style="color: #ea5c90;">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="formrow{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <input style="margin-bottom:14px;" id="password" type="password" class="form-control" name="password" value="" required placeholder="{{__('Passwort')}}">
                                        @if ($errors->has('password'))
                                        <span class="help-block"  style="color: #ea5c90;">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>            
                                    <input type="submit" class="btn" value="{{__('Anmelden')}}">
                                </div>
                                <!-- login form  end--> 
                            </form>
                            <!-- sign up form -->
                    <div class="newuser"><i class="fa fa-user" aria-hidden="true"></i> {{__('Neuer Benutzer')}}? <a href="{{route('register')}}">{{__('Hier registrieren')}}</a></div>
                    <div class="newuser"><i class="fa fa-user" aria-hidden="true"></i> {{__('Haben Sie Ihr Passwort vergessen')}}? <a href="{{ route('password.request') }}">{{__('Hier zurücksetzten')}}</a></div>
                    <!-- sign up form end-->
                        </div>
                        <div id="employer" class="formpanel tab-pane fade {{($c_or_e == 'employer')? 'active':''}}">
                           {{-- <div class="socialLogin">
                                        <h5>{{__('Login with Social')}}</h5>
                                        <a href="{{ url('login/employer/facebook')}}" class="fb"><i class="fa fa-facebook" aria-hidden="true"></i></a> <a href="{{ url('login/employer/twitter')}}" class="tw"><i class="fa fa-twitter" aria-hidden="true"></i></a> </div>--}}
                            <form class="form-horizontal" method="POST" action="{{ route('company.login') }}">
                                {{ csrf_field() }}
                                <input type="hidden" name="candidate_or_employer" value="employer" />
                                <div class="formpanel">
                                    <div class="formrow{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <input style="margin-bottom:14px;" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="{{__('E-Mail-Addresse')}}">
                                        @if ($errors->has('email'))
                                        <span class="help-block"  style="color: #ea5c90;">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="formrow{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <input style="margin-bottom:14px;" id="password" type="password" class="form-control" name="password" value="" required placeholder="{{__('Passwort')}}">
                                        @if ($errors->has('password'))
                                        <span class="help-block"  style="color: #ea5c90;">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>            
                                    <input type="submit" class="btn" value="{{__('Anmelden')}}">
                                </div>
                                <!-- login form  end--> 
                            </form>
                            <!-- sign up form -->
                    <div class="newuser"><i class="fa fa-user" aria-hidden="true"></i> {{__('Neuer Benutzer')}}? <a href="{{route('register')}}">{{__('Hier registrieren')}}</a></div>
                    <div class="newuser"><i class="fa fa-user" aria-hidden="true"></i> {{__('Haben Sie Ihr Passwort vergessen')}}? <a href="{{ route('company.password.request') }}">{{__('Hier zurücksetzten')}}</a></div>
                    <!-- sign up form end-->
                        </div>
                    </div>
                    <!-- login form -->

                     

                </div>
            </div>
        
    </div>
</div>
@include('includes.footer')
@endsection
