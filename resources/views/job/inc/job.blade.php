<h5>{{__('Job Details')}}</h5>
 @if(isset($job))
{!! Form::model($job, array('method' => 'put', 'route' => array('update.front.job', $job->id), 'class' => 'form')) !!}
{!! Form::hidden('id', $job->id) !!}
@else
{!! Form::open(array('method' => 'post', 'route' => array('store.front.job'), 'class' => 'form')) !!}
 @endif

<div class="row">

    <div class="col-lg-12">
        <div class="formrow">

            <input type="text" name="title" class="form-control" required="required"
                   placeholder="{{__('Titel')}}" value="<?php if(isset($job)){ echo $job->title; } ?>" >

        </div>

    </div>
    <div class="col-lg-12">
        <div class="formrow">



        </div>

    </div>



    <div class="col-lg-12">
       <div class="row">
           <div class="col-lg-1">
               <div style="font-weight: bold"> <label style="font-size: 16px;">  Geschlecht: </label></div>

           </div>
           <div class="col-lg-4 offset-lg-3 formrow">
               <div>
                   <input type="radio" name="geschlecht"  style="position: relative;bottom: 2px;" id="nationales_recruiting" value="nationales Recruiting" class="form-check-input">
                   <label style="position: relative;bottom: 3px;" for="nationales_recruiting" class="form-check-label">nationales Recruiting </label>
               </div>

           </div>
           <div class="col-lg-4 formrow">


               <div style="margin-right: 65px;font-size: 16px;">
                   <input type="radio" name="geschlecht" style="position: relative;bottom: 2px;"  id="internat_recruiting" value="internat Recruiting" class="form-check-input" selected="">
                   <label style="position: relative;bottom: 3px;" for="internat_recruiting" class="form-check-label">internat Recruiting </label>
               </div>
           </div>
       </div>

    </div>


    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-1">
                <div style="font-weight: bold"> <label style="font-size: 16px;">  Vertragsart: </label></div>

            </div>
            <div class="col-lg-2 offset-lg-3 formrow">
                <div>
                    <input type="radio" name="vertragsart"   id="festeinstellung" value="Festeinstellung" class="form-check-input" style="position: relative;bottom: 2px;">
                    <label style="position: relative;bottom: 3px;" for="festeinstellung" class="form-check-label">Festeinstellung </label>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1 formrow" style="position:relative;left: 64px;">

                <div style="margin-right: 65px;font-size: 16px;">
                    <input type="radio" name="vertragsart"   id="arbeitnehmeruberlassung" value="Arbeitnehmerüberlassung" class="form-check-input" style="position: relative;bottom: 2px;" selected="">
                    <label style="position: relative;bottom: 3px;" for="arbeitnehmeruberlassung" class="form-check-label">Arbeitnehmerüberlassung</label>
                </div>
            </div>
        </div>

    </div>


{{--

    <div class="col-lg-12">

        <div class="form-group" style="display: flex;flex-direction: row">
            <div style="margin-right: 100px;margin-left:10px;font-weight: bold"> <label style="font-size: 16px;">  Geschlecht: </label></div>
            <div style="margin-right: 65px;font-size: 16px;">
                <input type="radio" name="radio"   id="nationales_recruiting" value="nationales Recruiting" class="form-check-input" style="position: relative;bottom: 2px;">
                <label style="position: relative;bottom: 3px;" for="nationales_recruiting" class="form-check-label">nationales Recruiting </label>
            </div>

            <div style="margin-right: 65px;font-size: 16px;">
                <input type="radio" name="radio"   id="internat_recruiting" value="internat Recruiting" class="form-check-input" style="position: relative;bottom: 2px;">
                <label style="position: relative;bottom: 3px;" for="internat_recruiting" class="form-check-label">internat Recruiting </label>
            </div>

        </div>

    </div>
--}}


  {{--  <div class="col-lg-12">

        <div class="form-group" style="display: flex;flex-direction: row">
            <div style="margin-right: 100px;margin-left:10px;font-weight: bold"> <label style="font-size: 16px;">  Vertragsart: </label></div>
            <div style="margin-right: 65px;font-size: 16px;">
                <input type="radio" name="radio2"   id="festeinstellung" value="Festeinstellung" class="form-check-input" style="position: relative;bottom: 2px;">
                <label style="position: relative;bottom: 3px;" for="festeinstellung" class="form-check-label">Festeinstellung </label>
            </div>

            <div style="margin-right: 65px;font-size: 16px;">
                <input type="radio" name="radio2"   id="arbeitnehmeruberlassung" value="Arbeitnehmerüberlassung" class="form-check-input" style="position: relative;bottom: 2px;">
                <label style="position: relative;bottom: 3px;" for="arbeitnehmeruberlassung" class="form-check-label">Arbeitnehmerüberlassung</label>
            </div>

        </div>

    </div>--}}



    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-1">
                <div style="font-weight: bold;position:relative;top:17px;"> <label style="font-size: 16px;">  Branche: </label></div>

            </div>
            <div class="col-lg-4 offset-lg-3 formrow" style="position: relative;right: 16px;">
                <select name="branche"  class="form-control form-control-sm" required="">

                    <option value="Industrie">Industrie</option>

                    <option value="Dienstleistungen">Dienstleistungen</option>

                    <option value="Einzelhandel">Einzelhandel</option>

                </select>

            </div>

        </div>

    </div>




{{--

    <div class="col-lg-12">
        <div class="form-group" style="display: flex;flex-direction: row">
            <div style="margin-right: 100px;margin-left:10px;font-weight: bold"> <label style="font-size: 16px;">  Branche: </label></div>
            <div class=" {!! APFrmErrHelp::hasError($errors, 'degree_level_id') !!}" id="degree_level_id_div"> {!! Form::select('degree_level_id', ['' =>__('Select Required Degree Level')]+$degreeLevels, null, array('class'=>'form-control', 'id'=>'degree_level_id')) !!}
                {!! APFrmErrHelp::showErrors($errors, 'degree_level_id') !!} </div>

        </div>

    </div>
--}}


    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-1">
                <div style="font-weight: bold;position:relative;top:17px;"> <label style="font-size: 16px;">  Beruf: </label></div>

            </div>
            <div class="col-lg-4 offset-lg-3 formrow" style="position: relative;right: 16px;">
                <select name="beruf"  class="form-control form-control-sm" required="">

                    <option value="Schlosser">Schlosser</option>

                    <option value="Bürokaufmann">Bürokaufmann</option>

                    <option value="Verkäufer">Verkäufer</option>

                </select>

            </div>

        </div>

    </div>

{{--    <div class="col-lg-12">
        <div class="form-group" style="display: flex;flex-direction: row">
            <div style="margin-right: 100px;margin-left:10px;font-weight: bold"> <label style="font-size: 16px;">  Beruf: </label></div>
            <div class=" {!! APFrmErrHelp::hasError($errors, 'degree_level_id') !!}" id="degree_level_id_div"> {!! Form::select('degree_level_id', ['' =>__('Select Required Degree Level')]+$degreeLevels, null, array('class'=>'form-control', 'id'=>'degree_level_id')) !!}
                {!! APFrmErrHelp::showErrors($errors, 'degree_level_id') !!} </div>

        </div>

    </div>--}}



    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-1">
                <div style="font-weight: bold;position:relative;top:17px;"> <label style="font-size: 16px;">  Bereich: </label></div>

            </div>
            <div class="col-lg-4 offset-lg-3 formrow" style="position: relative;right: 16px;">
                <select name="bereich"  class="form-control form-control-sm" required="">

                    <option value="Lebensmittel">Lebensmittel</option>

                    <option value="Metall">Metall</option>

                </select>

            </div>

        </div>

    </div>

   {{-- <div class="col-lg-12">
        <div class="form-group" style="display: flex;flex-direction: row">
            <div style="margin-right: 100px;margin-left:10px;font-weight: bold"> <label style="font-size: 16px;">  Bereich: </label></div>
            <div class=" {!! APFrmErrHelp::hasError($errors, 'degree_level_id') !!}" id="degree_level_id_div"> {!! Form::select('degree_level_id', ['' =>__('Select Required Degree Level')]+$degreeLevels, null, array('class'=>'form-control', 'id'=>'degree_level_id')) !!}
                {!! APFrmErrHelp::showErrors($errors, 'degree_level_id') !!} </div>

        </div>

    </div>--}}


    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-1">
                <div style="font-weight: bold"> <label style="font-size: 16px;">  Zeit: </label></div>

            </div>
            <div class="col-lg-4 offset-lg-3 formrow">
                <div>
                    <input type="radio" name="zeit"   id="voltzeit" value="Voltzeit" class="form-check-input" style="position: relative;bottom: 2px;">
                    <label style="position: relative;bottom: 3px;" for="voltzeit" class="form-check-label">Voltzeit </label>
                </div>

            </div>
            <div class="col-lg-4 formrow">


                <div style="margin-right: 65px;font-size: 16px;">
                    <input type="radio" name="zeit"   id="teilzeit" value="Teilzeit" class="form-check-input" style="position: relative;bottom: 2px;" selected="">
                    <label style="position: relative;bottom: 3px;" for="teilzeit" class="form-check-label">Teilzeit</label>
                </div>
            </div>
        </div>

    </div>



{{--
    <div class="col-lg-12">

        <div class="form-group" style="display: flex;flex-direction: row">
            <div style="margin-right: 100px;margin-left:10px;font-weight: bold"> <label style="font-size: 16px;">  Zeit: </label></div>
            <div style="margin-right: 65px;font-size: 16px;">
                <input type="radio" name="radio3"   id="voltzeit" value="Voltzeit" class="form-check-input" style="position: relative;bottom: 2px;">
                <label style="position: relative;bottom: 3px;" for="voltzeit" class="form-check-label">Voltzeit </label>
            </div>

            <div style="margin-right: 65px;font-size: 16px;">
                <input type="radio" name="radio3"   id="teilzeit" value="Teilzeit" class="form-check-input" style="position: relative;bottom: 2px;">
                <label style="position: relative;bottom: 3px;" for="teilzeit" class="form-check-label">Teilzeit</label>
            </div>

        </div>

    </div>--}}



    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-1">
                <div style="font-weight: bold"> <label style="font-size: 16px;">  Option: </label></div>

            </div>
            <div class="col-lg-4 offset-lg-3 formrow">
                <div>
                    <input type="checkbox" name="option"   id="homeoffice" value="Homeoffice" class="form-check-input" style="position: relative;bottom: 2px;">
                    <label style="position: relative;bottom: 3px;" for="homeoffice" class="form-check-label">Homeoffice </label>
                </div>

            </div>

        </div>

    </div>

    {{--<div class="col-lg-12">

        <div class="form-group" style="display: flex;flex-direction: row">
            <div style="margin-right: 100px;margin-left:10px;font-weight: bold"> <label style="font-size: 16px;">  Option: </label></div>
            <div style="margin-right: 65px;font-size: 16px;">
                <input type="checkbox" name="check"   id="homeoffice" value="Homeoffice" class="form-check-input" style="position: relative;bottom: 2px;">
                <label style="position: relative;bottom: 3px;" for="homeoffice" class="form-check-label">Homeoffice </label>
            </div>


        </div>

    </div>--}}


    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-1">
                <div style="font-weight: bold;position:relative;top:17px;"> <label style="font-size: 16px;">  Wochenstunden: </label></div>

            </div>
            <div class="col-lg-4 offset-lg-3 formrow" style="position: relative;right: 16px;">
                <div>
                    <input type="text" name="wochenstunden"   id=""  value="<?php if(isset($job)){ echo $job->wochenstunden; } ?>"  class="form-control"  >
                </div>

            </div>

        </div>

    </div>


{{--
    <div class="col-lg-12">
        <div class="form-group" style="display: flex;flex-direction: row">
            <div style="margin-right: 100px;margin-left:10px;font-weight: bold"> <label style="font-size: 16px;">  Wochenstunden: </label></div>
            <div style="margin-right: 65px;font-size: 16px;">
                <input type="text" name="check"   id="" value="" class="form-control" style="position: relative;bottom: 2px;">
            </div>

        </div>

    </div>--}}

    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-1">
                <div style="font-weight: bold;position:relative;top:17px;"> <label style="font-size: 16px;">  Start/Zeitraum*: </label></div>

            </div>
            <div class="col-lg-4 offset-lg-3 formrow" style="position: relative;right: 16px;">
                <div class="formrow {!! APFrmErrHelp::hasError($errors, 'expiry_date') !!}"> {!! Form::text('start', null, array('class'=>'form-control datepicker', 'id'=>'expiry_date', 'placeholder'=>__('Job expiry date'), 'autocomplete'=>'off')) !!}
                    {!! APFrmErrHelp::showErrors($errors, 'expiry_date') !!} </div>
            </div>

        </div>

    </div>

   {{-- <div class="col-lg-12">
        <div class="form-group" style="display: flex;flex-direction: row">
            <div style="margin-right: 100px;margin-left:10px;font-weight: bold"> <label style="font-size: 16px;">  Start/Zeitraum*: </label></div>
            <div class="formrow {!! APFrmErrHelp::hasError($errors, 'expiry_date') !!}"> {!! Form::text('expiry_date', null, array('class'=>'form-control datepicker', 'id'=>'expiry_date', 'placeholder'=>__('Job expiry date'), 'autocomplete'=>'off')) !!}
                {!! APFrmErrHelp::showErrors($errors, 'expiry_date') !!} </div>

        </div>

    </div>--}}

    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-4">
                <div style="font-weight: bold;position:relative;top:17px;"> <label style="font-size: 16px;">  Verdienst pro Stunde: </label></div>

            </div>
            <div class="col-lg-4 formrow" style="position: relative;right: 16px;">
                <div>
                    <input type="text" name="verdienstpro"   id="" value="<?php if(isset($job)){ echo $job->verdienstpro; } ?>" class="form-control">
                </div>
            </div>

        </div>

    </div>

   {{-- <div class="col-lg-12">
        <div class="form-group" style="display: flex;flex-direction: row">
            <div style="margin-right: 100px;margin-left:10px;font-weight: bold"> <label style="font-size: 16px;">  Verdienst pro Stunde: </label></div>
            <div style="margin-right: 65px;font-size: 16px;">
                <input type="text" name="check"   id="" value="" class="form-control" style="position: relative;bottom: 2px;">
            </div>

        </div>

    </div>--}}


    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-4">
                <div style="font-weight: bold;position:relative;top:17px;"> <label style="font-size: 16px;">  Verdienst im Monat: </label></div>

            </div>
            <div class="col-lg-4 formrow" style="position: relative;right: 16px;">
                <div>
                    <input type="text" name="verdienstim"   id="" value="<?php if(isset($job)){ echo $job->verdienstim; } ?>" class="form-control">
                </div>
            </div>

        </div>

    </div>
{{--
    <div class="col-lg-12">
        <div class="form-group" style="display: flex;flex-direction: row">
            <div style="margin-right: 100px;margin-left:10px;font-weight: bold"> <label style="font-size: 16px;">  Verdienst im Monat: </label></div>
            <div style="margin-right: 65px;font-size: 16px;">
                <input type="text" name="check"   id="" value="" class="form-control" style="position: relative;bottom: 2px;">
            </div>

        </div>

    </div>--}}


    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-1">
                <div style="font-weight: bold;position:relative;top:17px;"> <label style="font-size: 16px;"> Land </label></div>

            </div>
            <div class="col-lg-4 offset-lg-3" style="position: relative;right: 16px;">
                <div class="formrow">

                    <input type="text" name="land" class="form-control" required="required"
                           placeholder="{{$compagny->land}}" value="{{$compagny->land}}">

                </div>
            </div>

        </div>

    </div>

  {{--  <div class="col-lg-12">
        <div class="form-group" style="display: flex;flex-direction: row">
            <div style="margin-right: 100px;margin-left:10px;font-weight: bold"> <label style="font-size: 16px;"> Land </label></div>
            <div class="formrow">

                <input type="text" name="land" class="form-control" required="required"
                       placeholder="{{$compagny->land}}" value="{{$compagny->land}}">

            </div>

        </div>

    </div>--}}

    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-1">
                <div style="font-weight: bold;position:relative;top:17px;"> <label style="font-size: 16px;"> Bundesland </label></div>

            </div>
            <div class="col-lg-4 offset-lg-3" style="position: relative;right: 16px;">
                <div class="formrow">

                    <input type="text" name="bundesland" class="form-control" required="required"
                           placeholder="{{$compagny->bundesland}}" value="{{$compagny->bundesland}}" >

                </div>
            </div>

        </div>

    </div>


   {{-- <div class="col-lg-12">
        <div class="form-group" style="display: flex;flex-direction: row">
            <div style="margin-right: 100px;margin-left:10px;font-weight: bold"> <label style="font-size: 16px;"> Bundesland </label></div>
            <div class="formrow">

                <input type="text" name="" class="form-control" required="required"
                       placeholder="{{$compagny->bundesland}}" value="{{$compagny->bundesland}}" >

            </div>

        </div>

    </div>--}}

    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-1">
                <div style="font-weight: bold;position:relative;top:17px;"> <label style="font-size: 16px;"> Plz </label></div>

            </div>
            <div class="col-lg-4 offset-lg-3" style="position: relative;right: 16px;">
                <div class="formrow">

                    <input type="text" name="plz" class="form-control" required="required"
                           placeholder="{{$compagny->plz}}" value="{{$compagny->plz}}">

                </div>
            </div>

        </div>

    </div>


{{--
    <div class="col-lg-12">
        <div class="form-group" style="display: flex;flex-direction: row">
            <div style="margin-right: 100px;margin-left:10px;font-weight: bold"> <label style="font-size: 16px;"> Plz </label></div>

            <div class="formrow">

                <input type="text" name=" " class="form-control" required="required"
                       placeholder="{{$compagny->plz}}" value="{{$compagny->plz}}">

            </div>


        </div>

    </div>--}}

    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-1">
                <div style="font-weight: bold;position:relative;top:17px;"> <label style="font-size: 16px;"> Arbeitsort </label></div>

            </div>
            <div class="col-lg-4 offset-lg-3" style="position: relative;right: 16px;">
                <div class="formrow">

                    <input type="text" name="stadt" class="form-control" required="required"
                           placeholder="{{$compagny->stadt}}" value="{{$compagny->stadt}}">

                </div>
            </div>

        </div>

    </div>


    {{--<div class="col-lg-12">
        <div class="form-group" style="display: flex;flex-direction: row">
            <div style="margin-right: 100px;margin-left:10px;font-weight: bold"> <label style="font-size: 16px;"> Arbeitsort </label></div>

            <div class="formrow">

                <input type="text" name="" class="form-control" required="required"
                       placeholder="{{$compagny->stadt}}" value="{{$compagny->stadt}}">

            </div>


        </div>

    </div>--}}

    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-1">
                <div style="font-weight: bold;position:relative;top:17px;"> <label style="font-size: 16px;"> Arbeitsort </label></div>

            </div>
            <div class="col-lg-4 offset-lg-3 formrow" style="position: relative;right: 16px;">
                <div>
                    <input type="text" name="arbeitsort"   id="" value="<?php if(isset($job)){ echo $job->arbeitsort; } ?>" class="form-control" >
                </div>

            </div>

        </div>

    </div>
{{--
    <div class="col-lg-12">
        <div class="form-group" style="display: flex;flex-direction: row">
            <div style="margin-right: 100px;margin-left:10px;font-weight: bold"> <label style="font-size: 16px;">  Arbeitsort: </label></div>
            <div style="margin-right: 65px;font-size: 16px;">
                <input type="text" name="check"   id="" value="" class="form-control" style="position: relative;bottom: 2px;">
            </div>

        </div>

    </div>--}}


    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-1">
                <div style="font-weight: bold;position:relative;top:17px;"> <label style="font-size: 16px;">  Deutschlevel: </label></div>

            </div>
            <div class="col-lg-4 offset-lg-3 formrow" style="position: relative;right: 16px;">
                <select name="deutschlevel"  class="form-control form-control-sm" required="">

                    <option value="A1">A1</option>

                    <option value="A2">A2</option>

                    <option value="B1">B1</option>

                    <option value="B2">B2</option>

                </select>

            </div>

        </div>

    </div>

  {{--
    <div class="col-lg-12">
        <div class="form-group" style="display: flex;flex-direction: row">
            <div style="margin-right: 100px;margin-left:10px;font-weight: bold"> <label style="font-size: 16px;">  Deutschlevel: </label></div>
            <div class=" {!! APFrmErrHelp::hasError($errors, 'degree_level_id') !!}" id="degree_level_id_div"> {!! Form::select('degree_level_id', ['' =>__('Select Required Degree Level')]+$degreeLevels, null, array('class'=>'form-control', 'id'=>'degree_level_id')) !!}
                {!! APFrmErrHelp::showErrors($errors, 'degree_level_id') !!} </div>

        </div>

    </div>--}}

    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-1">
                <div style="font-weight: bold;position:relative;top:17px;"> <label style="font-size: 16px;">  Englischlevel: </label></div>

            </div>
            <div class="col-lg-4 offset-lg-3 formrow" style="position: relative;right: 16px;">
                <select name="englischlevel"  class="form-control form-control-sm" required="">

                    <option value="A1">A1</option>

                    <option value="A2">A2</option>

                    <option value="B1">B1</option>

                    <option value="B2">B2</option>

                </select>

            </div>

        </div>

    </div>

   {{-- <div class="col-lg-12">
        <div class="form-group" style="display: flex;flex-direction: row">
            <div style="margin-right: 100px;margin-left:10px;font-weight: bold"> <label style="font-size: 16px;">  Englischlevel: </label></div>
            <div class=" {!! APFrmErrHelp::hasError($errors, 'degree_level_id') !!}" id="degree_level_id_div"> {!! Form::select('degree_level_id', ['' =>__('Select Required Degree Level')]+$degreeLevels, null, array('class'=>'form-control', 'id'=>'degree_level_id')) !!}
                {!! APFrmErrHelp::showErrors($errors, 'degree_level_id') !!} </div>

        </div>

    </div>
--}}


    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-4">
                <div style="font-weight: bold;position:relative;top:17px;"> <label style="font-size: 16px;">  Sonstige Sprachen: </label></div>

            </div>
            <div class="col-lg-4 formrow" style="position: relative;right: 16px;">
                <div>
                    <input type="text" name="sonstige" value="<?php if(isset($job)){ echo $job->sonstige; } ?>" class="form-control">
                </div>

            </div>

        </div>

    </div>

    {{--<div class="col-lg-12">
        <div class="form-group" style="display: flex;flex-direction: row">
            <div style="margin-right: 100px;margin-left:10px;font-weight: bold"> <label style="font-size: 16px;">  Sonstige Sprachen: </label></div>
            <div style="margin-right: 65px;font-size: 16px;">
                <input type="text" name="check"   id="" value="" class="form-control" style="position: relative;bottom: 2px;">
            </div>

        </div>

    </div>--}}


    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-1">
                <div style="font-weight: bold;position:relative;top:17px;"> <label style="font-size: 16px;">  Führerschein: </label></div>

            </div>
            <div class="col-lg-4 offset-lg-3 formrow" style="position: relative;right: 16px;">
                <select name="fuhrerschein"  class="form-control form-control-sm" required="">

                    <option value="Nein">Nein</option>

                    <option value="Ja">Ja</option>

                </select>
            </div>

        </div>

    </div>
   {{--
    <div class="col-lg-12">
        <div class="form-group" style="display: flex;flex-direction: row">
            <div style="margin-right: 100px;margin-left:10px;font-weight: bold"> <label style="font-size: 16px;">  Führerschein: </label></div>
            <div class=" {!! APFrmErrHelp::hasError($errors, 'degree_level_id') !!}" id="degree_level_id_div"> {!! Form::select('degree_level_id', ['' =>__('Select Required Degree Level')]+$degreeLevels, null, array('class'=>'form-control', 'id'=>'degree_level_id')) !!}
                {!! APFrmErrHelp::showErrors($errors, 'degree_level_id') !!} </div>

        </div>

    </div>--}}

    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-1">
                <div style="font-weight: bold;position:relative;top:17px;"> <label style="font-size: 16px;">  Unterkunft*: </label></div>

            </div>
            <div class="col-lg-4 offset-lg-3 formrow" style="position: relative;right: 16px;">
                <select name="unterkunft"  class="form-control form-control-sm" required="">

                    <option value="Appartement">Appartement</option>

                    <option value="Pension">Pension</option>

                    <option value="Hotel">Hotel</option>

                </select>
            </div>

        </div>

    </div>

    {{--<div class="col-lg-12">
        <div class="form-group" style="display: flex;flex-direction: row">
            <div style="margin-right: 100px;margin-left:10px;font-weight: bold"> <label style="font-size: 16px;">  Unterkunft*: </label></div>
            <div class=" {!! APFrmErrHelp::hasError($errors, 'degree_level_id') !!}" id="degree_level_id_div"> {!! Form::select('degree_level_id', ['' =>__('Select Required Degree Level')]+$degreeLevels, null, array('class'=>'form-control', 'id'=>'degree_level_id')) !!}
                {!! APFrmErrHelp::showErrors($errors, 'degree_level_id') !!} </div>

        </div>

    </div>--}}


    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-1">
                <div style="font-weight: bold"> <label style="font-size: 16px;">  Ausstattung: </label></div>

            </div>
            <div class="col-lg-2 offset-lg-3 formrow">
                <div>
                    <input type="checkbox" name="ausstattung[]"   id=" " value="Internet" class="form-check-input" style="position: relative;bottom: 2px;">
                    <label style="position: relative;bottom: 3px;" for="" class="form-check-label">Internet </label>
                </div>

            </div>
            <div class="col-lg-3 offset-lg-1 formrow">


                <div>
                    <input type="checkbox" name="ausstattung[]"   id="" value="eigenes Bad" class="form-check-input" style="position: relative;bottom: 2px;">
                    <label style="position: relative;bottom: 3px;" for="" class="form-check-label">eigenes Bad </label>
                </div>
            </div>
            <div class="col-lg-2 formrow">

                <div style="margin-right: 65px;font-size: 16px;">
                    <input type="checkbox" name="ausstattung[]"   id="" value="TV" class="form-check-input" style="position: relative;bottom: 2px;">
                    <label style="position: relative;bottom: 3px;" for="" class="form-check-label">TV </label>
                </div>
            </div>
        </div>

    </div>

{{--
    <div class="col-lg-12">

        <div class="form-group" style="display: flex;flex-direction: row">
            <div style="margin-right: 100px;margin-left:10px;font-weight: bold"> <label style="font-size: 16px;">  Ausstattung: </label></div>
            <div style="margin-right: 65px;font-size: 16px;">
                <input type="checkbox" name="check2"   id=" " value="Internet" class="form-check-input" style="position: relative;bottom: 2px;">
                <label style="position: relative;bottom: 3px;" for="" class="form-check-label">Internet </label>
            </div>

            <div style="margin-right: 65px;font-size: 16px;">
                <input type="radio" name="check3"   id="" value="eigenes Bad" class="form-check-input" style="position: relative;bottom: 2px;">
                <label style="position: relative;bottom: 3px;" for="" class="form-check-label">eigenes Bad </label>
            </div>
            <div style="margin-right: 65px;font-size: 16px;">
                <input type="radio" name="check4"   id="" value="TV" class="form-check-input" style="position: relative;bottom: 2px;">
                <label style="position: relative;bottom: 3px;" for="" class="form-check-label">TV </label>
            </div>

        </div>

    </div>--}}

    <div class="col-lg-12">
    <div class="formrow"  style="position: relative;">

        <input type="text" name="wanie" class="form-control" id="tagswannie" autocomplete="off" required="required"
               placeholder="{{__('Wanie deine Tags')}}"  value="<?php if(isset($job)){ echo $job->wanie; } ?>">

    </div>

</div>

</div>
<div class="row">



{{--
    <div class="col-md-12">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'title') !!}"> {!! Form::text('title', null, array('class'=>'form-control', 'id'=>'title', 'placeholder'=>__('Job title'))) !!}
            {!! APFrmErrHelp::showErrors($errors, 'title') !!} </div>
    </div>--}}

    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-1 formrow">
                <div> <label style="font-size: 16px;">  Beschreibung: </label></div>

            </div>


        </div>

    </div>


    <div class="col-md-12">
{{--
        <div style="margin-right: 100px;margin-left:10px;font-weight: bold"> <label style="font-size: 16px;">  Beschreibung: </label></div>
--}}

        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'description') !!}"> {!! Form::textarea('description', null, array('class'=>'form-control', 'id'=>'description', 'placeholder'=>__('Job description'))) !!}
            {!! APFrmErrHelp::showErrors($errors, 'description') !!} </div>
    </div>


	{{--
	 <div class="col-md-12">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'benefits') !!}"> {!! Form::textarea('benefits', null, array('class'=>'form-control', 'id'=>'benefits', 'placeholder'=>__('Job Benefits'))) !!}
            {!! APFrmErrHelp::showErrors($errors, 'benefits') !!} </div>
    </div>
	
	
    <div class="col-md-12">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'skills') !!}">
            <?php
            $skills = old('skills', $jobSkillIds);
            ?>
            {!! Form::select('skills[]', $jobSkills, $skills, array('class'=>'form-control select2-multiple', 'id'=>'skills', 'multiple'=>'multiple')) !!}
            {!! APFrmErrHelp::showErrors($errors, 'skills') !!} </div>
    </div>
    <div class="col-md-4">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'country_id') !!}" id="country_id_div"> {!! Form::select('country_id', ['' => __('Select Country')]+$countries, old('country_id', (isset($job))? $job->country_id:$siteSetting->default_country_id), array('class'=>'form-control', 'id'=>'country_id')) !!}
            {!! APFrmErrHelp::showErrors($errors, 'country_id') !!} </div>
    </div>
    <div class="col-md-4">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'state_id') !!}" id="state_id_div"> <span id="default_state_dd"> {!! Form::select('state_id', ['' => __('Select State')], null, array('class'=>'form-control', 'id'=>'state_id')) !!} </span> {!! APFrmErrHelp::showErrors($errors, 'state_id') !!} </div>
    </div>
    <div class="col-md-4">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'city_id') !!}" id="city_id_div"> <span id="default_city_dd"> {!! Form::select('city_id', ['' => __('Select City')], null, array('class'=>'form-control', 'id'=>'city_id')) !!} </span> {!! APFrmErrHelp::showErrors($errors, 'city_id') !!} </div>
    </div>
    <div class="col-md-6">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'salary_from') !!}" id="salary_from_div"> {!! Form::number('salary_from', null, array('class'=>'form-control', 'id'=>'salary_from', 'placeholder'=>__('Salary from'))) !!}
            {!! APFrmErrHelp::showErrors($errors, 'salary_from') !!} </div>
    </div>
    <div class="col-md-6">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'salary_to') !!}" id="salary_to_div">
            {!! Form::number('salary_to', null, array('class'=>'form-control', 'id'=>'salary_to', 'placeholder'=>__('Salary to'))) !!}
            {!! APFrmErrHelp::showErrors($errors, 'salary_to') !!} </div>
    </div>
    <div class="col-md-4">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'salary_currency') !!}" id="salary_currency_div">
            @php
            $salary_currency = Request::get('salary_currency', (isset($job))? $job->salary_currency:$siteSetting->default_currency_code);
            @endphp

            {!! Form::select('salary_currency', ['' => __('Select Salary Currency')]+$currencies, $salary_currency, array('class'=>'form-control', 'id'=>'salary_currency')) !!}
            {!! APFrmErrHelp::showErrors($errors, 'salary_currency') !!} </div>
    </div>
    <div class="col-md-4">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'salary_period_id') !!}" id="salary_period_id_div"> {!! Form::select('salary_period_id', ['' => __('Select Salary Period')]+$salaryPeriods, null, array('class'=>'form-control', 'id'=>'salary_period_id')) !!}
            {!! APFrmErrHelp::showErrors($errors, 'salary_period_id') !!} </div>
    </div>
    <div class="col-md-4">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'hide_salary') !!}"> {!! Form::label('hide_salary', __('Hide Salary?'), ['class' => 'bold']) !!}
            <div class="radio-list">
                <?php
                $hide_salary_1 = '';
                $hide_salary_2 = 'checked="checked"';
                if (old('hide_salary', ((isset($job)) ? $job->hide_salary : 0)) == 1) {
                    $hide_salary_1 = 'checked="checked"';
                    $hide_salary_2 = '';
                }
                ?>
                <label class="radio-inline">
                    <input id="hide_salary_yes" name="hide_salary" type="radio" value="1" {{$hide_salary_1}}>
                    {{__('Yes')}} </label>
                <label class="radio-inline">
                    <input id="hide_salary_no" name="hide_salary" type="radio" value="0" {{$hide_salary_2}}>
                    {{__('No')}} </label>
            </div>
            {!! APFrmErrHelp::showErrors($errors, 'hide_salary') !!} </div>
    </div>
    <div class="col-md-6">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'career_level_id') !!}" id="career_level_id_div"> {!! Form::select('career_level_id', ['' => __('Select Career level')]+$careerLevels, null, array('class'=>'form-control', 'id'=>'career_level_id')) !!}
            {!! APFrmErrHelp::showErrors($errors, 'career_level_id') !!} </div>
    </div>

    <div class="col-md-6">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'functional_area_id') !!}" id="functional_area_id_div"> {!! Form::select('functional_area_id', ['' => __('Select Functional Area')]+$functionalAreas, null, array('class'=>'form-control', 'id'=>'functional_area_id')) !!}
            {!! APFrmErrHelp::showErrors($errors, 'functional_area_id') !!} </div>
    </div>
    <div class="col-md-6">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'job_type_id') !!}" id="job_type_id_div"> {!! Form::select('job_type_id', ['' => __('Select Job Type')]+$jobTypes, null, array('class'=>'form-control', 'id'=>'job_type_id')) !!}
            {!! APFrmErrHelp::showErrors($errors, 'job_type_id') !!} </div>
    </div>
    <div class="col-md-6">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'job_shift_id') !!}" id="job_shift_id_div"> {!! Form::select('job_shift_id', ['' => __('Select Job Shift')]+$jobShifts, null, array('class'=>'form-control', 'id'=>'job_shift_id')) !!}
            {!! APFrmErrHelp::showErrors($errors, 'job_shift_id') !!} </div>
    </div>
    <div class="col-md-6">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'num_of_positions') !!}" id="num_of_positions_div"> {!! Form::select('num_of_positions', ['' => __('Select number of Positions')]+MiscHelper::getNumPositions(), null, array('class'=>'form-control', 'id'=>'num_of_positions')) !!}
            {!! APFrmErrHelp::showErrors($errors, 'num_of_positions') !!} </div>
    </div>
    <div class="col-md-6">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'gender_id') !!}" id="gender_id_div"> {!! Form::select('gender_id', ['' => __('No preference')]+$genders, null, array('class'=>'form-control', 'id'=>'gender_id')) !!}
            {!! APFrmErrHelp::showErrors($errors, 'gender_id') !!} </div>
    </div>
    <div class="col-md-6">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'expiry_date') !!}"> {!! Form::text('expiry_date', null, array('class'=>'form-control datepicker', 'id'=>'expiry_date', 'placeholder'=>__('Job expiry date'), 'autocomplete'=>'off')) !!}
            {!! APFrmErrHelp::showErrors($errors, 'expiry_date') !!} </div>
    </div>
    <div class="col-md-6">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'degree_level_id') !!}" id="degree_level_id_div"> {!! Form::select('degree_level_id', ['' =>__('Select Required Degree Level')]+$degreeLevels, null, array('class'=>'form-control', 'id'=>'degree_level_id')) !!}
            {!! APFrmErrHelp::showErrors($errors, 'degree_level_id') !!} </div>
    </div>
    <div class="col-md-6">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'job_experience_id') !!}" id="job_experience_id_div"> {!! Form::select('job_experience_id', ['' => __('Select Required job experience')]+$jobExperiences, null, array('class'=>'form-control', 'id'=>'job_experience_id')) !!}
            {!! APFrmErrHelp::showErrors($errors, 'job_experience_id') !!} </div>
    </div>
    <div class="col-md-6">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'is_freelance') !!}"> {!! Form::label('is_freelance', __('Is Freelance?'), ['class' => 'bold']) !!}
            <div class="radio-list">
                <?php
                $is_freelance_1 = '';
                $is_freelance_2 = 'checked="checked"';
                if (old('is_freelance', ((isset($job)) ? $job->is_freelance : 0)) == 1) {
                    $is_freelance_1 = 'checked="checked"';
                    $is_freelance_2 = '';
                }
                ?>
                <label class="radio-inline">
                    <input id="is_freelance_yes" name="is_freelance" type="radio" value="1" {{$is_freelance_1}}>
                    {{__('Yes')}} </label>
                <label class="radio-inline">
                    <input id="is_freelance_no" name="is_freelance" type="radio" value="0" {{$is_freelance_2}}>
                    {{__('No')}} </label>
            </div>
            {!! APFrmErrHelp::showErrors($errors, 'is_freelance') !!} </div>
    </div>--}}
    <div class="col-md-12">
        <div class="formrow">
            <button type="submit" class="btn">{{__('Speichern')}} <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
        </div>
    </div>
</div>
<input type="file" name="image" id="image" style="display:none;" accept="image/*"/>
{!! Form::close() !!}
<hr>
@push('styles')
<style type="text/css">
    .datepicker>div {
        display: block;
    }
    .autocomplete-suggestions { border: 1px solid #999; background: #FFF; overflow: auto; }
    .autocomplete-suggestion { padding: 2px 5px; white-space: nowrap; overflow: hidden; }
    .autocomplete-selected { background: #F0F0F0; }
    .autocomplete-suggestions strong { font-weight: normal; color: #3399FF; }
    .autocomplete-group { padding: 2px 5px; }
    .autocomplete-group strong { display: block; border-bottom: 1px solid #000; }
</style>
@endpush
@push('scripts')
@include('includes.tinyMCEFront')
<script src="{{ asset('js/jquery.autocomplete.min.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function () {


/*
        $( "#tagswannie" ).autocomplete({
            source: function( request, response ) {
                $.ajax( {
                    url: '{{ route('ajax.wahle') }}',
                    dataType: "jsonp",
                    data: {
                        term: request.term
                    },
                    success: function( data ) {
                        response( data );
                    }
                } );
            },
            minLength: 2,
            select: function( event, ui ) {
                log( "Selected: " + ui.item.value + " aka " + ui.item.id );
            }
        } );*/
      /*  var countries = [
            { value: 'Andorra', data: 'AD' },
            // ...
            { value: 'Zimbabwe', data: 'ZZ' }
        ];
*/

        // Initialize ajax autocomplete:
        $('#tagswannie').autocomplete({
            serviceUrl: '{{ route('ajax.wahle') }}',
            onSelect: function (suggestion) {
                alert('You selected: ' + suggestion.value + ', ' + suggestion.data);
            }
        });


        $('.select2-multiple').select2({
            placeholder: "{{__('Select Required Skills')}}",
            allowClear: true
        });
        $(".datepicker").datepicker({
            autoclose: true,
            format: 'yyyy-m-d'
        });
        $('#country_id').on('change', function (e) {
            e.preventDefault();
            filterLangStates(0);
        });
        $(document).on('change', '#state_id', function (e) {
            e.preventDefault();
            filterLangCities(0);
        });
        filterLangStates(<?php echo old('state_id', (isset($job)) ? $job->state_id : 0); ?>);
    });
    function filterLangStates(state_id)
    {
        var country_id = $('#country_id').val();
        if (country_id != '') {
            $.post("{{ route('filter.lang.states.dropdown') }}", {country_id: country_id, state_id: state_id, _method: 'POST', _token: '{{ csrf_token() }}'})
                    .done(function (response) {
                        $('#default_state_dd').html(response);
                        filterLangCities(<?php echo old('city_id', (isset($job)) ? $job->city_id : 0); ?>);
                    });
        }
    }
    function filterLangCities(city_id)
    {
        var state_id = $('#state_id').val();
        if (state_id != '') {
            $.post("{{ route('filter.lang.cities.dropdown') }}", {state_id: state_id, city_id: city_id, _method: 'POST', _token: '{{ csrf_token() }}'})
                    .done(function (response) {
                        $('#default_city_dd').html(response);
                    });
        }
    }
</script> 
@endpush
