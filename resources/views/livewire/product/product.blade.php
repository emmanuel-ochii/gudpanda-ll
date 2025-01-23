<div>

    <form wire:submit.prevent="saveProduct" id="productForm">
        {{-- Product image --}}
        <div class="card">
            @if (session()->has('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="card-header">
                <h4 class="card-title">Add Product Photos</h4>
            </div>

            <div class="card-body">

                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <label for="product_display_image" class="form-label">Select Product Image</label>
                        <input type="file" id="product_display_image" wire:model="product_display_image"
                            class="form-control">

                        @error('product_display_image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div wire:ignore>
                    <!-- FilePond Input -->

                    <input type="file" id="product_gallery_images" class="filepond" multiple>

                    @error('product_gallery_images.*')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div wire:loading wire:target="product_gallery_images">
                    Uploading images, please wait...
                </div>

            </div>
        </div>

        {{-- Product Information --}}
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Product Information</h4>
            </div>

            <div class="card-body">
                {{-- Name, Category, Sub-category --}}
                <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="name" class="form-label">Product Name</label>
                            <input type="text" id="name" wire:model="name" class="form-control"
                                placeholder="Product Name">

                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    {{-- <div class="col-lg-4">
                        <label for="category_id" class="form-label">Product Category</label>
                        <select class="form-control" id="category_id" data-choices data-choices-groups
                            data-placeholder="Select Categories" wire:model="selectedCategory">
                            <option value="">Choose a category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>

                        @error('category_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-lg-4">
                        <label for="subcategory_id" class="form-label">Sub-Category</label>
                        <select class="form-control" id="subcategory_id" data-choices data-choices-groups
                            data-placeholder="Select Subcategories" wire:model="selectedSubcategory"
                            @if (!$subcategories) disabled @endif>
                            <option value="">Choose a subcategory</option>
                            @if ($subcategories)
                                @foreach ($subcategories as $subcategory)
                                    <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                                @endforeach
                            @endif
                        </select>

                        @error('subcategory_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div> --}}

                    <div class="col-lg-4">
                        <label for="category_id" class="form-label">Product Category</label>
                        <select class="form-control" id="category_id" data-choices data-choices-groups
                            data-placeholder="Select Categories" wire:model="category_id">
                            <option value="">Choose a category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>

                        @error('category_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                    </div>

                    <div class="col-lg-4">
                        <label for="subcategory_id" class="form-label"> Sub-Category</label>
                        <select class="form-control" id="subcategory_id" data-choices data-choices-groups
                            data-placeholder="Select Categories" wire:model="subcategory_id">
                            <option value="">Choose a subcategory</option>
                            @foreach ($subcategories as $subcategory)
                                <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                            @endforeach
                        </select>

                        @error('subcategory_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Brand, Weight, Gender --}}
                    <div class="row">

                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="brand" class="form-label">Brand</label>
                                <input type="text" id="brand" wire:model='brand' class="form-control"
                                    placeholder="Generic, Puma, Oraimo">

                                @error('brand')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="weight" class="form-label">Weight</label>
                                <input type="text" id="weight" wire:model='weight' class="form-control"
                                    placeholder="In kg">

                                @error('weight')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <label for="gender" class="form-label">Gender</label>
                            <select class="form-control" id="gender" wire:model='gender' data-choices
                                data-choices-groups data-placeholder="Select Gender">
                                <option value="">Select Gender</option>
                                <option value="Men">Men</option>
                                <option value="Women">Women</option>
                                <option value="Unisex">Unisex</option>
                            </select>

                            @error('gender')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>

                    {{-- Size, Color --}}
                    <div class="row mb-4">
                        <div class="col-lg-4">
                            <div class="mt-3">
                                <h5 class="text-dark fw-medium">Size :</h5>
                                <div class="d-flex flex-wrap gap-2" role="group"
                                    aria-label="Basic checkbox toggle button group">
                                    <input type="checkbox" class="btn-check" id="size-xs1">
                                    <label
                                        class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                        for="size-xs1">XS</label>

                                    <input type="checkbox" class="btn-check" id="size-s1">
                                    <label
                                        class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                        for="size-s1">S</label>

                                    <input type="checkbox" class="btn-check" id="size-m1">
                                    <label
                                        class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                        for="size-m1">M</label>

                                    <input type="checkbox" class="btn-check" id="size-xl1">
                                    <label
                                        class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                        for="size-xl1">Xl</label>

                                    <input type="checkbox" class="btn-check" id="size-xxl1">
                                    <label
                                        class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                        for="size-xxl1">XXL</label>
                                    <input type="checkbox" class="btn-check" id="size-3xl1">
                                    <label
                                        class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                        for="size-3xl1">3XL</label>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="mt-3">
                                <h5 class="text-dark fw-medium">Colors :</h5>
                                <div class="d-flex flex-wrap gap-2" role="group"
                                    aria-label="Basic checkbox toggle button group">
                                    <input type="checkbox" class="btn-check" id="color-dark1">
                                    <label
                                        class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                        for="color-dark1"> <i class="bx bxs-circle fs-18 text-dark"></i></label>

                                    <input type="checkbox" class="btn-check" id="color-yellow1">
                                    <label
                                        class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                        for="color-yellow1"> <i class="bx bxs-circle fs-18 text-warning"></i></label>

                                    <input type="checkbox" class="btn-check" id="color-white1">
                                    <label
                                        class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                        for="color-white1"> <i class="bx bxs-circle fs-18 text-white"></i></label>

                                    <input type="checkbox" class="btn-check" id="color-red1">
                                    <label
                                        class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                        for="color-red1"> <i class="bx bxs-circle fs-18 text-primary"></i></label>

                                    <input type="checkbox" class="btn-check" id="color-green1">
                                    <label
                                        class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                        for="color-green1"> <i class="bx bxs-circle fs-18 text-success"></i></label>

                                    <input type="checkbox" class="btn-check" id="color-blue1">
                                    <label
                                        class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                        for="color-blue1"> <i class="bx bxs-circle fs-18 text-danger"></i></label>

                                    <input type="checkbox" class="btn-check" id="color-sky1">
                                    <label
                                        class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                        for="color-sky1"> <i class="bx bxs-circle fs-18 text-info"></i></label>

                                    <input type="checkbox" class="btn-check" id="color-gray1">
                                    <label
                                        class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                        for="color-gray1"> <i class="bx bxs-circle fs-18 text-secondary"></i></label>

                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Description --}}
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control bg-light-subtle" id="description" wire:model='description' rows="7"
                                    placeholder="Short description about the product"></textarea>



                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    {{-- SKU, STOCK_Status, Tag, refundable --}}
                    <div class="row">

                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="sku_number" class="form-label">SKU Number</label>
                                <input type="number" id="sku_number" wire:model='sku_number' class="form-control"
                                    placeholder="#******">

                                @error('sku_number')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="stock_quantity" class="form-label">Stock Quantity</label>
                                <input type="number" id="stock_quantity" wire:model='stock_quantity'
                                    class="form-control" placeholder="Quantity">
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="stock_status" class="form-label">Stock Status</label>
                                <select id="stock_status" wire:model="stock_status" class="form-control">
                                    <option value="">Select Option</option>
                                    <option value="in-stock">In Stock</option>
                                    <option value="out-of-stock">Out of Stock</option>
                                    <option value="pre-order">Pre-order</option>
                                </select>

                                @error('stock_status')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-4" wire:ignore>
                            <label for="product-tags" class="form-label">Tag</label>
                            <input type="text" id="product-tags" wire:model.defer="tags" />

                            @error('tag')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-lg-4">
                            <label for="refundable" class="form-label">Refundable</label>
                            <select id="refundable" wire:model="refundable" class="form-control">
                                <option value="non-refundable">Non-Refundable</option>
                                <option value="refundable">Refundable</option>
                            </select>

                            @error('refundable')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>

                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Pricing Details</h4>
                </div>
                <div class="card-body">
                    <div class="row">

                        <div class="col-lg-4">
                            <label for="price" class="form-label">Price</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text fs-20"><i class='bx bx-dollar'></i></span>
                                <input type="number" step="0.01" id="price" wire:model='price'
                                    class="form-control" placeholder="000">

                                @error('price')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <label for="discount_price" class="form-label">Discount Price</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text fs-20"><i class='bx bxs-discount'></i></span>
                                <input type="number" step="0.01" id="discount_price" wire:model='discount_price'
                                    class="form-control" placeholder="000">
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <label for="tex" class="form-label">Tex</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text fs-20"><i class='bx bxs-file-txt'></i></span>
                                <input type="number" id="tex" class="form-control" placeholder="000">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-3 bg-light mb-3 rounded">
                <div class="row justify-content-end g-2">
                    <div class="col-lg-3">
                        <button type="submit" class="btn btn-outline-secondary w-100">Create Product</button>
                    </div>
                    <div class="col-lg-2">
                        <button type="reset" class="btn btn-primary w-100">Cancel</button>
                    </div>
                </div>
            </div>
    </form>
</div>
@push('scripts')
    <script>
        // Register FilePond plugins
        FilePond.registerPlugin(
            FilePondPluginImagePreview,
            FilePondPluginFileValidateType,
            FilePondPluginFileValidateSize
        );

        // Initialize FilePond
        const inputElement = document.querySelector('#product_gallery_images');
        const pond = FilePond.create(inputElement, {
            allowMultiple: true,
            allowReorder: true,
            maxFiles: 5,
            maxFileSize: '2MB',
            acceptedFileTypes: ['image/png', 'image/jpeg', 'image/jpg'],
            labelIdle: 'Drag & Drop your files or <span class="filepond--label-action"> Browse Images </span>',
            server: {
                process: (fieldName, file, metadata, load, error, progress, abort) => {
                    @this.upload('product_gallery_images', file, load, error, progress);
                },
                revert: (filename, load) => {
                    @this.call('removeUploadedFile', filename);
                    load();
                },
            },
            onprocessfiles: () => {
                console.log('All files processed');
            },
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tagsInput = document.getElementById('product-tags');

            // Initialize Choices.js for the input field
            const tagsChoices = new Choices(tagsInput, {
                delimiter: ',',
                removeItemButton: true, // Allow tag removal
                duplicateItemsAllowed: false, // Prevent duplicate tags
                editItems: true, // Allow editing of tags
                placeholderValue: 'Add tags', // Placeholder text
            });

            // Sync tags with Livewire on change
            tagsInput.addEventListener('change', () => {
                const selectedTags = tagsChoices.getValue(true); // Get tags as an array of strings
                @this.set('tags', selectedTags); // Sync with Livewire 'tags' property
            });
        });
    </script>
@endpush
