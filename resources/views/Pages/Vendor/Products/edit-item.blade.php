@extends('layouts.dashboard')

@section('title', 'Edit Item | Vendor | Gudpanda')

@push('styles')
    <!-- FilePond CSS and JS -->
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <script src="https://unpkg.com/filepond/dist/filepond.min.js"></script>

    <!-- Plugins -->
    <script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.min.js">
    </script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.min.js">
    </script>
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.js"></script>
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css" rel="stylesheet">

    {{-- Choices Plugins --}}
    <script src="
    https://cdn.jsdelivr.net/npm/choices.js@11.0.3/public/assets/scripts/choices.min.js
    "></script>
    <link href="
    https://cdn.jsdelivr.net/npm/choices.js@11.0.3/public/assets/styles/choices.min.css
    " rel="stylesheet">

@endpush

@section('content')

    <!-- Start Container Fluid -->
    <div class="container-xxl">

        <div class="row"></div>

        <livewire:vendor.product-edit :product-id="$productId">

        </div>
    </div>
    <!-- End Container Fluid -->


@endsection
