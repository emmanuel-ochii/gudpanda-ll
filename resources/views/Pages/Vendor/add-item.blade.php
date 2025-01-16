@extends('layouts.dashboard')

@section('title', 'Add New Item | Vendor | Gudpanda')

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

        <div class="row">
            <div class="col-xl-3 col-lg-4">
                <div class="card">
                    <div class="card-body">

                        <img src="{{ asset('dashboard/images/product/p-1.png') }}" alt=""
                            class="img-fluid rounded bg-light">

                        <div class="mt-3">
                            <h4>Men Black Slim Fit T-shirt <span class="fs-14 text-muted ms-1">(Fashion)</span></h4>

                            <h5 class="text-dark fw-medium mt-3">Price :</h5>

                            <h4 class="fw-semibold text-dark mt-2 d-flex align-items-center gap-2">
                                <span class="text-muted text-decoration-line-through">$100</span> $80 <small
                                    class="text-muted"> (30% Off)</small>
                            </h4>

                            <div class="mt-3">
                                <h5 class="text-dark fw-medium">Size :</h5>
                                <div class="d-flex flex-wrap gap-2" role="group"
                                    aria-label="Basic checkbox toggle button group">
                                    <input type="checkbox" class="btn-check" id="size-s">
                                    <label
                                        class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                        for="size-s">S</label>

                                    <input type="checkbox" class="btn-check" id="size-m" checked>
                                    <label
                                        class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                        for="size-m">M</label>

                                    <input type="checkbox" class="btn-check" id="size-xl">
                                    <label
                                        class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                        for="size-xl">Xl</label>

                                    <input type="checkbox" class="btn-check" id="size-xxl">
                                    <label
                                        class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                        for="size-xxl">XXL</label>

                                </div>
                            </div>

                            <div class="mt-3">
                                <h5 class="text-dark fw-medium">Colors :</h5>
                                <div class="d-flex flex-wrap gap-2" role="group"
                                    aria-label="Basic checkbox toggle button group">
                                    <input type="checkbox" class="btn-check" id="color-dark">
                                    <label
                                        class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                        for="color-dark"> <i class="bx bxs-circle fs-18 text-dark"></i></label>

                                    <input type="checkbox" class="btn-check" id="color-yellow">
                                    <label
                                        class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                        for="color-yellow"> <i class="bx bxs-circle fs-18 text-warning"></i></label>

                                    <input type="checkbox" class="btn-check" id="color-white">
                                    <label
                                        class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                        for="color-white"> <i class="bx bxs-circle fs-18 text-white"></i></label>

                                    <input type="checkbox" class="btn-check" id="color-red">
                                    <label
                                        class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                        for="color-red"> <i class="bx bxs-circle fs-18 text-danger"></i></label>

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="card-footer bg-light-subtle">
                        <div class="row g-2">
                            <div class="col-lg-6">
                                <a href="#!" class="btn btn-outline-secondary w-100">Create Product</a>
                            </div>
                            <div class="col-lg-6">
                                <a href="#!" class="btn btn-primary w-100">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-9 col-lg-8 ">

                <livewire:product.product />

            </div>
        </div>
    </div>
    <!-- End Container Fluid -->


@endsection
