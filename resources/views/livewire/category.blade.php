<div class="row">

    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="col-xl-3 col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="bg-light text-center rounded bg-light">
                    <img src="{{ $image ? $image->temporaryUrl() : asset('dashboard/images/product/img_placeholder.jpg') }}"
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
                            <button type="submit" class="btn btn-outline-secondary w-100">Save</button>
                        </div>
                        <div class="col-lg-2">
                            <button type="reset" wire:click="reset" class="btn btn-primary w-100">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
