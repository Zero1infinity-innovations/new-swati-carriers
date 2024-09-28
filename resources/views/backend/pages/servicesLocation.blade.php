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
                                    <span>Services Area</span>
                                </h5>
                                <a href="" class="btn btn-primary btn-sm me-3">Add Area</a>
                            </div>
                            <div class="card-body">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
