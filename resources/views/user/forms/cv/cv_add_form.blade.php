<form class="form" id="add_edit_profile_cv" method="POST" action="{{ route('store.profile.cv', [$user->id]) }}" target="cv_iframe">{{ csrf_field() }}
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title">{{__('LEBENSLAUF HINZUFUGEN')}}</h4>
    </div>
    <div class="modal-body">
        <div class="form-body">
            <div class="form-group" id="div_name">
                <label for="name" class="bold">{{__('Titel des Lebensläufe')}}</label>
                <input class="form-control" id="title" placeholder="{{__('Titel des Lebensläufe')}}" name="title" type="text" value="{{(isset($profileCv)? $profileCv->title:'')}}">
                <span class="help-block title-error"></span> </div>

            @if(isset($profileCv))
            <div class="form-group">
                {{ImgUploader::print_doc("cvs/$profileCv->cv_file")}}
            </div>
            @endif


            <div class="form-group" id="div_cv_file">
                <label for="cv_file" class="bold">{{__('CV File')}}</label>
                <input class="form-control" id="cv_file" name="cv_file" type="file">
                <span class="help-block cv_file-error"></span> </div>


            <div class="form-group" id="div_is_default">
                <label for="is_default" class="bold">{{__('Standardmabig?')}}?</label>
                <div class="radio-list" style="margin-left:22px;">
                    <?php
                    $val_1_checked = '';
                    $val_2_checked = 'checked="checked"';

                    if (isset($profileCv) && $profileCv->is_default == 1) {
                        $val_1_checked = 'checked="checked"';
                        $val_2_checked = '';
                    }
                    ?>

                    <label class="radio-inline"><input id="default" name="is_default" type="radio" value="1" {{$val_1_checked}}> {{__('Ja')}} </label>
                    <label class="radio-inline"><input id="not_default" name="is_default" type="radio" value="0" {{$val_2_checked}}> {{__('Nein')}} </label>
                </div>
                <span class="help-block is_default-error"></span>
            </div>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn dark btn-outline" data-dismiss="modal">{{__('Close')}}</button>
            <button type="submit" class="btn btn-large btn-primary">{{__('LEBENSLAUF HINZUFUGEN')}} <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
        </div>
</form>
