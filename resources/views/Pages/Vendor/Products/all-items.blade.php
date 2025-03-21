@extends('layouts.dashboard')

@section('title', 'All Items | Vendor | Gudpanda')

@section('content')
    <!-- Start Container Fluid -->
    <div class="container-fluid">

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center gap-1">
                        <h4 class="card-title flex-grow-1">All Product List</h4>

                        <a href="{{ route('vendor.addItem') }}" class="btn btn-sm btn-primary">
                            Add Product
                        </a>

                    </div>
                    <div>
                        @if ($products->isEmpty())
                            <p>No products available.</p>
                        @else
                            <div class="table-responsive">
                                <table class="table align-middle mb-0 table-hover table-centered">
                                    <thead class="bg-light-subtle">
                                        <tr>
                                            <th class="ms-1">#</th>
                                            <th>Product Name & Size</th>
                                            <th>Price</th>
                                            <th>Stock</th>
                                            <th>Category</th>
                                            <th>Sub-Category</th>
                                            <th>Rating</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                            <tr>
                                                <td>
                                                    <div class="form-check ms-1">
                                                        {{ $loop->iteration }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div
                                                            class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                                            <img src="{{ $product->product_display_image ? asset('storage/' . $product->product_display_image) : asset('dashboard/images/product/p-2.png') }}"
                                                                alt="product Image" class="avatar-md">

                                                        </div>
                                                        <div>
                                                            <span
                                                                class="text-dark fw-medium fs-15">{{ $product->name }}</span>
                                                            <p class="text-muted mb-0 mt-1 fs-13"><span> Size : </span> S ,
                                                                M , L , Xl
                                                            </p>
                                                        </div>
                                                    </div>

                                                </td>
                                                <td>₦{{ $product->price }}</td>
                                                <td>
                                                    <p class="mb-1 text-muted"><span class="text-dark fw-medium">486
                                                            Item</span>
                                                        Left</p>
                                                    <p class="mb-0 text-muted">155 Sold</p>
                                                </td>
                                                <td> {{ $product->category->name ?? 'N/A' }} </td>
                                                <td> {{ $product->subcategory->name ?? 'N/A' }} </td>
                                                <td>
                                                    <span class="badge p-1 bg-light text-dark fs-12 me-1"><i
                                                            class="bx bxs-star align-text-top fs-14 text-warning me-1"></i>
                                                        4.5</span> 55 Review
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <!-- Show Product -->
                                                        <a href="{{ route('vendor.showItemDetails', $product->id) }}"
                                                            class="btn btn-light btn-sm">
                                                            <iconify-icon icon="solar:eye-broken"
                                                                class="align-middle fs-18"></iconify-icon>
                                                        </a>

                                                        <!-- Edit Product -->
                                                        <a href="{{ route('vendor.editItem', $product->id) }}"
                                                            class="btn btn-soft-primary btn-sm">
                                                            <iconify-icon icon="solar:pen-2-broken"
                                                                class="align-middle fs-18"></iconify-icon>
                                                        </a>

                                                        <!-- Delete Product -->
                                                        <form action="{{ route('vendor.deleteItem', $product->id) }}"
                                                            method="POST" class="d-inline delete-form">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="button"
                                                                class="btn btn-soft-danger btn-sm delete-btn">
                                                                <iconify-icon icon="solar:trash-bin-minimalistic-2-broken"
                                                                    class="align-middle fs-18"></iconify-icon>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- end table-responsive -->
                        @endif
                    </div>

                    <div class="card-footer border-top">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-end mb-0">
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
                                <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- End Container Fluid -->
@endsection


@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Select all delete buttons
            document.querySelectorAll('.delete-btn').forEach(button => {
                button.addEventListener('click', function() {
                    // Find the closest form
                    let form = this.closest('.delete-form');

                    // Show SweetAlert confirmation
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit(); // Submit the form
                        }
                    });
                });
            });
        });
    </script>
@endpush
