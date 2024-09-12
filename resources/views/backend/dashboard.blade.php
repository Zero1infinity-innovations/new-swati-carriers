@extends('backend.common.adminBaseLayout')

@push('setTitle')
    {{ $title }} : New Swati Carriers
@endpush

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card" style="border-left: 5px solid black; ">
                    <div class="card-body">
                        <h4 class="mb-0 text-dark">{{ $title }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection