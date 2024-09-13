@extends('backend.common.adminBaseLayout')

@push('setTitle')
    {{ $title }} : New Swati Carriers
@endpush
<style>
    .image-preview-container {
        display: flex;
        flex-direction: row;  /* Arrange elements in a row */
        justify-content: center;
        align-items: center;
        border: 2px dashed #ddd;
        padding: 10px;
        width: 100%; /* Adjust the width to ensure proper alignment */
    }

    .image-upload-label {
        display: flex;
        flex-direction: column;
        align-items: center;
        font-size: 24px;
        color: #888;
        cursor: pointer;
        margin-right: 20px;  /* Add spacing between the icon and the image */
    }

    .image-upload-label span {
        font-size: 12px;
        color: #888;
        margin-top: 5px;
    }

    .image-preview-container img {
        width: 150px;
        height: 150px;
        object-fit: cover;
        display: none;
        margin-left: 20px; /* Add some space between the image and the icon */
    }

    .image-preview-container:hover {
        border-color: #007bff;
    }

    .image-preview-container:hover .image-upload-label {
        color: #007bff;
    }
</style>
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mb-3">
                <div class="card" style="border-left: 5px solid black; ">
                    <div class="card-body">
                        <div class="admin-title px-2">
                            <div class="d-flex admin-title-box">
                                <h2 class="mb-0">{{ $title }}</h2>
                                <div class="breadcrumbs">
                                    <ol class="breadcrumb bg-white ms-3 mb-0">
                                        @foreach ($breadcrumbs as $breadcrumb)
                                            <li><a href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['text'] }}</a></li>
                                        @endforeach
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="card">
                            <div class="card-head"
                                style="background-color:  rgb(90, 90, 90); border-left: 5px solid rgb(90, 90, 90);">
                                <h5 class="mb-0 text-white">
                                    <i class="bi bi-journal-plus "></i>
                                    <span>Add Service</span>
                                </h5>
                            </div>
                            <div class="card-body">
                                <form id="serviceForm" action="" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="serviceTitle" class="form-label">Service Title</label>
                                        <input type="text" class="form-control" id="serviceTitle" name="service_title"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="servicePrice" class="form-label">Service Price</label>
                                        <input type="number" class="form-control" id="servicePrice" name="service_price"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="serviceStatus" class="form-label">Service Status</label>
                                        <select class="form-select" id="serviceStatus" name="service_status" required>
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="serviceDescription" class="form-label">Service Description</label>
                                        <textarea class="form-control serviceDescription" id="serviceDescription" name="service_description" required></textarea>
                                    </div>
                                    {{-- <div class="mb-3">
                                        <label for="serviceLogo" class="form-label">Service Image</label>
                                        <input type="file" class="form-control" id="serviceImage" name="service_image" required>
                                    </div> --}}
                                    <div class="mb-3">
                                        <label for="serviceImage" class="form-label">Service Image</label>
                                        <div class="image-preview-container">
                                            <label for="serviceImage" class="image-upload-label">
                                                <i class="fas fa-plus-circle"></i>
                                                <span>Add/Change Image</span>
                                            </label>
                                            <img id="imagePreview" src="" alt="Image Preview" class="img-thumbnail" style="display: none;">
                                            <input type="file" class="form-control d-none" id="serviceImage" name="service_image" required onchange="previewImage(event)">
                                        </div>
                                    </div>                                    
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary w-100">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="card">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>

        // image preview
        function previewImage(event) {
            const imagePreview = document.getElementById('imagePreview');
            
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                
                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                    imagePreview.style.display = 'block';  // Show the image preview
                }
                
                reader.readAsDataURL(file);
            }
        }



        $(document).ready(function() {
            $('#serviceDescription').summernote({
                height: 180,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ],
                styleTags: ['p', 'blockquote', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'],
                fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Helvetica Neue',
                    'Helvetica', 'Impact', 'Lucida Grande', 'Tahoma', 'Times New Roman', 'Verdana'
                ],
                fontNamesIgnoreCheck: ['Helvetica Neue', 'Helvetica', 'Arial', 'Arial Black',
                    'Comic Sans MS', 'Courier New', 'Impact', 'Lucida Grande', 'Tahoma',
                    'Times New Roman', 'Verdana'
                ],
                callbacks: {
                    onImageUpload: function(files) {
                        console.log('Image upload:', files);
                    }
                }
            });
        });

        $(document).ready(function() {
            $('.serviceDescription').summernote();
            var noteBar = $('.note-toolbar');
            noteBar.find('[data-toggle]').each(function() {
                $(this).attr('data-bs-toggle', $(this).attr('data-toggle')).removeAttr('data-toggle');
            });
        });

        


    </script>
@endsection
