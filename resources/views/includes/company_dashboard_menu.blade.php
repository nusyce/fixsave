<div class="col-md-3 col-sm-4">
	<div class="usernavwrap">
    <ul class="usernavdash">
        <li <?=empty(Request::path())||Request::path()=='company-home'?'class="active"':''?>><a href="{{route('company.home')}}"><i class="fa fa-tachometer" aria-hidden="true"></i> {{__('Dashboard')}}</a></li>
        <li  <?=Request::path()=='company-profile'?'class="active"':''?>><a href="{{ route('company.profile') }}"><i class="fa fa-pencil" aria-hidden="true"></i> {{__('Profil bearbeiten')}}</a></li>
        <li <?=Request::path()=='company-detail'?'class="active"':''?>><a href="{{ route('company.detail', Auth::guard('company')->user()->slug) }}"><i class="fa fa-user" aria-hidden="true"></i> {{__('Öffentliches Unternehmensprofil')}}</a></li>
        <li <?=Request::path()=='post-job'?'class="active"':''?>><a href="{{ route('post.job') }}"><i class="fa fa-desktop" aria-hidden="true"></i> {{__('Stelle ausschreiben')}}</a></li>
        <li <?=Request::path()=='posted-jobs'?'class="active"':''?>><a href="{{ route('posted.jobs') }}"><i class="fa fa-black-tie" aria-hidden="true"></i> {{__('Ausschreibungen')}}</a></li>

        <li <?=Request::path()=='company-messages'?'class="active"':''?>><a href="{{route('company.messages')}}"><i class="fa fa-envelope-o" aria-hidden="true"></i> {{__('Nachrichten')}}</a></li>
        <li <?=Request::path()=='company-followers'?'class="active"':''?>><a href="{{route('company.followers')}}"><i class="fa fa-users" aria-hidden="true"></i> {{__('Follower')}}</a></li>
        <li <?=Request::path()=='logout'?'class="active"':''?>><a href="{{ route('company.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true"></i> {{__('Abmeldung')}}</a>
            <form id="logout-form" action="{{ route('company.logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
        </li>
    </ul>
	</div>
    {{--<div class="row">
        <div class="col-md-12">{!! $siteSetting->dashboard_page_ad !!}</div>
    </div>--}}
</div>
