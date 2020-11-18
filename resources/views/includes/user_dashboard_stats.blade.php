<ul class="row profilestat">
    <li class="col-lg-3 col-md-3 col-6">
        <div class="inbox"> <i class="fa fa-eye" aria-hidden="true"></i>
            <h6>{{Auth::user()->num_profile_views}}</h6>
            <strong>{{__('Profile Views')}}</strong> </div>
    </li>
    <li class="col-lg-3 col-md-3 col-6">
        <div class="inbox"> <i class="fa fa-user-o" aria-hidden="true"></i>
            <h6><a href="{{route('my.followings')}}">{{Auth::user()->countFollowings()}}</a></h6>
            <strong>{{__('Follower')}}</strong> </div>
    </li>
    <li class="col-lg-3 col-md-3 col-6">
        <div class="inbox"> <i class="fa fa-briefcase" aria-hidden="true"></i>
            <h6><a href="{{url('my-profile#cvs')}}">{{Auth::user()->countProfileCvs()}}</a></h6>
            <strong>{{__('Mein Lebensläufe')}}</strong> </div>
    </li>
    <li class="col-lg-3 col-md-3 col-6">
        <div class="inbox"> <i class="fa fa-envelope-o" aria-hidden="true"></i>
            <h6><a href="{{route('my.messages')}}">{{Auth::user()->countUserMessages()}}</a></h6>
            <strong>{{__('Nachrichten')}}</strong> </div>
    </li>
</ul>
