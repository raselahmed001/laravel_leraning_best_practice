<form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="modal zoomIn" id="modelCreate" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Add Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="parent_id" class="form-label">Parent Category</label>
                        <select class="form-select" aria-label="Select Parent Category" name="parent_id" id="parent_id">
                            <option value="" selected disabled>Select a Category</option>
                            <option value="1">Main category</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="categoryName" class="form-label">Category Name <span
                                class="required"style="color: red;">*</span></label>
                        <input type="text" class="form-control" id="categoryName" name="category_name"
                            placeholder="Enter category" required>
                    </div>

                    <div class="mb-3">
                        <label for="categoryImage" class="form-label">Upload Image</label>
                        <input type="file" class="form-control" id="category_image" name="category_image"
                            accept="image/*" onchange="previewImage(event)" required>
                        <img id="imagePreview" class="rounded mt-3" style="display: none;" alt="Image Preview"
                            width="200">
                        <button type="button" class="btn btn-danger waves-effect waves-light mt-2"
                            onclick="clearImage()">Clear
                            Image</button>
                    </div>

                    <div class="mb-3">
                        <label for="shortDescription" class="form-label">Short Description</label>
                        <textarea class="form-control" id="shortDescription" name="short_desc" rows="3"
                            placeholder="Enter your short description"></textarea>
                    </div>

                    {{-- <div class="mb-3">
                        <label for="longDescription" class="form-label">Long Description</label>
                        <textarea class="form-control" id="longDescription" name="long_desc" rows="3"
                            placeholder="Enter your long description" name="long_desc"></textarea>
                    </div> --}}
                    <div class="mb-3">
                        <label for="longDescription" class="form-label">Long Description</label>
                        <textarea class="form-control" id="longDescription" name="long_desc" rows="3"
                            placeholder="Enter your long description"></textarea>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="formCheck6" name="is_featured">
                        <label class="form-check-label" for="formCheck6">
                            Featured Category
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect waves-light" data-bs-dismiss="modal">
                        <i class="ri-error-warning-line label-icon align-middle fs-16 me-2"></i>Close
                    </button>
                    <button type="submit" class="btn btn-success btn-label waves-effect waves-light">
                        <i class="ri-check-double-line label-icon align-middle fs-16 me-2"></i>Submit
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- TinyMCE -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.10.9/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector: 'textarea',
        plugins: 'advlist autolink lists link image charmap print preview anchor',
        toolbar: 'undo redo | formatselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
        menubar: true,
    });

    // Image preview function
    function previewImage(event) {
        const imagePreview = document.getElementById('imagePreview');
        imagePreview.src = URL.createObjectURL(event.target.files[0]);
        imagePreview.style.display = 'block';
    }

    // Clear image function
    function clearImage() {
        const fileInput = document.getElementById('category_image');
        const imagePreview = document.getElementById('imagePreview');
        fileInput.value = ''; // Clear the input
        imagePreview.style.display = 'none'; // Hide the preview
        imagePreview.src = ''; // Clear the src attribute
    }
</script>
