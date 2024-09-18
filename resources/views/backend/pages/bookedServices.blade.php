@extends('backend.common.adminBaseLayout')

@push('setTitle')
    {{ $title }} : New Swati Carriers
@endpush
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
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-head"
                                style="background-color:  rgb(90, 90, 90); border-left: 5px solid rgb(90, 90, 90); display:flex; justify-content:space-between;">
                                <h5 class="mb-0 text-white ps-2">
                                    <i class="bi bi-journal-plus "></i>
                                    <span>Booked Service</span>
                                </h5>
                                <a href="{{ route('admin.addBookedServicePage') }}" class="btn btn-primary btn-sm me-3">Add Booked Sertvice</a>
                            </div>
                            <div class="card-body">
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>

        // show data in modal
        // const showServiceDetails = (serviceId) => {
        //     $.ajax({
        //         url: "{{ url('admin/showServiceDetails') }}/" + serviceId,
        //         type: 'POST',
        //         data: {
        //             _token: '{{ csrf_token() }}',
        //         },
        //         success: function(response) {
        //             if (response.success) {
        //                 var baseUrl = window.location.origin
        //                 // Update modal content with service details
        //                 $('#serviceImagePreview').attr('src', baseUrl + response.service.image);
        //                 $('#serviceId').text(response.service.id);
        //                 $('#serviceName').text(response.service.name);

        //                 const statusElement = $('#serviceStatus');
        //                 if (response.service.status == 1) {
        //                     statusElement.text('Active')
        //                         .removeClass('badge-danger')
        //                         .addClass('badge-success')
        //                         .css({
        //                             'color': '#fff',
        //                             'background-color': '#28a745',
        //                             'padding': '3px 3px',
        //                             'border-radius': '5px',
        //                             'font-weight': 'bold'
        //                         });
        //                 } else {
        //                     statusElement.text('Inactive')
        //                         .removeClass('badge-success')
        //                         .addClass('badge-danger')
        //                         .css({
        //                             'color': '#fff',
        //                             'background-color': '#dc3545',
        //                             'padding': '3px 3px',
        //                             'border-radius': '5px',
        //                             'font-weight': 'bold'
        //                         });
        //                 }
        //                 $('#serviceDescription').html(response.service.description);

        //                 // Show the modal
        //                 $('#detailsModal').modal('show');
        //             } else {
        //                 alert('Failed to fetch service details.');
        //             }
        //         },
        //         error: function() {
        //             alert('An error occurred while fetching service details.');
        //         }
        //     });
        // };


        // toggling service status
        // const changeStatus = (element) => {
        //     const serviceId = $(element).data('service-id');
        //     const currentStatus = $(element).data('status');

        //     var confirmChange = confirm('Are you sure you want to change the service status?');
        //     if (confirmChange) {
                
        //         $('#statusSpinner').show();
        //         $('#statusText').hide();

        //         // Disable the button to prevent multiple clicks
        //         $(element).prop('disabled', true);

        //         $.ajax({
        //             url: "{{ route('admin.changeServivceStatus') }}", 
        //             type: 'POST',
        //             data: {
        //                 _token: '{{ csrf_token() }}', 
        //                 service_id: serviceId
        //             },
        //             success: function(response) {
        //                 $('#statusSpinner').hide();
        //                 $('#statusText').show();

        //                 // Enable the button again
        //                 $(element).prop('disabled', false);

        //                 if (response.success) {
        //                     // Update the button text and status class
        //                     if (response.status == 1) {
        //                         $(element).removeClass('btn-danger').addClass('btn-success');
        //                         $(element).text('Active');
        //                         $(element).data('status', 1);
        //                     } else {
        //                         $(element).removeClass('btn-success').addClass('btn-danger');
        //                         $(element).text('Inactive');
        //                         $(element).data('status', 0);
        //                     }
        //                     // Call showNotification every time status changes successfully
        //                     showNotification('success', 'Service status successfully updated.');
        //                 } else {
        //                     // Call showNotification in case of failure
        //                     showNotification('error', 'Failed to update service status.');
        //                 }
        //             },
        //             error: function(xhr) {
        //                 // Hide spinner and show text in case of error
        //                 $('#statusSpinner').hide();
        //                 $('#statusText').show();

        //                 // Enable the button again
        //                 $(element).prop('disabled', false);

        //                 // Call showNotification on error
        //                 showNotification('error', xhr.responseText);
        //             }
        //         });
        //     } else {
        //         return false;
        //     }
        // }

        // // Attach event listener to buttons with the class 'changeStatus'
        // $(document).on('click', '.changeStatus', function(e) {
        //     e.preventDefault();
        //     changeStatus(this);
        // });
    </script>
@endsection
