@extends('layouts.app')

@section('content')

    <!-- Header start -->

    @include('includes.header')

    <!-- Header end -->

    <!-- Inner Page Title start -->

    @include('includes.inner_page_title', ['page_title'=>__('Register')])

    <!-- Inner Page Title end -->

    <div class="listpgWraper">

        <div class="container">

            @include('flash::message')

<h2 style="text-align: center;margin-bottom: 30px;">REGISTRIERUNG</h2>
            <div class="useraccountwrap">

                <div class="userccount">

                    <div class="userbtns">

                        <ul class="nav nav-tabs">

                            <?php

                            $c_or_e = old('candidate_or_employer', 'candidate');

                            ?>

                            <li class="nav-item"><a class="nav-link {{($c_or_e == 'candidate')? 'active':''}}"
                                                    data-toggle="tab" href="#candidate"
                                                    aria-expanded="true">{{__('Bewerber')}}</a></li>

                            <li class="nav-item"><a class="nav-link {{($c_or_e == 'employer')? 'active':''}}"
                                                    data-toggle="tab" href="#employer"
                                                    aria-expanded="false">{{__('Firma')}}</a></li>

                        </ul>

                    </div>

                    <div class="tab-content">

                        <div id="candidate" class="formpanel tab-pane {{($c_or_e == 'candidate')? 'active':''}}">

                            <form class="form-horizontal" method="POST" action="{{ route('register') }}">

                                {{ csrf_field() }}

                                <input type="hidden" name="candidate_or_employer" value="candidate"/>

                                <div class="formrow{{ $errors->has('first_name') ? ' has-error' : '' }}">

                                    <input type="text" name="first_name" class="form-control" required="required"
                                           placeholder="{{__('First Name')}}" value="{{old('first_name')}}">

                                    @if ($errors->has('first_name')) <span
                                            class="help-block"> <strong>{{ $errors->first('first_name') }}</strong> </span> @endif
                                </div>

                                <div class="formrow{{ $errors->has('middle_name') ? ' has-error' : '' }}">

                                    <input type="text" name="middle_name" class="form-control"
                                           placeholder="{{__('Middle Name')}}" value="{{old('middle_name')}}">

                                    @if ($errors->has('middle_name')) <span
                                            class="help-block"> <strong>{{ $errors->first('middle_name') }}</strong> </span> @endif
                                </div>

                                <div class="formrow{{ $errors->has('last_name') ? ' has-error' : '' }}">

                                    <input type="text" name="last_name" class="form-control" required="required"
                                           placeholder="{{__('Last Name')}}" value="{{old('last_name')}}">

                                    @if ($errors->has('last_name')) <span
                                            class="help-block"> <strong>{{ $errors->first('last_name') }}</strong> </span> @endif
                                </div>

                                <div class="formrow{{ $errors->has('email') ? ' has-error' : '' }}">

                                    <input type="email" name="email" class="form-control" required="required"
                                           placeholder="{{__('Email')}}" value="{{old('email')}}">

                                    @if ($errors->has('email')) <span
                                            class="help-block"> <strong>{{ $errors->first('email') }}</strong> </span> @endif
                                </div>

                                <div class="formrow{{ $errors->has('password') ? ' has-error' : '' }}">

                                    <input type="password" name="password" class="form-control" required="required"
                                           placeholder="{{__('Password')}}" value="">

                                    @if ($errors->has('password')) <span
                                            class="help-block"> <strong>{{ $errors->first('password') }}</strong> </span> @endif
                                </div>

                                <div class="formrow{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">

                                    <input type="password" name="password_confirmation" class="form-control"
                                           required="required" placeholder="{{__('Password Confirmation')}}" value="">

                                    @if ($errors->has('password_confirmation')) <span
                                            class="help-block"> <strong>{{ $errors->first('password_confirmation') }}</strong> </span> @endif
                                </div>


                                <div class="formrow{{ $errors->has('is_subscribed') ? ' has-error' : '' }}">

                                    <?php

                                    $is_checked = '';

                                    if (old('is_subscribed', 1)) {

                                        $is_checked = 'checked="checked"';

                                    }

                                    ?>


                                    <input type="checkbox" value="1"
                                           name="is_subscribed" {{$is_checked}} />{{__('Newsletter abonnieren')}}

                                    @if ($errors->has('is_subscribed')) <span
                                            class="help-block"> <strong>{{ $errors->first('is_subscribed') }}</strong> </span> @endif
                                </div>


                                <div class="formrow{{ $errors->has('terms_of_use') ? ' has-error' : '' }}">

                                    <input type="checkbox" value="1" name="terms_of_use"/>

                                    <a href="{{url('cms/terms-of-use')}}">{{__('I accept Terms of Use')}}</a>


                                    @if ($errors->has('terms_of_use')) <span
                                            class="help-block"> <strong>{{ $errors->first('terms_of_use') }}</strong> </span> @endif
                                </div>


                                <input type="submit" class="btn" value="{{__('Register')}}">

                            </form>

                        </div>

                        <div id="employer" class="formpanel tab-pane fade {{($c_or_e == 'employer')? 'active':''}}">

                            <form class="form-horizontal" method="POST" action="{{ route('company.register') }}">

                                {{ csrf_field() }}

                                <input type="hidden" name="candidate_or_employer" value="employer"/>


                                <div class="formrow">

                                    <input type="text" name="firma" class="form-control" required="required"
                                           placeholder="{{__('Firma')}}">

                                </div>

                                <label style="margin-bottom: 20px;margin-left:10px;font-size: 16px;"> <u> Ansprechpartner </u></label>
                                <br>

                                <div class="form-group" style="display: flex;flex-direction: row">
                                <div style="margin-right: 65px;margin-left:10px;"> <label style="font-size: 16px;">  Geschlecht </label></div>
                                    <div style="margin-right: 65px;font-size: 16px;">
                                    <input type="radio" name="radio"   id="Herr" value="Herr" class="form-check-input" style="position: relative;bottom: 2px;">
                                    <label style="position: relative;bottom: 3px;" for="Herr" class="form-check-label">Herr </label>
                                    </div>

                                    <div style="margin-right: 65px;font-size: 16px;">
                                    <input type="radio" name="radio"   id="Frau" value="Frau" class="form-check-input" style="position: relative;bottom: 2px;">
                                    <label style="position: relative;bottom: 3px;" for="Frau" class="form-check-label">Frau </label>
                                    </div>
                                        <div style="margin-right: 65px;font-size: 16px;">
                                    <input type="radio" name="radio"   id="Divers" value="Divers" class="form-check-input" style="position: relative;bottom: 2px;">
                                    <label style="position: relative;bottom: 3px;" for="Divers"class="form-check-label">Divers </label>
                                        </div>
                                </div>


                                <div class="formrow{{ $errors->has('name') ? ' has-error' : '' }}">

                                    <input type="text" name="name" class="form-control" required="required"
                                           placeholder="{{__('Name')}}" value="{{old('name')}}">

                                    @if ($errors->has('name')) <span
                                            class="help-block"> <strong>{{ $errors->first('name') }}</strong> </span> @endif
                                </div>

                                <div class="formrow">

                                    <input type="text" name="vorname" class="form-control" required="required"
                                           placeholder="{{__('Vorname')}}" value="{{old('Vorname')}}">

                                </div>

                                <div class="formrow">

                                    <input type="text" name="land" class="form-control" required="required"
                                           placeholder="{{__('Land')}}" value="{{old('Land')}}">

                                </div>

                                <label style="margin-bottom: 20px;margin-left:10px;font-size: 16px;"> <u> Firmenadresse </u></label>
                                <br>

                                <div class="formrow">

                                    <input type="text" name="bundesland" class="form-control" required="required"
                                           placeholder="{{__('Bundesland')}}" >

                                </div>

                                <div class="formrow">

                                    <input type="text" name="plz" class="form-control" required="required"
                                           placeholder="{{__('Plz')}}"  >

                                </div>

                                <div class="formrow">

                                    <input type="text" name="stadt" class="form-control" required="required"
                                           placeholder="{{__('Stadt')}}" >

                                </div>

                                <div class="formrow">

                                    <input type="text" name="strabe" class="form-control" required="required"
                                           placeholder="{{__('Straße')}}" >

                                </div>

                                <div class="formrow">

                                    <input type="text" name="hausnummer" class="form-control" required="required"
                                           placeholder="{{__('Hausnummer')}}">

                                </div>

                                <label style="margin-bottom: 20px;margin-left:10px;font-size: 16px;"> <u> Kontakt </u></label>
                                <br>

                                <div class="formrow{{ $errors->has('email') ? ' has-error' : '' }}">

                                    <input type="email" name="email" class="form-control" required="required"
                                           placeholder="{{__('Email')}}" value="{{old('email')}}">

                                    @if ($errors->has('email')) <span
                                            class="help-block"> <strong>{{ $errors->first('email') }}</strong> </span> @endif
                                </div>

                                <div class="formrow">

                                    <input type="text" name="telefon" class="form-control" required="required"
                                           placeholder="{{__('Telefon')}}">

                                </div>

                                <label style="margin-bottom: 20px;margin-left:10px;font-size: 16px;"> <u> Passwort </u></label>
                                <br>

                                <div class="formrow{{ $errors->has('password') ? ' has-error' : '' }}">

                                    <input type="password" name="password" class="form-control" required="required"
                                           placeholder="{{__('Dein Passwort')}}" value="">

                                    @if ($errors->has('password')) <span
                                            class="help-block"> <strong>{{ $errors->first('password') }}</strong> </span> @endif
                                </div>

                                <div class="formrow{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">

                                    <input type="password" name="password_confirmation" class="form-control"
                                           required="required" placeholder="{{__('Passwort bestätigen')}}" value="">

                                    @if ($errors->has('password_confirmation')) <span
                                            class="help-block"> <strong>{{ $errors->first('password_confirmation') }}</strong> </span> @endif
                                </div>

                                <div class="formrow{{ $errors->has('terms_of_use') ? ' has-error' : '' }}">

                                    <input type="checkbox" value="1" name="terms_of_use" checked=""/>

                                    Ich akzeptiere die Flixsave24 <a href="{{url('terms-of-use')}}"> <span style="color: blue;text-decoration: underline">AGB </span></a>


                                    @if ($errors->has('terms_of_use')) <span
                                            class="help-block"> <strong>{{ $errors->first('terms_of_use') }}</strong> </span> @endif
                                </div>


                                <div class="formrow">

                                    <input type="checkbox" value="1" name="terms_of_use" />

                                   Ich habe die  <a href="#"> <span style="color: blue;text-decoration: underline">Datenschutzbestimmung </span> </a>gelesen

                                </div>

                                 <div class="formrow{{ $errors->has('is_subscribed') ? ' has-error' : '' }}">

                                    <?php

                                    $is_checked = '';

                                    if (old('is_subscribed', 1)) {

                                        $is_checked = 'checked="checked"';

                                    }

                                    ?>


                                    <input type="checkbox" value="1"
                                           name="is_subscribed"  /> Ich  den Flixsave24 Newsletter erhalten

                                    @if ($errors->has('is_subscribed')) <span
                                            class="help-block"> <strong>{{ $errors->first('is_subscribed') }}</strong> </span> @endif
                                </div>




                                <input type="submit" class="btn" value="{{__('Jetzt registrieren')}}">

                            </form>

                        </div>

                    </div>

                    <!-- sign up form -->

                    <div class="newuser"><i class="fa fa-user" aria-hidden="true"></i> {{__('Du hast einen Account')}}? <a
                                href="{{route('login')}}">{{__('Jetzt einloggen')}}</a></div>

                    <!-- sign up form end-->


                </div>

            </div>


        </div>

    </div>

    @include('includes.footer')

@endsection 