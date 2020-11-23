@extends('layouts.app')
@section('content')
    <!-- Header start -->
    @include('includes.header')
    <!-- Header end -->
    <!-- Inner Page Title start -->
    @include('includes.inner_page_title', ['page_title'=>__('Datenschutzbestimmung')])
    <!-- Inner Page Title end -->

    <div class="colorat" style="color: #003A65;padding-bottom: 12px;">
        <section id="blog-content">
            <div class="container">

                <!-- Blog start -->
            </div>

        </section>

    </div>

    @include('includes.footer')
@endsection
@push('styles')

@endpush
@push('scripts')
    @include('includes.immediate_available_btn')

@endpush
