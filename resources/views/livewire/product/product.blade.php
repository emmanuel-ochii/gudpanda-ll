<div>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Product Information</h4>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-lg-4">
                    <form>
                        <div class="mb-3">
                            <label for="product-name" class="form-label">Product Name</label>
                            <input type="text" id="product-name" class="form-control" placeholder="Items Name">
                        </div>
                    </form>
                </div>

                <div class="col-lg-4">
                    <form>
                        <label for="product-categories" class="form-label">Product Category</label>
                        <select class="form-control" id="product-categories" data-choices data-choices-groups
                            data-placeholder="Select Categories" name="choices-single-groups">
                            <option value="">Choose a category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </form>
                </div>

                <div class="col-lg-4">
                    <form>
                        <label for="product-categories" class="form-label"> Sub-Category</label>
                        <select class="form-control" id="product-categories" data-choices data-choices-groups
                            data-placeholder="Select Categories" name="choices-single-groups">
                            <option value="">Choose a subcategory</option>
                            @foreach ($subcategories as $subcategory)
                                <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                            @endforeach
                        </select>
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <form>
                        <div class="mb-3">
                            <label for="product-brand" class="form-label">Brand</label>
                            <input type="text" id="product-brand" class="form-control" placeholder="Brand Name">
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <form>
                        <div class="mb-3">
                            <label for="product-weight" class="form-label">Weight</label>
                            <input type="text" id="product-weight" class="form-control" placeholder="In kg">
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <form>
                        <label for="gender" class="form-label">Gender</label>
                        <select class="form-control" id="gender" data-choices data-choices-groups
                            data-placeholder="Select Gender">
                            <option value="">Select Gender</option>
                            <option value="Men">Men</option>
                            <option value="Women">Women</option>
                            <option value="Unisex">Unisex</option>
                        </select>
                    </form>
                </div>
            </div>
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

            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control bg-light-subtle" id="description" rows="7"
                            placeholder="Short description about the product"></textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <form>
                        <div class="mb-3">
                            <label for="product-id" class="form-label">SKU Number</label>
                            <input type="number" id="product-id" class="form-control" placeholder="#******">
                        </div>

                    </form>
                </div>
                <div class="col-lg-4">
                    <form>
                        <div class="mb-3">
                            <label for="product-stock" class="form-label">Stock</label>
                            <input type="number" id="product-stock" class="form-control" placeholder="Quantity">
                        </div>

                    </form>
                </div>
                <div class="col-lg-4">
                    <label for="product-stock" class="form-label">Tag</label>
                    <select class="form-control" id="choices-multiple-remove-button" data-choices
                        data-choices-removeItem name="choices-multiple-remove-button" multiple>
                        <option value="Fashion" selected>Fashion</option>
                        <option value="Electronics">Electronics</option>
                        <option value="Watches">Watches</option>
                        <option value="Headphones">Headphones</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>
