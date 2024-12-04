@extends('layouts.dashboard')

@section('title', 'Add New Category | Admin | Gudpanda')

@section('content')

    <!-- Start Container Fluid -->
    <div class="container-xxl">

        {{-- <div class="row">

            <div class="col-xl-3 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="bg-light text-center rounded bg-light">
                            <img src="{{ asset('dashboard/images/product/product_avatar.png') }}" alt=""
                                class="avatar-xxl">
                        </div>
                        <div class="mt-3">
                            <h4>category_name_here</h4>
                            <div class="row">
                                <div class="col-lg-8 col-8">
                                    <p class="mb-1 mt-2">Category Products :</p>
                                    <h5 class="mb-0">N/A</h5>
                                </div>
                                <div class="col-lg-4 col-4">
                                    <p class="mb-1 mt-2">ID :</p>
                                    <h5 class="mb-0">FS16276</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-9 col-lg-8 ">

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Product Information</h4>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="category_name" class="form-label">Category Name</label>
                                    <input type="text" id="category_name" class="form-control" placeholder="Enter Name">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="category_slug" class="form-label">Category Slug</label>
                                    <input type="text" id="category_slug" class="form-control" placeholder="Enter Name">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <form>
                                    <div class="mb-3">
                                        <label for="category_icon" class="form-label">Category Icon</label>
                                        <select class="form-control" id="crater" data-choices data-choices-groups
                                            data-placeholder="Select Icon">
                                            <option value="">Select Icon</option>
                                            <option value='<i class="bx bx-home"></i>"><i class="bx bx-home'></i>Home Appliances</option>
                                        </select>
                                    </div>

                                </form>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="category_img" class="form-label">Category Image</label>
                                    <input class="form-control form-choose" type="file" id="formFile">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="p-3 mb-3 rounded">
                    <div class="row justify-content-end g-2">
                        <div class="col-lg-2">
                            <a href="#!" class="btn btn-outline-secondary w-100">Save Change</a>
                        </div>
                        <div class="col-lg-2">
                            <a href="#!" class="btn btn-primary w-100">Cancel</a>
                        </div>
                    </div>
                </div>

            </div>
        </div> --}}

        <livewire:category />


    </div>
    <!-- End Container Fluid -->
@endsection
