<div class="container">
<div class="section howitwrap">
    
        <!-- title start -->
        <div class="titleTop">
            <h3>{{__('How It')}} <span>{{__('Works')}}</span></h3>
        </div>
        <!-- title end -->
        <ul class="howlist row">
            <!--step 1-->
            <li class="col-md-4 col-sm-4">
                <div class="iconcircle"><i class="fa fa-user" aria-hidden="true"></i>
                </div>
                <h4>{{__('Account erstellen')}}</h4>
                <p class="paresponsive">
                    {{__('Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur')}}.

                </p>
            </li>
            <!--step 1 end-->
            <!--step 2-->
            <li class="col-md-4 col-sm-4">
                <div class="iconcircle"><i class="fa fa-black-tie" aria-hidden="true"></i>
                </div>
                <h4>{{__('Stelle suchen')}}</h4>
                <p class="paresponsive">
                    {{__('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid ut labore et dolore magna aliqua')}}.
                </p>
            </li>
            <!--step 2 end-->
            <!--step 3-->
            <li class="col-md-4 col-sm-4">
                <div class="iconcircle"><i class="fa fa-file-text" aria-hidden="true"></i>
                </div>
                <h4>{{__('Lebenslauf senden')}}</h4>
                <p class="paresponsive">
                    {{__('Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum')}}.
                </p>
            </li>
            <!--step 3 end-->
        </ul>
    </div>
</div>
@push('styles')

    <style>

        @media all and (max-width: 1199px) {

            .paresponsive {

                display: none;
            }

        }



    </style>

@endpush
