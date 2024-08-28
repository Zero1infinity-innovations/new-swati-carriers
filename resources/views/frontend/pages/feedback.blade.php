@extends('frontend.common.base')

@push('setTitle')
    Feedback Form : New Swati Carreirs
@endpush

@section('content')
    <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Feedback</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item text-white">Pages</li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Feedback</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container-xxl py-2">
        <div class="container py-2">
            <div class="row g-4">
                <div class="col-md-12 col-lg-12 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Feedback Form</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('feedback.store') }}" method="POST">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <label for="message" class="form-label">Message</label>
                                        {{-- <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="5">{{ old('message') }}</textarea> --}}
                                        <textarea name="content" id="editor"></textarea>
                                        @error('message')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        CKEDITOR.replace('editor');
    </script>
@endsection
