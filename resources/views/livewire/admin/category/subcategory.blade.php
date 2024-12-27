<div>
    <div class="row">

        <div class="col-xl-12 col-lg-12">
            <div class="card bg-secondary">
                <div class="card-header">
                    <h4 class="card-title text-white">Manage Sub-category</h4>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="saveSubCategory">
                        <div class="row">
                            <div class="col-lg-6 mb-3">
                                <label for="name" class="form-label text-white">Sub-category Name</label>
                                <input type="text" wire:model="name" class="form-control" placeholder="Sub-category Name">

                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-lg-6 mb-3">
                                <label for="slug" class="form-label text-white">Sub-category Slug</label>
                                <input type="text" id="slug" wire:model="slug" class="form-control"
                                    placeholder="Auto-generated">

                                @error('slug')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-lg-6 mb-3">
                                <label for="category_id" class="form-label text-white">Category</label>
                                <select wire:model="category_id" class="form-control">
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>

                                @error('category_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row justify-content-end mt-3">
                            <div class="col-lg-2">
                                <button type="submit" class="btn btn-primary w-100">
                                    {{ $editMode ? 'Update' : 'Save' }}
                                </button>
                            </div>
                            <div class="col-lg-2">
                                <button type="reset" wire:click="resetForm"
                                    class="btn btn-secondary w-100">Cancel</button>
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
                    <h4 class="card-title flex-grow-1">All Sub-categories List</h4>

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
                                    <th>Sub Categories</th>
                                    <th>Category</th>
                                    <th>Slug</th>
                                    <th>Item Quantity</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($subcategories as $subcategory)
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div
                                                    class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                                    <img src="{{ $subcategory->category->image ? asset('storage/' . $subcategory->category->image) : asset('dashboard/images/product/p-1.png') }}"
                                                        alt="Category Image" class="avatar-md">
                                                </div>
                                                <p class="text-dark fw-medium fs-15 mb-0"> {{ $subcategory->name }} </p>
                                            </div>
                                        </td>
                                        <td class="text-capitalize">{{ $subcategory->category->name }}</td>
                                        <td class="text-capitalize">{{ $subcategory->slug }}</td>
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
                                                    wire:click="editSubCategory({{ $subcategory->id }})">
                                                    <iconify-icon icon="solar:pen-2-broken"
                                                        class="align-middle fs-18"></iconify-icon>
                                                </button>

                                                <!-- Emit deleteCategory event -->
                                                <button class="btn btn-soft-danger btn-sm"
                                                    wire:click="deleteSubCategory({{ $subcategory->id }})">
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
