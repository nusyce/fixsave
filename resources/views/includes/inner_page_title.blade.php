<div class="pageTitle">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <h1 class="page-heading"> <?php if($page_title == 'Register') {} else{ echo $page_title; } ?> </h1>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="breadCrumb"><a href="{{route('index')}}">{{__('Home')}}</a> / <span>{{$page_title}}</span></div>
            </div>
        </div>
    </div>
</div>