@extends('layouts.dashboard')

@section('title', 'All Category | Admin | Gudpanda')

@section('content')

    <!-- Start Container Fluid -->

    <div class="container-xxl">
        <div class="row">
            @foreach ($categories as $index => $category)
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="rounded {{ $getCategoryBgClass($index) }} d-flex align-items-center justify-content-center mx-auto">
                            <img src="{{ $category->image ? asset('storage/' . $category->image) : asset('dashboard/images/product/p-1.png') }}"
                            alt="Category Image" class="avatar-xl">
                        </div>
                        <h4 class="mt-3 mb-0">{{ $category->name }}</h4>
                    </div>
                </div>
            </div>
        @endforeach
        </div>


        <livewire:admin.category.add-category />
        <livewire:admin.category.subcategory />

    </div>

@endsection


@push('scripts')

@endpush
