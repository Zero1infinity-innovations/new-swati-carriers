@extends('frontend.common.base')

@push('setTitle')
    Feedback Form : New Swati Carreirs
@endpush
<style>
    /* Loader styles */
    .loader {
        display: none; /* Hidden by default */
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border: 8px solid #f3f3f3;
        border-radius: 50%;
        border-top: 16px solid #FF3E41;
        width: 100px;
        height: 100px;
        animation: spin 2s linear infinite;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    /* Overlay to make the background inactive */
    .overlay {
        display: none; /* Hidden by default */
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
        z-index: 9999; /* On top of other content */
    }
</style>
@section('content')
    <div class="overlay" id="overlay">
        <div class="loader" id="loader"></div>
    </div>
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
                        <div class="card-header" style="display:flex; justify-content: space-between;">
                            <h5 class="mb-0">Feedback Form</h5>
                            @if (session('success'))
                                <div id="success-message" class="text-success">
                                    {{ session('success') }}
                                </div>
                            @elseif (session('error'))
                                <div id="error-message" class="text-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                        </div>
                        <div class="card-body">
                            <form id="myForm" action="{{ route('sendFeedback') }}" method="POST">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            id="name" name="name" value="{{ old('name') }}">
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            id="email" name="email" value="{{ old('email') }}">
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <label for="message" class="form-label">Message</label>
                                        <textarea name="feedback" id="summernote" class="form-control @error('message') is-invalid @enderror">{{ old('message') }}</textarea>
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
        //loader
        document.getElementById('myForm').addEventListener('submit', function() {
            // Show the loader and overlay when the form is submitted
            document.getElementById('overlay').style.display = 'block';
            document.getElementById('loader').style.display = 'block';
        });

        // text editor
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 300,
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

        // Hide the success message after 5 seconds
        setTimeout(function() {
            $('#success-message').fadeOut('slow');
        }, 5000);
    
        // Hide the error message after 5 seconds
        setTimeout(function() {
            $('#error-message').fadeOut('slow');
        }, 5000);
    </script>
@endsection
