<div class="header">
    <div class="container">
        <div class="row" style="margin-bottom: 20px;">
            <div class="col-lg-2 col-md-12 col-12"> <a href="{{url('/')}}" class="logo"><!--<img src="{{ asset('/') }}sitesetting_images/thumb/{{ $siteSetting->site_logo }}" alt="{{ $siteSetting->site_name }}" />--><h2 id="titrebar">FlixSave24</h2></a>
                <div class="navbar-header navbar-light">
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#nav-main" aria-controls="nav-main" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="col-lg-5 offset-lg-5">
                <div class="row" id="languebar">
                    <div>

                            <ul style="display: flex;flex-direction: row;position: relative;left: 390px;">

                                <li style="color: #003A65;">
                                <?php $i=1; ?>
                                @foreach($siteLanguages as $siteLang)
                                    <li>{{--<a href="javascript:;" onclick="event.preventDefault(); document.getElementById('locale-form-{{$siteLang->iso_code}}').submit();"  style="color: #003A65;">--}}<?php echo strtoupper($siteLang->iso_code); ?>{{--</a>--}}
                                        <form id="locale-form-{{$siteLang->iso_code}}" action="{{ route('set.locale') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="locale" value="{{$siteLang->iso_code}}"/>
                                            <input type="hidden" name="return_url" value="{{url()->full()}}"/>
                                            <input type="hidden" name="is_rtl" value="{{$siteLang->is_rtl}}"/>
                                        </form>
                                    </li>
                                <?php  if($i == 1){ echo ''; } $i++; ?>
                                    @endforeach

                                    </li>
                            </ul>


                    </div>
                </div>
                <div class="row">
                    <div>

                        <nav>
                            <ul style="display: flex;flex-direction: row;">
                                @if(Auth::check())  <li><a href="{{ route('bewerbung') }}" class="nav-link" style="color: #003A65;"> <span class="material-icons" style="color: #C60C30;position: relative;top:6px;">assignment</span> Initiativbewerbung</a></li> @endif
                            <!-- <li><a href="{{ route('bewerbung') }}" class="nav-link" style="color: #003A65;"> <span class="material-icons" style="color: #C60C30;position: relative;top:6px;">assignment</span> Initiativbewerbung</a></li> -->
                                <li><a href="{{ route('my.favourite2.jobs') }}" class="nav-link" style="color: #003A65;"> <span class="material-icons" style="color: #C60C30;position: relative;top:6px;">star_rate</span>  Meine Merkliste</a></li>

                               @if(!Auth::user() && !Auth::guard('company')->user())
                                    <li><a href="{{route('login')}}" class="nav-link" style="color: #003A65;"> <span class="material-icons" style="color: #C60C30;position: relative;top:6px;">person</span> Mein Profil</a></li>
                                @endif


                            </ul>

                        </nav>
                    </div>

                </div>
            </div>

        </div>
        <div class="row" style="background-color: #003A65;">

                @if(!Auth::user() && !Auth::guard('company')->user())  <div class="col-lg-7 col-md-12 col-12">
                @else <div class="col-lg-9 col-md-12 col-12">
                @endif

           {{--  @if(Auth::check()) <div class="col-lg-9 col-md-12 col-12">@endif
            @if(!Auth::check())  <div class="col-lg-7 col-md-12 col-12"> @endif--}}

            <!-- Nav start -->
                <nav class="navbar navbar-expand-lg navbar-light">

                    <div class="navbar-collapse collapse" id="nav-main">
                        <ul class="navbar-nav ml-auto" >
                            <li class="nav-item {{ Request::url()}}"><a href="{{url('/companies')}}" class="nav-link" style="color: white">{{__('Unternehmen')}}</a> </li>
                            <li class="nav-item {{ Request::url() == route('blogs') ? 'active' : '' }}"><a href="{{url('/jobs')}}" class="nav-link" style="color: white">{{__('Für Bewerber')}}</a> </li>

                          {{--  {{ route('blogs') }} <li class="nav-item {{ Request::url() == route('index') ? 'active' : '' }}"><a href="{{url('/')}}" class="nav-link" style="color: white">{{__('Home')}}</a> </li>

--}}
                          {{--  @if(Auth::guard('company')->check())
                                <li class="nav-item"><a href="{{url('/job-seekers')}}" class="nav-link" style="color: white">{{__('Seekers')}}</a> </li>
                            @else
                                <li class="nav-item"><a href="{{url('/jobs')}}" class="nav-link" style="color: white">{{__('Jobs')}}</a> </li>
                            @endif
--}}
                            @foreach($show_in_top_menu as $top_menu) @php $cmsContent = App\CmsContent::getContentBySlug($top_menu->page_slug); @endphp
                            <li class="nav-item {{ Request::url() == route('cms', $top_menu->page_slug) ? 'active' : '' }}"><a href="{{ route('cms', $top_menu->page_slug) }}" class="nav-link" style="color: white">{{__('Über Flixsave24')}}</a> </li>
                            @endforeach
                           {{-- <li class="nav-item {{ Request::url() == route('bewerbung') ? 'active' : '' }}"><a href="{{ route('bewerbung') }}" class="nav-link" style="color: white">{{__('Initiative-Bewerbung')}}</a> </li>--}}

                            <li class="nav-item {{ Request::url() == route('contact.us') ? 'active' : '' }}"><a href="{{ route('contact.us') }}" class="nav-link" style="color: white">{{__('Kontaktdaten')}}</a> </li>
                            <li class="nav-item"><a href="#" class="nav-link" style="color: white">{{__('Standorte')}}</a> </li>

                        @if(Auth::check())
                                <li class="nav-item dropdown userbtn"><a href="">{{Auth::user()->printUserImage()}}</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="{{route('home')}}" class="nav-link"><i class="fa fa-tachometer" aria-hidden="true"></i> {{__('Übersetzung')}}</a> </li>
                                        <li class="nav-item"><a href="{{ route('my.profile') }}" class="nav-link"><i class="fa fa-user" aria-hidden="true"></i> {{__('Mein Profil')}}</a> </li>
                                        <li class="nav-item"><a href="{{ route('view.public.profile', Auth::user()->id) }}" class="nav-link"><i class="fa fa-eye" aria-hidden="true"></i> {{__('Öffentliches Profil anzeigen')}}</a> </li>
                                        <li><a href="{{ route('my.job.applications') }}" class="nav-link"><i class="fa fa-desktop" aria-hidden="true"></i> {{__('Meine Bewerbungen')}}</a> </li>
                                        <li class="nav-item"><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form-header').submit();" class="nav-link"><i class="fa fa-sign-out" aria-hidden="true"></i> {{__('Abmeldung')}}</a> </li>
                                        <form id="logout-form-header" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </ul>
                                </li>
                            @endif @if(Auth::guard('company')->check())
                                <li class="nav-item postjob"><a href="{{route('post.job')}}" class="nav-link register">{{__('Stellen ausschreiben')}}</a> </li>
                                <li class="nav-item dropdown userbtn"><a href="">{{Auth::guard('company')->user()->printCompanyImage()}}</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="{{route('company.home')}}" class="nav-link"><i class="fa fa-tachometer" aria-hidden="true"></i> {{__('Übersetzung')}}</a> </li>
                                        <li class="nav-item"><a href="{{ route('company.profile') }}" class="nav-link"><i class="fa fa-user" aria-hidden="true"></i> {{__('Firmenprofil')}}</a></li>
                                        <li class="nav-item"><a href="{{ route('post.job') }}" class="nav-link"><i class="fa fa-desktop" aria-hidden="true"></i> {{__('Stelle ausschreiben')}}</a></li>
                                        <li class="nav-item"><a href="{{route('company.messages')}}" class="nav-link"><i class="fa fa-envelope-o" aria-hidden="true"></i> {{__('Nachrichten')}}</a></li>
                                        <li class="nav-item"><a href="{{ route('company.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form-header1').submit();" class="nav-link"><i class="fa fa-sign-out" aria-hidden="true"></i> {{__('Abmeldung')}}</a> </li>
                                        <form id="logout-form-header1" action="{{ route('company.logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </ul>
                                </li>
                            @endif @if(!Auth::user() && !Auth::guard('company')->user())
                               {{-- <li class="nav-item"><a href="{{route('login')}}" class="nav-link">{{__('Sign in')}}</a> </li>
                                <li class="nav-item"><a href="{{route('register')}}" class="nav-link register">{{__('Register')}}</a> </li>--}}
                            @endif

                            {{-- <li class="dropdown userbtn"><a href="{{url('/')}}"><img src="{{asset('/')}}images/lang.png" alt="" class="userimg" /></a>
                                <ul class="dropdown-menu">
                                    @foreach($siteLanguages as $siteLang)
                                        <li><a href="javascript:;" onclick="event.preventDefault(); document.getElementById('locale-form-{{$siteLang->iso_code}}').submit();" class="nav-link">{{$siteLang->native}}</a>
                                            <form id="locale-form-{{$siteLang->iso_code}}" action="{{ route('set.locale') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="locale" value="{{$siteLang->iso_code}}"/>
                                                <input type="hidden" name="return_url" value="{{url()->full()}}"/>
                                                <input type="hidden" name="is_rtl" value="{{$siteLang->is_rtl}}"/>
                                            </form>
                                        </li>
                                    @endforeach
                                </ul>
                            </li> --}}

                        </ul>

                        <!-- Nav collapes end -->

                    </div>
                    <div class="clearfix"></div>
                </nav>

                <!-- Nav end -->

            </div>
                    @if(!Auth::user() && !Auth::guard('company')->user()) <div class="col-lg-3 offset-lg-2 link-jobs">
                    @else<div class="col-lg-3 link-jobs">
                    @endif


                 <div style="background-color: #C60C30;width: 200px;height: 100%;text-align: center" >
                <a class="btn rot f-right nav-link" style="color:white" title="Stellenangebote &amp; Jobs in der Stellenbörse" href="{{url('/jobs')}}"><i class="material-icons" style="position: relative;top:6px;">track_changes</i> Stellenangebote</a>
                </div>
                </div>
        </div>

        <!-- row end -->

    </div>

    <!-- Header container end -->

</div>


@push('styles')

            <style>

                @media screen and (max-width: 991px) {

                    #languebar {

                        display: none;
                    }

                    #titrebar {
                        position: relative;
                        top:12px;
                    }
                }

            </style>

@endpush


<?php /*?>@if(!Auth::user() && !Auth::guard('company')->user())
	<div class="">my dive 2</div>
@endif<?php */?>
