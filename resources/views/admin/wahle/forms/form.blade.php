@include('flash::message')
<div class="form-body">


    <div class="form-group">
        {!! Form::label('wahle', 'Wahle deine Tags', ['class' => 'bold']) !!}
        {!! Form::text('wahle', null, array('class'=>'form-control', 'id'=>'wahle', 'placeholder'=>'Wahle deine Tags')) !!}

    </div>

    <div class="form-actions">
        {!! Form::button('Update <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>', array('class'=>'btn btn-large btn-primary', 'type'=>'submit')) !!}
    </div>
</div>
@push('css')
    <style type="text/css">
        .datepicker>div {
            display: block;
        }
    </style>
@endpush
@push('scripts')
  {{--  @include('admin.shared.tinyMCEFront')
    --}}
@endpush
