
{!! Form::model($company, array('method' => 'put', 'route' => array('update.company.profile'), 'class' => 'form', 'files'=>true)) !!}
<h5>{{__('Acount Information')}}</h5>
<div class="row">
<div class="col-md-4">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'email') !!}">
			<label>{{__('Email')}}</label>
			{!! Form::text('email', null, array('class'=>'form-control', 'id'=>'email', 'placeholder'=>__('Company Email'))) !!}
            
            <br/>
            <small  class="error text-danger">{!! APFrmErrHelp::showErrors($errors, 'email') !!}</small>
           
             </div>
    </div>
    <div class="col-md-4">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'password') !!}">
			<label>{{__('Password')}}</label>
			{!! Form::password('password', array('class'=>'form-control', 'id'=>'password', 'placeholder'=>__('Password'))) !!}
            
            <br/>
            <small  class="error text-danger">{!! APFrmErrHelp::showErrors($errors, 'password') !!} </small>
           
            </div>

            </div>
    </div>
</div>
<hr>


<h5>{{__('Company Information')}}</h5>
<div class="row">
    <div class="col-md-6">
        <div class="formrow">
			<label>{{__('Company Logo')}}</label>
			{{ ImgUploader::print_image("company_logos/$company->logo", 100, 100) }} </div>
    </div>
    <div class="col-md-6">
        <div class="formrow">
            <div id="thumbnail"></div>
            <label class="btn btn-default"> {{__('Select Company Logo')}}
                <input type="file" name="logo" id="logo" style="display: none;">
            </label>
            <br/>
            <small  class="error text-danger">{!! APFrmErrHelp::showErrors($errors, 'logo') !!} </small>
           
             </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'name') !!}">
			<label >{{__('Company Name')}}</label>
			{!! Form::text('name', null, array('class'=>'form-control', 'id'=>'name', 'placeholder'=>__('Company Name'))) !!}
          <br/>
            <small  class="error text-danger">{!! APFrmErrHelp::showErrors($errors, 'name') !!}</small>
             </div>
    </div>
    
    <div class="col-md-6">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'ceo') !!}">
			<label>{{__('CEO Name')}}</label>
			{!! Form::text('ceo', null, array('class'=>'form-control', 'id'=>'ceo', 'placeholder'=>__('Company CEO'))) !!}
            <br/>
            <small  class="error text-danger">{!! APFrmErrHelp::showErrors($errors, 'ceo') !!} </small>
           
             </div>
    </div>
    <div class="col-md-6">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'industry_id') !!}">
			<label>{{__('Industry')}}</label>
			{!! Form::select('industry_id', ['' => __('Select Industry')]+$industries, null, array('class'=>'form-control', 'id'=>'industry_id')) !!}
             
            <br/>
            <small  class="error text-danger">{!! APFrmErrHelp::showErrors($errors, 'industry_id') !!} </small>
           
            </div>
    </div>
    <div class="col-md-6">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'ownership_type') !!}">
			<label>{{__('Ownership')}}</label>
			{!! Form::select('ownership_type_id', ['' => __('Select Ownership type')]+$ownershipTypes, null, array('class'=>'form-control', 'id'=>'ownership_type_id')) !!}
           
            <br/>
            <small  class="error text-danger"> {!! APFrmErrHelp::showErrors($errors, 'ownership_type_id') !!} </small>
           
            </div>
    </div>
    <div class="col-md-12">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'description') !!}">
			<label>{{__('Description')}}</label>
			{!! Form::textarea('description', null, array('class'=>'form-control', 'id'=>'description', 'placeholder'=>__('Company details'))) !!}
           
            <br/>
            <small  class="error text-danger">  {!! APFrmErrHelp::showErrors($errors, 'description') !!} </small>
            </div>
    </div>
    <div class="col-md-12">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'location') !!}">
			<label>{{__('Address')}}</label>
			{!! Form::text('location', null, array('class'=>'form-control', 'id'=>'location', 'placeholder'=>__('Location'))) !!}
            
            <br/>
            <small  class="error text-danger"> {!! APFrmErrHelp::showErrors($errors, 'location') !!}  </small>
           
            </div>
			{!! Form::text('location', '', array('class'=>'form-control', 'id'=>'location', 'placeholder'=>__($company->strabe))) !!}
            {!! APFrmErrHelp::showErrors($errors, 'location') !!} </div>
    </div>
    <div class="col-md-4">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'no_of_offices') !!}">
			<label>{{__('Anzahl der Büros')}}</label>
			{!! Form::select('no_of_offices', ['' => __('Anzahl der Büros auswählen')]+MiscHelper::getNumOffices(), null, array('class'=>'form-control', 'id'=>'no_of_offices')) !!}
            
            <br/>
            <small  class="error text-danger"> {!! APFrmErrHelp::showErrors($errors, 'no_of_offices') !!} </small>
           
             </div>
    </div>
	<div class="col-md-4">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'no_of_employees') !!}">
			<label>{{__('Anzahl der Mitarbeiter')}}</label>
			{!! Form::select('no_of_employees', ['' => __('Anzahl der Büros auswählen')]+MiscHelper::getNumEmployees(), null, array('class'=>'form-control', 'id'=>'no_of_employees')) !!}
           
            <br/>
            <small  class="error text-danger"> {!! APFrmErrHelp::showErrors($errors, 'no_of_employees') !!}</small>
            </div>
    </div>
	<div class="col-md-4">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'established_in') !!}">
			<label>{{__('Etabliert in')}}</label>
			{!! Form::select('established_in', ['' => __('Select Etabliert in')]+MiscHelper::getEstablishedIn(), null, array('class'=>'form-control', 'id'=>'established_in')) !!}
           
            <br/>
            <small  class="error text-danger"> {!! APFrmErrHelp::showErrors($errors, 'established_in') !!}</small>
           </div>
    </div>
    <div class="col-md-4">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'website') !!}">
			<label>{{__('URL der Website')}}</label>
			{!! Form::text('website', null, array('class'=>'form-control', 'id'=>'website', 'placeholder'=>__('Website'))) !!}
         
            <br/>
            <small  class="error text-danger">    {!! APFrmErrHelp::showErrors($errors, 'website') !!}</small>
           </div>
    </div>
    
    
    <div class="col-md-4">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'fax') !!}">
			<label>{{__('Fax')}}</label>
			{!! Form::text('fax', null, array('class'=>'form-control', 'id'=>'fax', 'placeholder'=>__('Fax'))) !!}
            
            <br/>
            <small  class="error text-danger">{!! APFrmErrHelp::showErrors($errors, 'fax') !!}</small>
          
             </div>
    </div>
    <div class="col-md-4">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'Telefonnummer') !!}">
			<label>{{__('Telefonnummer')}}</label>
			{!! Form::text('Telefonnummer', null, array('class'=>'form-control', 'id'=>'Telefonnummer', 'placeholder'=>__('Telefonnummer'))) !!}
           
            <br/>
            <small  class="error text-danger"> {!! APFrmErrHelp::showErrors($errors, 'Telefonnummer') !!}</small>
         
             </div>
            
			{!! Form::text('fax', '', array('class'=>'form-control', 'id'=>'fax', 'placeholder'=>__($company->hausnummer))) !!}
            {!! APFrmErrHelp::showErrors($errors, 'fax') !!} </div>
    </div>
    <div class="col-md-4">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'phone') !!}">
			<label>{{__('Phone')}}</label>
			{!! Form::text('phone','', array('class'=>'form-control', 'id'=>'phone', 'placeholder'=>__($company->telefon))) !!}
            {!! APFrmErrHelp::showErrors($errors, 'phone') !!} </div>
    </div>
    <div class="clearfix"></div>
    <div class="col-md-6">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'facebook') !!}">
			<label>{{__('Facebook')}}</label>
			{!! Form::text('facebook', null, array('class'=>'form-control', 'id'=>'facebook', 'placeholder'=>__('Facebook'))) !!}
            
            <br/>
            <small  class="error text-danger">{!! APFrmErrHelp::showErrors($errors, 'facebook') !!} </small>
         
           
            </div>
    </div>
    <div class="col-md-6">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'twitter') !!}">
			<label>{{__('Twitter')}}</label>
			{!! Form::text('twitter', null, array('class'=>'form-control', 'id'=>'twitter', 'placeholder'=>__('Twitter'))) !!}
            
            <br/>
            <small  class="error text-danger">{!! APFrmErrHelp::showErrors($errors, 'twitter') !!} </small>
         
           
             </div>
    </div>
    <div class="col-md-4">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'linkedin') !!}">
			<label>{{__('LinkedIn')}}</label>
			{!! Form::text('linkedin', null, array('class'=>'form-control', 'id'=>'linkedin', 'placeholder'=>__('Linkedin'))) !!}
            
            <br/>
            <small  class="error text-danger">{!! APFrmErrHelp::showErrors($errors, 'linkedin') !!}  </small>
         
            </div>
    </div>
    <div class="col-md-4">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'google_plus') !!}">
			<label>{{__('Google Plus')}}</label>
			{!! Form::text('google_plus', null, array('class'=>'form-control', 'id'=>'google_plus', 'placeholder'=>__('Google+'))) !!}
           
            <br/>
            <small  class="error text-danger"> {!! APFrmErrHelp::showErrors($errors, 'google_plus') !!}  </small>
         </div>
    </div>
    <div class="col-md-4">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'pinterest') !!}">
			<label>{{__('Pinterest')}}</label>
			{!! Form::text('pinterest', null, array('class'=>'form-control', 'id'=>'pinterest', 'placeholder'=>__('Pinterest'))) !!}
             
            <br/>
            <small  class="error text-danger"> {!! APFrmErrHelp::showErrors($errors, 'pinterest') !!} </small>
       
            </div>
    </div>
    <div class="col-md-4">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'country_id') !!}">
			<label>{{__('Land')}}</label>
			{!! Form::select('country_id', ['' => __('Land auswählen')]+$countries, old('country_id', (isset($company))? $company->country_id:$siteSetting->default_country_id), array('class'=>'form-control', 'id'=>'country_id')) !!}
            
            <br/>
            <small  class="error text-danger"> {!! APFrmErrHelp::showErrors($errors, 'country_id') !!} </small>
       
            </div>
    </div>
    <div class="col-md-4">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'state_id') !!}">
			<label>{{__('Staat')}}</label>
			<span id="default_state_dd"> {!! Form::select('state_id', ['' => __('Staat auswählen')], null, array('class'=>'form-control', 'id'=>'state_id')) !!} </span>
            <br/>
            <small  class="error text-danger">  {!! APFrmErrHelp::showErrors($errors, 'state_id') !!}</small>
       
             </div>
    </div>
    <div class="col-md-4">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'city_id') !!}">
			<label>{{__('Stadt')}}</label>
			<span id="default_city_dd"> {!! Form::select('city_id', ['' => __('Stadt auswählen')], null, array('class'=>'form-control', 'id'=>'city_id')) !!} </span>
            <br/>
            <small  class="error text-danger">  {!! APFrmErrHelp::showErrors($errors, 'city_id') !!}</small>
       
              </div>
    </div>
    <div class="col-md-12">
        <div class="formrow {!! APFrmErrHelp::hasError($errors, 'map') !!}">
			<label>{{__('Google Map Iframe')}}</label>
			{!! Form::textarea('map', null, array('class'=>'form-control', 'id'=>'map', 'placeholder'=>__('Google Map'))) !!}
            
            <br/>
            <small  class="error text-danger">  {!! APFrmErrHelp::showErrors($errors, 'map') !!}</small>
       
             </div>
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
      {{__('Newsletter abonnieren')}}
      {!! APFrmErrHelp::showErrors($errors, 'is_subscribed') !!}
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
                    $('#thumbnail').append('<div class="fileattached" style="margin-bottom: 14px;"><img height="100px"  src="' + e.target.result + '" > <div style="margin-top: 14px;">' + theFile.name + '</div><div class="clearfix"></div></div>');
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
