@extends('layouts.dashboard')

@section('title', 'Add New Category | Admin | Gudpanda')

@section('content')

    <!-- Start Container Fluid -->
    <div class="container-xxl">

        {{-- <div class="row">

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
