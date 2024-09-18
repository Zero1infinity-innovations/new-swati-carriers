@extends('backend.common.adminBaseLayout')

@push('setTitle')
    {{ $title }} : New Swati Carriers
@endpush
<style>
    .image-preview-container {
        display: flex;
        flex-direction: row;
        /* Arrange elements in a row */
        justify-content: center;
        align-items: center;
        border: 2px dashed #ddd;
        padding: 10px;
        width: 100%;
        /* Adjust the width to ensure proper alignment */
    }

    .image-upload-label {
        display: flex;
        flex-direction: column;
        align-items: center;
        font-size: 24px;
        color: #888;
        cursor: pointer;
        margin-right: 20px;
        /* Add spacing between the icon and the image */
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
        margin-left: 20px;
        /* Add some space between the image and the icon */
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
        @include('backend.common.alert')
        @include('backend.common.successMessagae')
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
                                <form id="serviceForm" action="{{ route('admin.saveServices') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="serviceTitle" class="form-label">Service Title</label>
                                        <input type="text" class="form-control" id="serviceTitle" name="service_title"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="service_Status" class="form-label">Service Status</label>
                                        <select class="form-select" id="service_Status" name="service_status" required>
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="serviceDescription" class="form-label">Service Description</label>
                                        <textarea class="form-control" id="summernote" name="service_description" required></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="serviceImage" class="form-label">Service Image</label>
                                        <div class="image-preview-container">
                                            <label for="serviceImage" class="image-upload-label">
                                                <i class="fas fa-plus-circle"></i>
                                                <span>Add/Change Image</span>
                                            </label>
                                            <img id="imagePreview" src="" alt="Image Preview" class="img-thumbnail"
                                                style="display: none;">
                                            <input type="file" class="form-control d-none" id="serviceImage"
                                                name="service_image" required onchange="previewImage(event)">
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
                            <div class="card-head"
                                style="background-color:  rgb(90, 90, 90); border-left: 5px solid rgb(90, 90, 90);">
                                <h5 class="mb-0 text-white">
                                    <i class="bi bi-list-task"></i>
                                    <span>Service List</span>

                                </h5>
                            </div>
                            <div class="card-body table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Service Id</th>
                                            <th>Service Logo</th>
                                            <th>Service Name</th>
                                            <th>Service Description</th>
                                            <th>Status</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $sn = 1;
                                        @endphp
                                        @foreach ($services as $service)
                                            <tr>
                                                <td class="text-center">{{ $service->id }}</td>
                                                <td>
                                                    <img src="{{ asset('adminAssets/images/services/' . $service->image_path) }}"
                                                        class="rounded-circle" alt="Service Image" width="50"
                                                        height="50">
                                                </td>
                                                <td>
                                                    <a onclick="showServiceDetails('{{ $service->id }}')" type="button"
                                                        class="text-primary" data-mdb-ripple-init data-mdb-modal-init
                                                        data-mdb-target="#detailsModal">
                                                        {{ $service->service_name }}
                                                    </a>
                                                </td>
                                                <td>{{ substr(strip_tags($service->service_description), 0, 70) }}...</td>
                                                <td>
                                                    @if ($service->service_status == 1)
                                                        <a href="#" class="btn btn-success btn-sm mb-2 changeStatus" data-service-id="{{ $service->id }}" data-status="1">Active</a>
                                                    @elseif($service->service_status == 0)
                                                        <a href="#" class="btn btn-danger btn-sm mb-2 changeStatus" data-service-id="{{ $service->id }}" data-status="0">Inactive</a>
                                                    @endif
                                                    <span id="statusSpinner" class="spinner-border spinner-border-sm mb-2" style="display: none;" role="status"></span>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-sm btn-primary">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.deleteService', ['id' => $service->id]) }}" class="btn btn-sm btn-danger">
                                                        <i class="bi bi-trash-fill"></i>
                                                    </a>
                                                    <div class="spinner-border text-primary" role="status" style="display: none;">
                                                        <span class="visually-hidden">Loading...</span>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="modal fade" id="detailsModal" tabindex="-1"
                                    aria-labelledby="detailsModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-fullscreen">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="detailsModalLabel">Service Details</h5>
                                                <button type="button" class="btn-close" data-mdb-ripple-init
                                                    data-mdb-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-sm-1"></div>
                                                    <div class="col-sm-10">
                                                        <div class="card mb-3">
                                                            <div class="row g-0">
                                                                <div class="col-md-2">
                                                                    <img src="" id="serviceImagePreview"
                                                                        class="img-fluid rounded" alt="Employee Image">
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="card-body">
                                                                        <ul class="list-group list-group-flush">
                                                                            <li class="list-group-item"
                                                                                style="font-weight: bold;">
                                                                                <span class="me-2">Service Id:</span>
                                                                                <span id="serviceId"></span>
                                                                            </li>
                                                                            <li class="list-group-item"
                                                                                style="font-weight: bold;">
                                                                                <span class="me-2">Service Name:</span>
                                                                                <span id="serviceName"></span>
                                                                            </li>
                                                                            <li class="list-group-item"
                                                                                style="font-weight: bold;">
                                                                                <span class="me-2">Service Status:</span>
                                                                                <span id="serviceStatus"></span>
                                                                            </li>
                                                                            <li class="list-group-item"
                                                                                style="font-weight: bold;">
                                                                                <span class="me-2">Service
                                                                                    Decription:</span>
                                                                                <p id="serviceDescription"
                                                                                    style="text-align: justify;"></p>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-1"></div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-mdb-ripple-init
                                                    data-mdb-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                    imagePreview.style.display = 'block';
                }

                reader.readAsDataURL(file);
            }
        }


        // text editor
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 193,
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
            $('.summernote').summernote();
            var noteBar = $('.note-toolbar');
            noteBar.find('[data-toggle]').each(function() {
                $(this).attr('data-bs-toggle', $(this).attr('data-toggle')).removeAttr('data-toggle');
            });
        });

        // show data in modal
        const showServiceDetails = (serviceId) => {
            $.ajax({
                url: "{{ url('admin/showServiceDetails') }}/" + serviceId,
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                },
                success: function(response) {
                    if (response.success) {
                        var baseUrl = window.location.origin
                        // Update modal content with service details
                        $('#serviceImagePreview').attr('src', baseUrl + response.service.image);
                        $('#serviceId').text(response.service.id);
                        $('#serviceName').text(response.service.name);

                        const statusElement = $('#serviceStatus');
                        if (response.service.status == 1) {
                            statusElement.text('Active')
                                .removeClass('badge-danger')
                                .addClass('badge-success')
                                .css({
                                    'color': '#fff',
                                    'background-color': '#28a745',
                                    'padding': '3px 3px',
                                    'border-radius': '5px',
                                    'font-weight': 'bold'
                                });
                        } else {
                            statusElement.text('Inactive')
                                .removeClass('badge-success')
                                .addClass('badge-danger')
                                .css({
                                    'color': '#fff',
                                    'background-color': '#dc3545',
                                    'padding': '3px 3px',
                                    'border-radius': '5px',
                                    'font-weight': 'bold'
                                });
                        }
                        $('#serviceDescription').html(response.service.description);

                        // Show the modal
                        $('#detailsModal').modal('show');
                    } else {
                        alert('Failed to fetch service details.');
                    }
                },
                error: function() {
                    alert('An error occurred while fetching service details.');
                }
            });
        };


        // toggling service status
        const changeStatus = (element) => {
            const serviceId = $(element).data('service-id');
            const currentStatus = $(element).data('status');

            var confirmChange = confirm('Are you sure you want to change the service status?');
            if (confirmChange) {
                
                $('#statusSpinner').show();
                $('#statusText').hide();

                // Disable the button to prevent multiple clicks
                $(element).prop('disabled', true);

                $.ajax({
                    url: "{{ route('admin.changeServivceStatus') }}", 
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}', 
                        service_id: serviceId
                    },
                    success: function(response) {
                        $('#statusSpinner').hide();
                        $('#statusText').show();

                        // Enable the button again
                        $(element).prop('disabled', false);

                        if (response.success) {
                            // Update the button text and status class
                            if (response.status == 1) {
                                $(element).removeClass('btn-danger').addClass('btn-success');
                                $(element).text('Active');
                                $(element).data('status', 1);
                            } else {
                                $(element).removeClass('btn-success').addClass('btn-danger');
                                $(element).text('Inactive');
                                $(element).data('status', 0);
                            }
                            // Call showNotification every time status changes successfully
                            showNotification('success', 'Service status successfully updated.');
                        } else {
                            // Call showNotification in case of failure
                            showNotification('error', 'Failed to update service status.');
                        }
                    },
                    error: function(xhr) {
                        // Hide spinner and show text in case of error
                        $('#statusSpinner').hide();
                        $('#statusText').show();

                        // Enable the button again
                        $(element).prop('disabled', false);

                        // Call showNotification on error
                        showNotification('error', xhr.responseText);
                    }
                });
            } else {
                return false;
            }
        }

        // Attach event listener to buttons with the class 'changeStatus'
        $(document).on('click', '.changeStatus', function(e) {
            e.preventDefault();
            changeStatus(this);
        });
    </script>
@endsection
