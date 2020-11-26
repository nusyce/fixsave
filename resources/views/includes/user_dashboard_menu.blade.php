<div class="col-lg-3">
	<div class="usernavwrap">
    <div class="switchbox">
        <div class="txtlbl">{{__('Sofort verfügbar')}} <i class="fa fa-info-circle" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="{{__('Sind Sie sofort verfügbar?')}}?" data-original-title="{{__('Sind Sie sofort verfügbar?')}}?" title="{{__('Sind Sie sofort verfügbar?')}}?"></i>
        </div>
        <div class="">
            <label class="switch switch-green"> @php
                $checked = ((bool)Auth::user()->is_immediate_available)? 'checked="checked"':'';
                @endphp
                <input type="checkbox" name="is_immediate_available" id="is_immediate_available" class="switch-input" {{$checked}} onchange="changeImmediateAvailableStatus({{Auth::user()->id}}, {{Auth::user()->is_immediate_available}});">
                <span class="switch-label" data-on="JA" data-off="NEIN"></span> <span class="switch-handle"></span> </label>
        </div>
        <div class="clearfix"></div>
    </div>
    <ul class="usernavdash">
        <li <?=empty(Request::path())||Request::path()=='home'?'class="active"':''?>><a href="{{route('home')}}"><i class="fa fa-tachometer-alt" aria-hidden="true"></i> {{__('Dashboard')}}</a>
        </li>
        <li <?=Request::path()=='my-profile'?'class="active"':''?> ><a href="{{ route('my.profile') }}"><i class="fa fa-pencil-alt" aria-hidden="true"></i> {{__('Profil bearbeiten')}}</a>
        </li>
        <li <?=Request::path()=='view-public-profile'?'class="active"':''?>><a href="{{ route('view.public.profile', Auth::user()->id) }}"><i class="fa fa-eye" aria-hidden="true"></i> {{__('Profil anzeigen')}}</a>
        </li>
        <li <?=Request::path()=='my-job-applications'?'class="active"':''?>><a href="{{ route('my.job.applications') }}"><i class="fa fa-desktop" aria-hidden="true"></i> {{__('Bewerbungen')}}</a>
        </li>
        <li <?=Request::path()=='my-favourite-jobs'?'class="active"':''?>><a href="{{ route('my.favourite.jobs') }}"><i class="fa fa-heart" aria-hidden="true"></i> {{__('Favoriten')}}</a>
        </li>
        <li <?=Request::path()=='my-alerts'?'class="active"':''?>><a href="{{ route('my-alerts') }}"><i class="fa fa-bullhorn" aria-hidden="true"></i> {{__('Job-Alarm')}}</a>
        </li>
       {{-- <li><a href="{{url('my-profile#cvs')}}"><i class="fa fa-file-text" aria-hidden="true"></i> {{__('Lebensläufe verwalten')}}</a>
        </li>--}}
        <li <?=Request::path()=='my-messages'?'class="active"':''?>><a href="{{route('my.messages')}}"><i class="fa fa-envelope" aria-hidden="true"></i> {{__('Nachrichten')}}</a>
        </li>
        <li <?=Request::path()=='my-followings'?'class="active"':''?>><a href="{{route('my.followings')}}"><i class="fa fa-user-alt" aria-hidden="true"></i> {{__('Follower')}}</a>
        </li>
        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out-alt" aria-hidden="true"></i> {{__('Abmeldung')}}</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
    </ul>
		</div>
    {{--<div class="row">
        <div class="col-md-12">{!! $siteSetting->dashboard_page_ad !!}</div>
    </div>--}}
		
</div>
