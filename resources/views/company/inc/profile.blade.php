
{!! Form::model($company, array('method' => 'put', 'route' => array('update.company.profile'), 'class' => 'form', 'files'=>true)) !!}
<h5>{{__('Informationen zum Konto')}}</h5>
<div class="row">
    <div class="col-md-4">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'email') !!}">
            <label>{{__('E-Mail')}}</label>
            {!! Form::text('email', null, array('class'=>'form-control', 'id'=>'email', 'placeholder'=>__('Company Email'))) !!}
          <span style="color: #ea5c90;position: relative;top:8px;">  {!! APFrmErrHelp::showErrors($errors, 'email') !!}  </span> </div>
    </div>
    <div class="col-md-4">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'password') !!}">
            <label>{{__('Passwort')}}</label>
            {!! Form::password('password', array('class'=>'form-control', 'id'=>'password', 'placeholder'=>__('Passwort'))) !!}
            <span style="color: #ea5c90;position: relative;top:8px;">    {!! APFrmErrHelp::showErrors($errors, 'password') !!} </span> </div>
    </div>
</div>
<hr>


<h5>{{__('Informationen zum Unternehmen')}}</h5>
<div class="row">
    <div class="col-md-6">
        <div class="formrow">
            <label>{{__('Firmenlogo')}}</label>
            {{ ImgUploader::print_image("company_logos/$company->logo", 100, 100) }} </div>
    </div>
    <div class="col-md-6">
        <div class="formrow">
            <div id="thumbnail"></div>
            <label class="btn btn-default"> {{__('Select Company Logo')}}
                <input type="file" name="logo" id="logo" style="display: none;">
            </label>
            <span style="color: #ea5c90;position: relative;top:8px;">    {!! APFrmErrHelp::showErrors($errors, 'logo') !!} </span> </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'name') !!}">
            <label>{{__('Company Name')}}</label>
            {!! Form::text('name', null, array('class'=>'form-control', 'id'=>'name', 'placeholder'=>__('Name des Unternehmens'))) !!}
            <span style="color: #ea5c90;position: relative;top:8px;">    {!! APFrmErrHelp::showErrors($errors, 'name') !!} </span> </div>
    </div>

    <div class="col-md-6">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'ceo') !!}">
            <label>{{__('Name des CEO')}}</label>
            {!! Form::text('ceo', null, array('class'=>'form-control', 'id'=>'ceo', 'placeholder'=>__('CEO des Unternehmens'))) !!}
            <span style="color: #ea5c90;position: relative;top:8px;">     {!! APFrmErrHelp::showErrors($errors, 'ceo') !!} </span> </div>
    </div>
    <div class="col-md-6">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'industry_id') !!}">
            <label>{{__('Branche')}}</label>
            {!! Form::select('industry_id', ['' => __('Branche auswählen')]+$industries, null, array('class'=>'form-control', 'id'=>'industry_id')) !!}
            <span style="color: #ea5c90;position: relative;top:8px;">   {!! APFrmErrHelp::showErrors($errors, 'industry_id') !!} </span> </div>
    </div>
    <div class="col-md-6">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'ownership_type') !!}">
            <label>{{__('Eigentümerschaft')}}</label>
            {!! Form::select('ownership_type_id', ['' => __('auswählen Eigentumstyp')]+$ownershipTypes, null, array('class'=>'form-control', 'id'=>'ownership_type_id')) !!}
            <span style="color: #ea5c90;position: relative;top:8px;">   {!! APFrmErrHelp::showErrors($errors, 'ownership_type_id') !!} </span> </div>
    </div>
    <div class="col-md-12">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'description') !!}">
            <label>{{__('Beschreibung')}}</label>
            {!! Form::textarea('description', null, array('class'=>'form-control', 'id'=>'description', 'placeholder'=>__('Company details'))) !!}
            <span style="color: #ea5c90;position: relative;top:8px;">   {!! APFrmErrHelp::showErrors($errors, 'description') !!} </span> </div>
    </div>
    <div class="col-md-12">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'location') !!}">
            <label>{{__('Address')}}</label>
            {!! Form::text('location', null, array('class'=>'form-control', 'id'=>'location', 'placeholder'=>__('Location'))) !!}
            {!! APFrmErrHelp::showErrors($errors, 'location') !!} </div>
    </div>

    <div class="col-md-12">
        <div class="formrow">
            <label>{{__('straße')}}</label>
            {!! Form::text('strabe', '', array('class'=>'form-control', 'placeholder'=>__($company->strabe),'required' => 'required','oninvalid'=>"this.setCustomValidity('Bitte füllen Sie dieses Feld aus')",'oninput'=>"this.setCustomValidity('')")) !!}
        </div>
    </div>

    <div class="col-md-12">
        <div class="formrow">
            <label>{{__('Bundesland')}}</label>
            {!! Form::text('bundesland', '', array('class'=>'form-control', 'placeholder'=>__($company->bundesland),'required' => 'required','oninvalid'=>"this.setCustomValidity('Bitte füllen Sie dieses Feld aus')",'oninput'=>"this.setCustomValidity('')")) !!}
             </div>
    </div>

    <div class="col-md-12">
        <div class="formrow">
            <label>{{__('Plz')}}</label>
            {!! Form::text('plz', '', array('class'=>'form-control', 'placeholder'=>__($company->plz),'required' => 'required','oninvalid'=>"this.setCustomValidity('Bitte füllen Sie dieses Feld aus')",'oninput'=>"this.setCustomValidity('')")) !!}
        </div>
    </div>

    <div class="col-md-12">
        <div class="formrow">
            <label>{{__('Hausnummer')}}</label>
            {!! Form::text('hausnummer', '', array('class'=>'form-control', 'placeholder'=>__($company->hausnummer),'required' => 'required','oninvalid'=>"this.setCustomValidity('Bitte füllen Sie dieses Feld aus')",'oninput'=>"this.setCustomValidity('')")) !!}
        </div>
    </div>

    <div class="col-md-4">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'no_of_offices') !!}">
            <label>{{__('Anzahl der Büros')}}</label>
            {!! Form::select('no_of_offices', ['' => __('Anzahl der Büros auswählen')]+MiscHelper::getNumOffices(), null, array('class'=>'form-control', 'id'=>'no_of_offices')) !!}
            <span style="color: #ea5c90;position: relative;top:8px;">  {!! APFrmErrHelp::showErrors($errors, 'no_of_offices') !!} </span> </div>
    </div>
    <div class="col-md-4">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'no_of_employees') !!}">
            <label>{{__('Anzahl der Mitarbeiter')}}</label>
            {!! Form::select('no_of_employees', ['' => __('Anzahl der Büros auswählen')]+MiscHelper::getNumEmployees(), null, array('class'=>'form-control', 'id'=>'no_of_employees')) !!}
            <span style="color: #ea5c90;">   {!! APFrmErrHelp::showErrors($errors, 'no_of_employees') !!} </span> </div>
    </div>
    <div class="col-md-4">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'established_in') !!}">
            <label>{{__('Established In')}}</label>
            {!! Form::select('established_in', ['' => __('Select Established In')]+MiscHelper::getEstablishedIn(), null, array('class'=>'form-control', 'id'=>'established_in')) !!}
            <span style="color: #ea5c90;position: relative;top:8px;">  {!! APFrmErrHelp::showErrors($errors, 'established_in') !!} </span> </div>
    </div>
    <div class="col-md-4">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'website') !!}">
            <label>{{__('URL der Website')}}</label>
            {!! Form::text('website', null, array('class'=>'form-control', 'id'=>'website', 'placeholder'=>__('Website'))) !!}
            <span style="color: #ea5c90;position: relative;top:8px;">  {!! APFrmErrHelp::showErrors($errors, 'website') !!} </span> </div>
    </div>


    <div class="col-md-4">
        <div class="formrow">
            <label>{{__('Fax')}}</label>
            {!! Form::text('fax', null, array('class'=>'form-control', 'id'=>'fax', 'placeholder'=>__('Fax'))) !!}
             </div>
    </div>
    <div class="col-md-4">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'phone') !!}">
            <label>{{__('Telefonnummer')}}</label>
            {!! Form::text('phone','', array('class'=>'form-control', 'id'=>'phone', 'placeholder'=>__($company->telefon))) !!}
            <span style="color: #ea5c90;position: relative;top:8px;">   {!! APFrmErrHelp::showErrors($errors, 'phone') !!} </span> </div>
    </div>
    <div class="clearfix"></div>
    <div class="col-md-6">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'facebook') !!}">
            <label>{{__('Facebook')}}</label>
            {!! Form::text('facebook', null, array('class'=>'form-control', 'id'=>'facebook', 'placeholder'=>__('Facebook'))) !!}
            <span style="color: #ea5c90;position: relative;top:8px;">  {!! APFrmErrHelp::showErrors($errors, 'facebook') !!} </span> </div>
    </div>
    <div class="col-md-6">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'twitter') !!}">
            <label>{{__('Twitter')}}</label>
            {!! Form::text('twitter', null, array('class'=>'form-control', 'id'=>'twitter', 'placeholder'=>__('Twitter'))) !!}
            <span style="color: #ea5c90;position: relative;top:8px;">   {!! APFrmErrHelp::showErrors($errors, 'twitter') !!} </span> </div>
    </div>
    <div class="col-md-4">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'linkedin') !!}">
            <label>{{__('LinkedIn')}}</label>
            {!! Form::text('linkedin', null, array('class'=>'form-control', 'id'=>'linkedin', 'placeholder'=>__('Linkedin'))) !!}
            <span style="color: #ea5c90;position: relative;top:8px;">   {!! APFrmErrHelp::showErrors($errors, 'linkedin') !!} </span> </div>
    </div>
    <div class="col-md-4">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'google_plus') !!}">
            <label>{{__('Google Plus')}}</label>
            {!! Form::text('google_plus', null, array('class'=>'form-control', 'id'=>'google_plus', 'placeholder'=>__('Google+'))) !!}
            <span style="color: #ea5c90;position: relative;top:8px;">   {!! APFrmErrHelp::showErrors($errors, 'google_plus') !!} </span> </div>
    </div>
    <div class="col-md-4">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'pinterest') !!}">
            <label>{{__('Pinterest')}}</label>
            {!! Form::text('pinterest', null, array('class'=>'form-control', 'id'=>'pinterest', 'placeholder'=>__('Pinterest'))) !!}
            <span style="color: #ea5c90;position: relative;top:8px;">  {!! APFrmErrHelp::showErrors($errors, 'pinterest') !!} </span> </div>
    </div>
    <div class="col-md-4">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'country_id') !!}">
            <label>{{__('Land')}}</label>
            {!! Form::select('country_id', ['' => __('Land auswählen')]+$countries, old('country_id', (isset($company))? $company->country_id:$siteSetting->default_country_id), array('class'=>'form-control', 'id'=>'country_id')) !!}
            <span style="color: #ea5c90;position: relative;top:8px;">   {!! APFrmErrHelp::showErrors($errors, 'country_id') !!} </span> </div>
    </div>
    <div class="col-md-4">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'state_id') !!}">
            <label>{{__('Staat')}}</label>
            <span id="default_state_dd"> {!! Form::select('state_id', ['' => __('Staat auswählen')], null, array('class'=>'form-control', 'id'=>'state_id')) !!} </span> {!! APFrmErrHelp::showErrors($errors, 'state_id') !!} </div>
    </div>
    <div class="col-md-4">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'city_id') !!}">
            <label>{{__('Stadt')}}</label>
            <span id="default_city_dd"> {!! Form::select('city_id', ['' => __('Stadt auswählen')], null, array('class'=>'form-control', 'id'=>'city_id')) !!} </span> {!! APFrmErrHelp::showErrors($errors, 'city_id') !!} </div>
    </div>
    <div class="col-md-12">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'map') !!}">
            <label>{{__('Google Map Iframe')}}</label>
            {!! Form::textarea('map', null, array('class'=>'form-control', 'id'=>'map', 'placeholder'=>__('Google Map'))) !!}
            <span style="color: #ea5c90;position: relative;top:8px;">   {!! APFrmErrHelp::showErrors($errors, 'map') !!}  </span> </div>
    </div>
    <div class="col-md-12">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'is_subscribed') !!}">
            <?php
            $is_checked = 'checked="checked"';
            if (old('is_subscribed', ((isset($company)) ? $company->is_subscribed : 1)) == 0) {
                $is_checked = '';
            }
            ?>
            <input type="checkbox" value="1" name="is_subscribed" {{$is_checked}} />
                <span style="margin-left: 6px;font-size:16px;">   {{__('Newsletter abonnieren')}} </span>
                <span style="color: #ea5c90;position: relative;top:8px;">    {!! APFrmErrHelp::showErrors($errors, 'is_subscribed') !!} </span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="formrow">
            <button type="submit" class="btn">{{__('Profil aktualisieren und speichern')}} <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
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
    </style>
@endpush
@push('scripts')
    @include('includes.tinyMCEFront')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#country_id').on('change', function (e) {
                e.preventDefault();
                filterLangStates(0);
            });
            $(document).on('change', '#state_id', function (e) {
                e.preventDefault();
                filterLangCities(0);
            });
            filterLangStates(<?php echo old('state_id', (isset($company)) ? $company->state_id : 0); ?>);

            /*******************************/
            var fileInput = document.getElementById("logo");
            fileInput.addEventListener("change", function (e) {
                var files = this.files
                showThumbnail(files)
            }, false)
        });

        function showThumbnail(files) {
            $('#thumbnail').html('');
            for (var i = 0; i < files.length; i++) {
                var file = files[i]
                var imageType = /image.*/
                if (!file.type.match(imageType)) {
                    console.log("Not an Image");
                    continue;
                }
                var reader = new FileReader()
                reader.onload = (function (theFile) {
                    return function (e) {
                        $('#thumbnail').append('<div class="fileattached" style="margin-bottom: 14px;"><img height="100px" style="margin-bottom: 14px;" src="' + e.target.result + '" > <div>' + theFile.name + '</div><div class="clearfix"></div></div>');
                    };
                }(file))
                var ret = reader.readAsDataURL(file);
            }
        }


        function filterLangStates(state_id)
        {
            var country_id = $('#country_id').val();
            if (country_id != '') {
                $.post("{{ route('filter.lang.states.dropdown') }}", {country_id: country_id, state_id: state_id, _method: 'POST', _token: '{{ csrf_token() }}'})
                    .done(function (response) {
                        $('#default_state_dd').html(response);
                        filterLangCities(<?php echo old('city_id', (isset($company)) ? $company->city_id : 0); ?>);
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
