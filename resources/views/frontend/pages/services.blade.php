@extends('frontend.common.base')

@push('setTitle')
    Services New Swati Carriers - Transport Company
@endpush

@section('content')
    <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item text-white">Pages</li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">हमारी सेवाएं</h6>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="{{ URL::asset('img/service-3.jpg') }}" alt="">
                        </div>
                        <h4 class="mb-3">Road Transportation</h4>
                        <p style="text-align: justify;">यह ट्रांसपोर्ट कंपनी आपको reliable और efficient road transportation services प्रदान करती है, जो आपके सामान की timely delivery का promise करती है। हम Faizabad, Azamgarh, Barhalganj, Maunath Bhanjan, Belthera Road Ballia, Jaunpur,... 
                            {{-- Dohrighat, Sikriganj, Gagha, Kauriram, और Barhaj जैसे key areas में logistics solutions के experts हैं, जो businesses को उनके customers से connect करते हैं। ... --}}

                            {{-- हमारी road transportation services हर type के सामान की safety और timely delivery को ensure करती हैं। चाहे आपको industrial goods transport करने हों या consumer products, हमारे experienced drivers और modern tracking systems से आपको real-time updates मिलते हैं, ताकि आप अपने shipment की exact location track कर सकें। ये locations हमारे key transport hubs हैं, जहां से हम आपके goods को efficiently deliver करते हैं. --}}
                            
                            {{-- Safety और reliability पर हमारा focus है, इसलिए हमारे customers को complete satisfaction मिलती है। आपका सामान हमारे trucks के जरिए इन सभी locations में safely और time पर पहुंचता है। हर delivery को हम पूरी सावधानी और professionalism के साथ handle करते हैं, ताकि आपको best service मिल सके।.</p> --}}
                        </p>
                        <a class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
