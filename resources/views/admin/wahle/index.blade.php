@extends('admin.layouts.admin_layout')
@section('content')
<style type="text/css">
    .table td, .table th {
        font-size: 12px;
        line-height: 2.42857 !important;
    }	
</style>
<div class="page-content-wrapper"> 
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content"> 
        <!-- BEGIN PAGE HEADER--> 
        <!-- BEGIN PAGE BAR -->
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li> <a href="{{ route('admin.home') }}">Home</a> <i class="fa fa-circle"></i> </li>
                <li> <span>wahle</span> </li>
            </ul>
        </div>
        <!-- END PAGE BAR --> 
        <!-- BEGIN PAGE TITLE-->
        <h3 class="page-title">Manage wahle <small>wahle</small> </h3>
        <!-- END PAGE TITLE--> 
        <!-- END PAGE HEADER-->
        <div class="row">

            <div class="col-md-12">
                <!-- Begin: life time stats -->
                <div class="portlet light portlet-fit portlet-datatable bordered">
                    <div class="portlet-title">
                        <div class="caption"> <i class="icon-settings font-dark"></i> <span class="caption-subject font-dark sbold uppercase">Wahle</span> </div>
                        <div class="actions"> <a href="{{ route('create.wahle') }}" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-plus"></i> Add New Wahle</a> </div>
                    </div>
                    <div class="portlet-body">
                        <div class="table-container">

                                <table class="table table-striped table-bordered table-hover"  id="jobDatatableAjax">
                                    <thead>

                                    <tr role="row" class="heading">
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>
                                    <?php foreach ($val as $vals) {
                                        ?>
                                    <thead>

                                    <tr role="row" class="heading">
                                        <th><?php echo $vals['id']; ?></th>
                                        <th><?php echo $vals['name']; ?> </th>
                                        <th><a href="{{route('loschen.wahle', $vals['id'])}}"> <button class="btn btn-danger">Loschen</button> </a> </th>

                                    </tr>
                                    </thead> <?php
                                    }?>
                                    <tbody>
                                    </tbody>
                                </table>

                        </div>
                    </div>
                </div>

        </div>
    </div>
    <!-- END CONTENT BODY --> 
</div>
    @endsection
    @push('scripts')
        <script>

            function deleteJob(id, is_default) {
                var msg = 'Are you sure?';
                if (confirm(msg)) {
                    $.post("{{ route('delete.job') }}", {id: id, _method: 'DELETE', _token: '{{ csrf_token() }}'})
                        .done(function (response) {
                            if (response == 'ok')
                            {
                                var table = $('#jobDatatableAjax').DataTable();
                                table.row('jobDtRow' + id).remove().draw(false);
                            } else
                            {
                                alert('Request Failed!');
                            }
                        });
                }
            }

        </script>
@endpush
