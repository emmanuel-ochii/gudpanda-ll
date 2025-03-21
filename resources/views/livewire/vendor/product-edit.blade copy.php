<div>
    @if (session()->has('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif


    <form wire:submit.prevent="updateProduct" id="productForm">
        <div class="card">

            <div class="card-header">
                <h4 class="card-title">Edit Product</h4>
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

                    {{-- Show the existing product image --}}
                    <div class="col-lg-6 mb-3">
                        @if ($existingImage)
                            <p>Current Image:</p>
                            <img src="{{ asset('storage/' . $existingImage) }}" alt="Product Image" width="150">
                        @endif
                    </div>
                </div>

                {{-- Product Gallery Images --}}
                <div class="card-body">
                    <h5>Product Gallery</h5>

                    {{-- Show Existing Gallery Images --}}
                    <div class="row">
                        @foreach ($existingGallery as $galleryImage)
                            <div class="col-md-3">
                                <img src="{{ asset('storage/' . $galleryImage) }}" alt="Gallery Image"
                                    class="img-thumbnail" width="100">
                                <button type="button" wire:click="removeGalleryImage('{{ $galleryImage }}')"
                                    class="btn btn-danger btn-sm">Remove</button>
                            </div>
                        @endforeach
                    </div>

                    {{-- Upload New Gallery Images --}}
                    <div class="mt-3">
                        <input type="file" id="product_gallery_images" wire:model="product_gallery_images" multiple
                            class="form-control">

                        @error('product_gallery_images.*')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <div wire:loading wire:target="product_gallery_images">
                            Uploading images, please wait...
                        </div>
                    </div>
                </div>

            </div>
        </div>

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
                            <input type="text" id="name" wire:model="name" class="form-control">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <label for="category_id" class="form-label">Product Category</label>
                        <select class="form-control" id="category_id" wire:model="category_id">
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
                        <select class="form-control" id="subcategory_id" wire:model="subcategory_id">
                            <option value="">Choose a subcategory</option>
                            @foreach ($subcategories as $subcategory)
                                <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                            @endforeach
                        </select>
                        @error('subcategory_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                {{-- Brand, Weight, Gender --}}
                <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="brand" class="form-label">Brand</label>
                            <input type="text" id="brand" wire:model='brand' class="form-control">
                            @error('brand')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="weight" class="form-label">Weight</label>
                            <input type="text" id="weight" wire:model='weight' class="form-control">
                            @error('weight')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <label for="gender" class="form-label">Gender</label>
                        <select class="form-control" id="gender" wire:model='gender'>
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

                {{-- Description --}}
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control bg-light-subtle" id="description" wire:model='description' rows="7"></textarea>
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
                            <input type="text" id="sku_number" wire:model='sku_number' class="form-control"
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

                <div class="row justify-content-end g-2">
                    <div class="col-lg-3">
                        <button type="submit" class="btn btn-outline-secondary w-100">Update Product</button>
                    </div>
                    <div class="col-lg-2">
                        <button type="reset" class="btn btn-primary w-100">Cancel</button>
                    </div>
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
