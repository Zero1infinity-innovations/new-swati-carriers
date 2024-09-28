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
                                    <span>Add Booked Service</span>
                                </h5>
                                <a href="{{ route('admin.bookedServices') }}" class="btn btn-primary btn-sm me-3">Back</a>
                            </div>
                            <div class="card-body">
                                <form action="" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col-sm-12 mb-">
                                            <label for="billNumber">Bill Number</label>
                                            <input type="number" name="billNumber" placeholder="bill number" id="billNumber" class="form-control" required/>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-6">
                                            <label for="serviceTitle" class="form-label">Service Name</label>
                                            <select class="form-control" name="serviceTitle" id="serviceTitle" required>
                                                <option hidden>Select Service Type</option>
                                                @foreach ($services as $service)
                                                    <option value="{{ $service->id }}">{{ $service->service_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="bookingDate" class="form-label">Booking Date</label>
                                            <input type="date" class="form-control" placeholder="Booking Date..." id="bookingDate" name="booking_date" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-6">
                                            <label for="customerName" class="form-label">Customer Name</label>
                                            <input type="text" class="form-control" placeholder="Customer Name..." id="customerName" name="customerName" required/>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="customerEmail" class="form-label">Customer Email</label>
                                            <input type="email" class="form-control" placeholder="Customer Email..." id="customerEmail" name="customerEmail" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-6">
                                            <label for="serviceTitle" class="form-label">Customer Number</label>
                                            <input type="text" name="customerNumber" id="customerNumber" maxlength="10" class="form-control" required placeholder="Customer Number...">
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="bookingPrice" class="form-label">Booking Price</label>
                                            <input type="number" class="form-control" id="bookingPrice" name="bookingPrice" placeholder="Booking Price..." required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <label for="localAddress" class="form-label">Local Address</label>
                                            <input type="text" class="form-control" placeholder="Local Address" name="localAddress" id="localAddress" required/>
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="city" class="form-label">City</label>
                                            <input type="text" class="form-control" placeholder="Enter City..." name="city" id="city" required/>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="state" class="form-label">State</label>
                                            <input type="text" class="form-control" id="state" name="state" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-6">
                                            <label for="serviceTitle" class="form-label">Service Name</label>
                                            <select class="form-control" name="serviceTitle" id="serviceTitle">
                                                <option hidden>Select Service Type</option>
                                                @foreach ($services as $service)
                                                    <option value="{{ $service->id }}">{{ $service->service_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="bookingDate" class="form-label">Booking Date</label>
                                            <input type="date" class="form-control" id="bookingDate" name="booking_date" required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="bookingDate" class="form-label">Booking Date</label>
                                        <input type="date" class="form-control" id="bookingDate" name="booking_date" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="bookingTime" class="form-label">Booking Time</label>
                                        <input type="time" class="form-control" id="bookingTime" name="booking_time" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="customerName" class="form-label">Customer Name</label>
                                        <input type="text" class="form-control" id="customerName" name="customer_name" required>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="customerEmail" class="form-label">Customer Email</label>
                                        <input type="email" class="form-control" id="customerEmail" name="customer_email" required>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="customerPhone" class="form-label">Customer Phone</label>
                                        <input type="text" class="form-control" id="customerPhone" name="customer_phone" required>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="customerAddress" class="form-label">Customer Address</label>
                                        <input type="text" class="form-control" id="customerAddress" name="customer_address" required>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
