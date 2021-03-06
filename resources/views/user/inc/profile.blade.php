
{!! Form::model($user, array('method' => 'put', 'route' => array('my.profile'), 'class' => 'form', 'files'=>true)) !!}

<h5>{{__('Account Information')}}</h5>
<div class="row">
<div class="col-md-6">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'email') !!}">
			<label for="">{{__('E-Mail')}}</label>
			{!! Form::text('email', null, array('class'=>'form-control', 'id'=>'email', 'placeholder'=>__('Email'))) !!}
            {!! APFrmErrHelp::showErrors($errors, 'email') !!} </div>
    </div>
    <div class="col-md-6">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'password') !!}">
			<label for="">{{__('Passwort')}}</label>
			{!! Form::password('password', array('class'=>'form-control', 'id'=>'password', 'placeholder'=>__('Password'))) !!}
            {!! APFrmErrHelp::showErrors($errors, 'password') !!} </div>
    </div>
</div>

<hr>

<h5>{{__('Persönliche Informationen')}}</h5>

<div class="row">
    <div class="col-md-6">
        <div class="formrow">
			<label>{{__('Profilbild')}}</label>
			{{ ImgUploader::print_image("user_images/$user->image", 100, 100) }} </div>
    </div>
    <div class="col-md-6">
        <div class="formrow">
            <div id="thumbnail"></div>
            <label class="btn btn-default"> {{__('Profilbild auswählen')}}
                <input type="file" name="image" id="image" style="display: none;">
            </label>
            {!! APFrmErrHelp::showErrors($errors, 'image') !!} </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'first_name') !!}">
			<label for="">{{__('Vorname')}}</label>
			{!! Form::text('first_name', null, array('class'=>'form-control', 'id'=>'first_name', 'placeholder'=>__('Vorname'),'required' => 'required','oninvalid'=>"this.setCustomValidity('Bitte füllen Sie dieses Feld aus')",'oninput'=>"this.setCustomValidity('')")) !!}
            {!! APFrmErrHelp::showErrors($errors, 'first_name') !!} </div>
    </div>
    <div class="col-md-6">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'middle_name') !!}">
			<label for="">{{__('Zweiter Vorname')}}</label>
			{!! Form::text('middle_name', null, array('class'=>'form-control', 'id'=>'middle_name', 'placeholder'=>__('Middle Name'),'required' => 'required','oninvalid'=>"this.setCustomValidity('Bitte füllen Sie dieses Feld aus')",'oninput'=>"this.setCustomValidity('')")) !!}
            {!! APFrmErrHelp::showErrors($errors, 'middle_name') !!}</div>
    </div>
    <div class="col-md-6">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'last_name') !!}">
			<label for="">{{__('Nachname')}}</label>
			{!! Form::text('last_name', null, array('class'=>'form-control', 'id'=>'last_name', 'placeholder'=>__('Nachname'),'required' => 'required','oninvalid'=>"this.setCustomValidity('Bitte füllen Sie dieses Feld aus')",'oninput'=>"this.setCustomValidity('')")) !!}
            {!! APFrmErrHelp::showErrors($errors, 'last_name') !!}</div>
    </div>
    <div class="col-md-6">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'father_name') !!}">
			<label for="">{{__('Der Name des Vaters')}}</label>
			{!! Form::text('father_name', null, array('class'=>'form-control', 'id'=>'father_name', 'placeholder'=>__('Der Name des Vaters'),'required' => 'required','oninvalid'=>"this.setCustomValidity('Bitte füllen Sie dieses Feld aus')",'oninput'=>"this.setCustomValidity('')")) !!}
            {!! APFrmErrHelp::showErrors($errors, 'father_name') !!} </div>
    </div>
    
    <div class="col-md-6">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'gender_id') !!}">
			<label for="">{{__('Geschlecht')}}</label>
			{!! Form::select('gender_id', [''=>__('Wähle Geschlecht')]+$genders, null, array('class'=>'form-control', 'id'=>'gender_id','required' => 'required','oninvalid'=>"this.setCustomValidity('Bitte füllen Sie dieses Feld aus')",'oninput'=>"this.setCustomValidity('')")) !!}
            {!! APFrmErrHelp::showErrors($errors, 'gender_id') !!} </div>
    </div>
    <div class="col-md-6">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'marital_status_id') !!}">
			<label for="">{{__('Familienstand')}}</label>
			{!! Form::select('marital_status_id', [''=>__('Select Marital Status')]+$maritalStatuses, null, array('class'=>'form-control', 'id'=>'marital_status_id','required' => 'required','oninvalid'=>"this.setCustomValidity('Bitte füllen Sie dieses Feld aus')",'oninput'=>"this.setCustomValidity('')")) !!}
            {!! APFrmErrHelp::showErrors($errors, 'marital_status_id') !!} </div>
    </div>
    <div class="col-md-6">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'country_id') !!}">
			<label for="">{{__('Land')}}</label>
            <?php $country_id = old('country_id', (isset($user) && (int) $user->country_id > 0) ? $user->country_id : $siteSetting->default_country_id); ?>
            {!! Form::select('country_id', [''=>__('Land auswählen')]+$countries, $country_id, array('class'=>'form-control', 'id'=>'country_id','required' => 'required','oninvalid'=>"this.setCustomValidity('Bitte füllen Sie dieses Feld aus')",'oninput'=>"this.setCustomValidity('')")) !!}
            {!! APFrmErrHelp::showErrors($errors, 'country_id') !!} </div>
    </div>
    <div class="col-md-6">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'state_id') !!}">
			<label for="">{{__('Staat')}}</label>
			<span id="state_dd"> {!! Form::select('state_id', [''=>__('Staat auswählen')], null, array('class'=>'form-control', 'id'=>'state_id','required' => 'required','oninvalid'=>"this.setCustomValidity('Bitte füllen Sie dieses Feld aus')",'oninput'=>"this.setCustomValidity('')")) !!} </span> {!! APFrmErrHelp::showErrors($errors, 'state_id') !!} </div>
    </div>
    <div class="col-md-6">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'city_id') !!}">
			<label for="">{{__('Stadt')}}</label>
			<span id="city_dd"> {!! Form::select('city_id', [''=>__('Stadt auswählen')], null, array('class'=>'form-control', 'id'=>'city_id','required' => 'required','oninvalid'=>"this.setCustomValidity('Bitte füllen Sie dieses Feld aus')",'oninput'=>"this.setCustomValidity('')")) !!} </span> {!! APFrmErrHelp::showErrors($errors, 'city_id') !!} </div>
    </div>
    <div class="col-md-6">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'nationality_id') !!}">
			<label for="">{{__('Nationalität')}}</label>
			{!! Form::select('nationality_id', [''=>__('Wählen Sie Nationalität')]+$nationalities, null, array('class'=>'form-control', 'id'=>'nationality_id','required' => 'required','oninvalid'=>"this.setCustomValidity('Bitte füllen Sie dieses Feld aus')",'oninput'=>"this.setCustomValidity('')")) !!}
            {!! APFrmErrHelp::showErrors($errors, 'nationality_id') !!} </div>
    </div>
    <div class="col-md-6">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'date_of_birth') !!}">
			<label for="">{{__('Geburtsdatum')}}</label>
			{!! Form::date('date_of_birth', null, array('class'=>'form-control', 'id'=>'date_of_birth', 'placeholder'=>__('Date of Birth'), 'autocomplete'=>'off','required' => 'required','oninvalid'=>"this.setCustomValidity('Bitte füllen Sie dieses Feld aus')",'oninput'=>"this.setCustomValidity('')")) !!}
            {!! APFrmErrHelp::showErrors($errors, 'date_of_birth') !!} </div>
    </div>
    <div class="col-md-6">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'national_id_card_number') !!}">
			<label for="">{{__('Personalausweis')}}</label>
			{!! Form::text('national_id_card_number', null, array('class'=>'form-control', 'id'=>'national_id_card_number', 'placeholder'=>__('Personalausweis'),'required' => 'required','oninvalid'=>"this.setCustomValidity('Bitte füllen Sie dieses Feld aus')",'oninput'=>"this.setCustomValidity('')")) !!}
            {!! APFrmErrHelp::showErrors($errors, 'national_id_card_number') !!} </div>
    </div>
    <div class="col-md-6">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'Telefonnummer') !!}">
			<label for="">{{__('Telefonnummer')}}</label>
			{!! Form::text('phone', null, array('class'=>'form-control', 'id'=>'Telefonnummer', 'placeholder'=>__('Telefonnummer'),'required' => 'required','oninvalid'=>"this.setCustomValidity('Bitte füllen Sie dieses Feld aus')",'oninput'=>"this.setCustomValidity('')")) !!}
            {!! APFrmErrHelp::showErrors($errors, 'Telefonnummer') !!} </div>
    </div>
    <div class="col-md-6">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'mobile_num') !!}">
			<label for="">{{__('Mobiltelefon')}}</label>
			{!! Form::text('mobile_num', null, array('class'=>'form-control', 'id'=>'mobile_num', 'placeholder'=>__('Handynummer'),'required' => 'required','oninvalid'=>"this.setCustomValidity('Bitte füllen Sie dieses Feld aus')",'oninput'=>"this.setCustomValidity('')")) !!}
            {!! APFrmErrHelp::showErrors($errors, 'mobile_num') !!} </div>
    </div>   
    <div class="col-md-12">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'street_address') !!}">
			<label for="">{{__('Street Address')}}</label>
			{!! Form::text('street_address', null, array('class'=>'form-control', 'id'=>'street_address', 'placeholder'=>__('Street Address'),'required' => 'required','oninvalid'=>"this.setCustomValidity('Bitte füllen Sie dieses Feld aus')",'oninput'=>"this.setCustomValidity('')")) !!}
            {!! APFrmErrHelp::showErrors($errors, 'street_address') !!} </div>
    </div>
	
</div>

<hr>

<h5>{{__('Career Information')}}</h5>

<div class="row">
 <div class="col-md-6">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'job_experience_id') !!}">
			<label for="">{{__('Berufserfahrung')}}</label>
			{!! Form::select('job_experience_id', [''=>__('Wählen Sie Erfahrung')]+$jobExperiences, null, array('class'=>'form-control', 'id'=>'job_experience_id','required' => 'required','oninvalid'=>"this.setCustomValidity('Bitte füllen Sie dieses Feld aus')",'oninput'=>"this.setCustomValidity('')")) !!}
            {!! APFrmErrHelp::showErrors($errors, 'job_experience_id') !!} </div>
    </div>
    <div class="col-md-6">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'career_level_id') !!}">
			<label for="">{{__('Karrierelevel')}}</label>
			{!! Form::select('career_level_id', [''=>__('Wählen Sie Karrierestufe')]+$careerLevels, null, array('class'=>'form-control', 'id'=>'career_level_id','required' => 'required','oninvalid'=>"this.setCustomValidity('Bitte füllen Sie dieses Feld aus')",'oninput'=>"this.setCustomValidity('')")) !!}
            {!! APFrmErrHelp::showErrors($errors, 'career_level_id') !!} </div>
    </div>
    <div class="col-md-6">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'industry_id') !!}">
			<label for="">{{__('Wählen Sie Industrie')}}</label>
			{!! Form::select('industry_id', [''=>__('Select Industry')]+$industries, null, array('class'=>'form-control', 'id'=>'industry_id','required' => 'required','oninvalid'=>"this.setCustomValidity('Bitte füllen Sie dieses Feld aus')",'oninput'=>"this.setCustomValidity('')")) !!}
            {!! APFrmErrHelp::showErrors($errors, 'industry_id') !!} </div>
    </div>
    <div class="col-md-6">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'functional_area_id') !!}">
			<label for="">{{__('Funktionsbereich auswahlen')}}</label>
			{!! Form::select('functional_area_id', [''=>__('Funktionsbereich auswählen')]+$functionalAreas, null, array('class'=>'form-control', 'id'=>'functional_area_id','required' => 'required','oninvalid'=>"this.setCustomValidity('Bitte füllen Sie dieses Feld aus')",'oninput'=>"this.setCustomValidity('')")) !!}
            {!! APFrmErrHelp::showErrors($errors, 'functional_area_id') !!} </div>
    </div>
    <div class="col-md-4">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'current_salary') !!}">
			<label for="">{{__('Aktuelles Gehalt')}}</label>
			{!! Form::text('current_salary', null, array('class'=>'form-control', 'id'=>'current_salary', 'placeholder'=>__('Current Salary'),'required' => 'required','oninvalid'=>"this.setCustomValidity('Bitte füllen Sie dieses Feld aus')",'oninput'=>"this.setCustomValidity('')")) !!}
            {!! APFrmErrHelp::showErrors($errors, 'current_salary') !!} </div>
    </div>
    <div class="col-md-4">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'expected_salary') !!}">
			<label for="">{{__('Erwartetes Gehalt')}}</label>
			{!! Form::text('expected_salary', null, array('class'=>'form-control', 'id'=>'expected_salary', 'placeholder'=>__('Expected Salary'),'required' => 'required','oninvalid'=>"this.setCustomValidity('Bitte füllen Sie dieses Feld aus')",'oninput'=>"this.setCustomValidity('')")) !!}
            {!! APFrmErrHelp::showErrors($errors, 'expected_salary') !!} </div>
    </div>
    <div class="col-md-4">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'salary_currency') !!}">
			<label for="">{{__('Wahrung')}}</label>
            @php
            $salary_currency = Request::get('salary_currency', (isset($user) && !empty($user->salary_currency))? $user->salary_currency:$siteSetting->default_currency_code);
            @endphp
            {!! Form::text('salary_currency', $salary_currency, array('class'=>'form-control', 'id'=>'salary_currency', 'placeholder'=>__('Salary Currency'), 'autocomplete'=>'off','required' => 'required','oninvalid'=>"this.setCustomValidity('Bitte füllen Sie dieses Feld aus')",'oninput'=>"this.setCustomValidity('')")) !!}
            {!! APFrmErrHelp::showErrors($errors, 'salary_currency') !!} </div>
    </div>
</div>
	
	
	
	<div class="row">
	
    <div class="col-md-12">
    <div class="formrow {!! APFrmErrHelp::hasError($errors, 'is_subscribed') !!}">
    <?php
	$is_checked = 'checked="checked"';	
	if (old('is_subscribed', ((isset($user)) ? $user->is_subscribed : 1)) == 0) {
		$is_checked = '';
	}
	?>
      <input type="checkbox" value="1" name="is_subscribed" {{$is_checked}} />
      {{__('Newsletter abonnieren')}}
      {!! APFrmErrHelp::showErrors($errors, 'is_subscribed') !!}
      </div>
  </div>
    <div class="col-md-12">
        <div class="formrow"><button type="submit" class="btn">{{__('PROFIL AKTUALISIEREN')}}  <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button></div>
    </div>
</div>


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
<script type="text/javascript">
    $(document).ready(function () {
        initdatepicker();
        $('#salary_currency').typeahead({
            source: function (query, process) {
                return $.get("{{ route('typeahead.currency_codes') }}", {query: query}, function (data) {
                    console.log(data);
                    data = $.parseJSON(data);
                    return process(data);
                });
            }
        });

        $('#country_id').on('change', function (e) {
            e.preventDefault();
            filterStates(0);
        });
        $(document).on('change', '#state_id', function (e) {
            e.preventDefault();
            filterCities(0);
        });
        filterStates(<?php echo old('state_id', $user->state_id); ?>);

        /*******************************/
        var fileInput = document.getElementById("image");
        fileInput.addEventListener("change", function (e) {
            var files = this.files
            showThumbnail(files)
        }, false)
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
    });

    function filterStates(state_id)
    {
        var country_id = $('#country_id').val();
        if (country_id != '') {
            $.post("{{ route('filter.lang.states.dropdown') }}", {country_id: country_id, state_id: state_id, _method: 'POST', _token: '{{ csrf_token() }}'})
                    .done(function (response) {
                        $('#state_dd').html(response);
                        filterCities(<?php echo old('city_id', $user->city_id); ?>);
                    });
        }
    }
    function filterCities(city_id)
    {
        var state_id = $('#state_id').val();
        if (state_id != '') {
            $.post("{{ route('filter.lang.cities.dropdown') }}", {state_id: state_id, city_id: city_id, _method: 'POST', _token: '{{ csrf_token() }}'})
                    .done(function (response) {
                        $('#city_dd').html(response);
                    });
        }
    }
    function initdatepicker() {
        $(".datepicker").datepicker({
            autoclose: true,
            format: 'yyyy-m-d'
        });
    }
</script> 
@endpush            
