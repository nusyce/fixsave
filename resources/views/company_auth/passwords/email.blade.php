@extends('layouts.app')
@section('content')
<!-- Header start -->
@include('includes.header')
<!-- Header end --> 
<!-- Inner Page Title start -->
@include('includes.inner_page_title', ['page_title'=>'Passwort zurücksetzten'])
<!-- Inner Page Title end -->
{{--<div class="listpgWraper">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                   --}}{{-- <div class="panel-heading">{{__('Passwort zurücksetzten')}}</div>--}}{{--
                    <div class="panel-body">
                        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @endif
                        <form class="form-horizontal" method="POST" action="{{ route('company.password.email') }}">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label" style="margin-bottom: 14px;font-size: 20px;">{{__('Email Address')}}</label>
                                <div class="col-md-6">
                                    <input id="email" placeholder='E-Mail' type="email" class="form-control" name="email"   required>
                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{__('Passwortlink anfordern')}}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>--}}
<div class="listpgWraper" >
    <div class="userccount" style="width: 600px;position: relative;left: 350px;" >


        <div class="tab-content">
            <div class="formpanel" >
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                {{-- <div class="socialLogin">
                             <h5>{{__('Login with Social')}}</h5>
                             <a href="{{ url('login/jobseeker/facebook')}}" class="fb"><i class="fa fa-facebook" aria-hidden="true"></i></a><a href="{{ url('login/jobseeker/twitter')}}" class="tw"><i class="fa fa-twitter" aria-hidden="true"></i></a> </div>--}}
                <form class="form-horizontal" method="POST" action="{{ route('password') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="candidate_or_employer" value="candidate" />
                    <div class="formpanel">
                        <div class="formrow{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input style="margin-bottom:14px;" id="email" type="email" class="form-control" name="email" required autofocus placeholder="{{__('E-Mail')}}">
                            @if ($errors->has('email'))
                                <span class="help-block"  style="color: #ea5c90;">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                            @endif
                        </div>

                        <input type="submit" class="btn" value="{{__('anfordern')}}">
                    </div>
                    <!-- login form  end-->
                </form>
                <!-- sign up form -->
               <!-- sign up form end-->
            </div>

        </div>
        <!-- login form -->



    </div>
</div>
@include('includes.footer')
@endsection
