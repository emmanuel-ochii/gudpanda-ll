<div>
    <div class="row">

        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session()->has('delete'))
            <div class="alert alert-danger">
                {{ session('delete') }}
            </div>
        @endif

        <div class="col-xl-3 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="bg-light text-center rounded bg-light">
                        {{-- <img src="{{ $image ? $image->temporaryUrl() : asset('dashboard/images/product/img_placeholder.jpg') }}" alt="Category Image" class="avatar-xxl"> --}}
                        <img src="{{ $image?->temporaryUrl() ?? asset('dashboard/images/product/img_placeholder.jpg') }}"
                            alt="Category Image" class="avatar-xxl">
                    </div>
                    <div class="mt-3">
                        <h4>{{ $name ?? 'Category Name' }}</h4>
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

        <div class="col-xl-9 col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Category Information</h4>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="saveCategory">
                        <div class="row">
                            <div class="col-lg-6 mb-3">
                                <label for="category_name" class="form-label">Category Name</label>
                                <input type="text" id="category_name" wire:model="name" class="form-control"
                                    placeholder="Enter Name">

                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-lg-6 mb-3">
                                <label for="category_slug" class="form-label">Category Slug</label>
                                <input type="text" id="category_slug" wire:model="slug" class="form-control"
                                    placeholder="Auto-generated">

                                @error('slug')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-lg-6 mb-3">
                                <label for="category_icon" class="form-label">Category Icon</label>
                                <select id="category_icon" wire:model="icon" class="form-control">
                                    <option value="">Select Icon</option>
                                    <option value="bx bx-home">Home Appliances</option>
                                    <option value="bx bx-tv">Electronics</option>
                                    <option value="bx bxs-tennis-ball">Sport</option>
                                    <option value="bx bx-closet">Fashion</option>
                                    <option value="bx bx-bed">Upholstery</option>
                                    <option value="bx  bx-computer">Computer and Office</option>
                                </select>

                                @error('icon')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-lg-6 mb-3">
                                <label for="category_img" class="form-label">Category Image</label>
                                <input type="file" id="category_img" wire:model="image" class="form-control">

                                @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row justify-content-end mt-3">
                            <div class="col-lg-2">
                                <button type="submit" class="btn btn-outline-secondary w-100">
                                    {{ $editMode ? 'Update' : 'Save' }}
                                </button>
                            </div>
                            <div class="col-lg-2">
                                <button type="reset" wire:click="resetForm"
                                    class="btn btn-primary w-100">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div class="card">

                <div class="card-header d-flex justify-content-between align-items-center gap-1">
                    <h4 class="card-title flex-grow-1">All Categories List</h4>

                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle btn btn-sm btn-outline-light" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            This Month
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a href="#!" class="dropdown-item">Download</a>
                            <!-- item-->
                            <a href="#!" class="dropdown-item">Export</a>
                            <!-- item-->
                            <a href="#!" class="dropdown-item">Import</a>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="table-responsive">
                        <table class="table align-middle mb-0 table-hover table-centered">
                            <thead class="bg-light-subtle">
                                <tr>
                                    <th>Categories</th>
                                    <th>Slug</th>
                                    <th>Item Quantity</th>
                                    <th>Category Icon</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($categories as $category)
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div
                                                    class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                                    <img src="{{ $category->image ? asset('storage/' . $category->image) : asset('dashboard/images/product/p-1.png') }}"
                                                        alt="Category Image" class="avatar-md">
                                                </div>
                                                <p class="text-dark fw-medium fs-15 mb-0"> {{ $category->name }} </p>
                                            </div>
                                        </td>
                                        <td class="text-capitalize">{{ $category->slug }}</td>
                                        <td>FS16276</td>
                                        <td>
                                            <i class="{!! $category->icon !!} bx-md"></i>
                                        </td>
                                        <td>
                                            <div class="d-flex gap-2">

                                                <a href="#!" class="btn btn-light btn-sm"><iconify-icon
                                                        icon="solar:eye-broken"
                                                        class="align-middle fs-18"></iconify-icon></a>

                                                <!-- Emit editCategory event -->
                                                <button class="btn btn-soft-primary btn-sm"
                                                    wire:click="editCategory({{ $category->id }})">
                                                    <iconify-icon icon="solar:pen-2-broken"
                                                        class="align-middle fs-18"></iconify-icon>
                                                </button>

                                                <!-- Emit deleteCategory event -->
                                                <button class="btn btn-soft-danger btn-sm"
                                                    wire:click="deleteCategory({{ $category->id }})">
                                                    <iconify-icon icon="solar:trash-bin-minimalistic-2-broken"
                                                        class="align-middle fs-18"></iconify-icon>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- end table-responsive -->
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

