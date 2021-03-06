<div class="modal-body">
    <div class="form-body">
        <div class="formrow" id="div_title">
            <input style="margin-bottom: 14px;" class="form-control" id="title" placeholder="{{__('Bezeichnung der Erfahrung')}}" name="title" type="text" value="{{(isset($profileExperience)? $profileExperience->title:'')}}">
            <span  style="color: #ea5c90;" class="help-block title-error"></span> </div>

        <div class="formrow" id="div_company">
            <input  style="margin-bottom: 14px;" class="form-control" id="company" placeholder="{{__('Unternehmen')}}" name="company" type="text" value="{{(isset($profileExperience)? $profileExperience->company:'')}}">
            <span style="color: #ea5c90;" class="help-block company-error"></span> </div>

        <div class="formrow" id="div_country_id">
            <?php
            $country_id = (isset($profileExperience) ? $profileExperience->country_id : $siteSetting->default_country_id);
            ?>
            {!! Form::select('country_id', [''=>__('Land auswählen')]+$countries, $country_id, array('class'=>'form-control', 'id'=>'experience_country_id')) !!}
            <span style="color: #ea5c90; position: relative;top: 10px;" class="help-block country_id-error"></span> </div>

        <div class="formrow" id="div_state_id">
            <span id="default_state_experience_dd">
                {!! Form::select('state_id', [''=>__('Staat auswählen')], null, array('class'=>'form-control', 'id'=>'experience_state_id')) !!}
            </span>
            <span style="color: #ea5c90;position: relative;top: 10px;" class="help-block state_id-error"></span> </div>

        <div class="formrow" id="div_city_id">
            <span id="default_city_experience_dd">
                {!! Form::select('city_id', [''=>__('Stadt auswählen')], null, array('class'=>'form-control', 'id'=>'city_id')) !!}
            </span>
            <span style="color: #ea5c90;position: relative;top: 10px;" class="help-block city_id-error"></span> </div>

        <div class="formrow" id="div_date_start">
            <input style="margin-bottom: 14px;" class="form-control datepicker"  autocomplete="off" id="date_start" placeholder="{{__('Beginn der Erfahrung')}}" name="date_start" type="text" value="{{(isset($profileExperience)? $profileExperience->date_start->format('Y-m-d'):'')}}">
            <span style="color: #ea5c90;" class="help-block date_start-error"></span> </div>
        <div class="formrow" id="div_date_end">
            <input style="margin-bottom: 14px;" class="form-control datepicker" autocomplete="off" id="date_end" placeholder="{{__('Ende der Erfahrung')}}" name="date_end" type="text" value="{{(isset($profileExperience)? $profileExperience->date_end->format('Y-m-d'):'')}}">
            <span style="color: #ea5c90;" class="help-block date_end-error"></span> </div>
        <div class="formrow" id="div_is_currently_working">
            <label for="is_currently_working" class="bold">{{__('Noch laufend?')}}</label>
            <div class="radio-list" style="margin-bottom: 14px;">
                <?php
                $val_1_checked = '';
                $val_2_checked = 'checked="checked"';

                if (isset($profileExperience) && $profileExperience->is_currently_working == 1) {
                    $val_1_checked = 'checked="checked"';
                    $val_2_checked = '';
                }
                ?>
                <label class="radio-inline"><input id="currently_working" name="is_currently_working" type="radio" value="1" {{$val_1_checked}}> {{__('Ja')}} </label>
                <label class="radio-inline"><input id="not_currently_working" name="is_currently_working" type="radio" value="0" {{$val_2_checked}}> {{__('Nein')}} </label>
            </div>
            <span style="color: #ea5c90;" class="help-block is_currently_working-error"></span>
        </div>
        <div class="formrow" id="div_description">
            <textarea style="margin-bottom: 14px;" name="description" class="form-control" id="description" placeholder="{{__('Beschreibung der Erfahrung')}}">{{(isset($profileExperience)? $profileExperience->description:'')}}</textarea>
            <span style="color: #ea5c90;" class="help-block description-error"></span> </div>
    </div>
</div>
