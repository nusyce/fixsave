<div class="section">
    <div class="container">
        <!-- title start -->
        <div class="titleTop">
            <h3>{{__('Ausgewählte')}} <span>{{__('Unternehmen')}}</span></h3>
        </div>
        <!-- title end -->

        <ul class="employerList owl-carousel">
            <!--employer-->
            @if(isset($topCompanyIds) && count($topCompanyIds))
            @foreach($topCompanyIds as $company_id_num_jobs)
            <?php
            $company = App\Company::where('id', '=', $company_id_num_jobs->company_id)->active()->first();
            if (null !== $company) {
                ?>
                <li class="item" data-toggle="tooltip" data-placement="bottom" title="{{$company->name}}" data-original-title="{{$company->name}}">
                    <div class="empint">
                        <?php if(isset($company->logo)){ ?>   <a href="{{route('company.detail', $company->slug)}}" title="{{$company->name}}"><img width="93" height="93" src="{{ asset('company_logos/'.$company->logo)}}" /></a> <?php }else{ } ?>{{--<a href="{{route('company.detail', $company->slug)}}" title="{{$company->name}}">{{$company->printCompanyImage()}}</a>--}}

                    </div>
                </li>
                <?php
            }
            ?>
            @endforeach
            @endif
        </ul>
        <div class="row" style="margin-top: 30px;">
            <div class="col-lg-7 offset-lg-4 toprespons">
                <div class="findrespons">
                    <div class="divresp"><h3>{{__('Unternehmen')}}</h3> </div>
                    <div> <a href="{{url('/companies')}}"><button class="btn btn-outline-info">FINDEN</button> </a></div>
                </div>

                <div class="findrespons2">
                    <div><h3>{{__('Berwerber')}}</h3> </div>
                    <div> <a href="{{url('/jobs')}}"><button class="btn btn-outline-info">FINDEN</button> </div></a>
                </div>
            </div>
        </div>
    </div>


    {{--	<div class="largebanner shadow3">
{{--<div class="adin">
    {!! $siteSetting->index_page_below_top_employes_ad !!}
    </div>--}}
<div class="clearfix"></div>
</div>



</div>

@push('styles')

    <style>
        .findrespons{

            margin-right: 40px;
        }

        .toprespons {

            display: flex;
            flex-direction: row;
            text-align: center;
            position: relative;right: 30px

        }



        @media all and (max-width: 768px) and (min-width: 760px) {

            .toprespons {

                position: relative;left: 130px
            }

        }

        @media all and (max-width: 540px) and (min-width: 500px){

            .findrespons{
                margin-right: 40px;
                position: relative;
                left: 25px;
                margin-left: 80px;
            }

        }

        @media all and (max-width: 360px) and (min-width: 321px){

            .findrespons{
                margin-right: 40px;
                position: relative;
                left: 25px;

            }

        }
        @media all and (max-width: 411px) and (min-width: 415px) {

            .findrespons{
                margin-right: 40px;
                position: relative;
                left: 25px;
                margin-left: 33px;

            }

        }

        @media all and (max-width: 414px) and (min-width: 376px) {

            .findrespons{
                margin-right: 40px;
                position: relative;
                left: 25px;
                margin-left: 30px;

            }

        }

        @media all and (max-width: 375px) and (min-width: 361px) {

            .findrespons{
                margin-right: 40px;
                position: relative;
                left: 25px;
                margin-left: 10px;

            }

        }

        @media all and (max-width: 320px){

            .toprespons {

                display: flex;
                flex-direction: column;
                text-align: center;
                position: relative;right: 30px

            }
            .findrespons{
                margin-right: 40px;
                position: relative;
                left: 25px;
                margin-left: 33px;
                margin-bottom: 14px;

            }
            .findrespons2{

                margin-right: 40px;
                position: relative;
                left: 25px;
                margin-left: 33px;



            }


        }


    </style>

@endpush


