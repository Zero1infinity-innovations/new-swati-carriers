@extends('frontend.common.base')

@push('setTitle')
    New Swati Carriers - Transport Company
@endpush

@section('content')
    @include('frontend.common.carousal')
    <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container about py-5 px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{ URL::asset('img/about.jpg') }}"
                            style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 about-text wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="text-secondary text-uppercase mb-3">हमारे बारे में</h6>
                    <h1 class="mb-5">Quick Transport Solutions</h1>
                    <p class="mb-5" style="text-align: justify;">यह ट्रांसपोर्ट कंपनी भारत की एक प्रमुख लॉजिस्टिक्स
                        प्रदाता है, जो कई जिलों में ट्रक transportation services में विशेषज्ञता रखती है। कंपनी के पास trucks
                        का एक विशाल बेड़ा है, जो industrial materials से लेकर consumer products तक के विभिन्न प्रकार के
                        सामान की reliable और timely delivery सुनिश्चित करता है।
                        <br><br />
                        कंपनी फैजाबाद, आज़मगढ़, बरहलगंज, मऊनाथ भंजन, बेलथरा रोड बलिया, जौनपुर, दोहरीघाट, सिकरीगंज, गगहा,
                        कौरिराम और बरहज जैसे प्रमुख क्षेत्रों में अपने operations के माध्यम से businesses को उनके customers
                        से जोड़ती है। उनके experienced drivers और state-of-the-art tracking systems real-time updates
                        provide करते हैं, जिससे customers को transparency और satisfaction मिलती है।
                        <br /><br />
                        Safety, timely delivery और customer satisfaction के प्रति कंपनी की commitment ने उन्हें logistics
                        industry में एक strong reputation दिलाई है। वे सभी regulatory requirements का पालन करते हैं और सामान
                        की safe transportation को prioritize करते हैं। चाहे यह short-distance हो या long-distance delivery,
                        कंपनी हर delivery को professionally और पूरी देखभाल के साथ handle करती है।
                    </p>
                    <div class="row g-4 mb-5">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                            <i class="fa fa-shipping-fast fa-3x text-primary mb-3"></i>
                            <h5>On Time Delivery</h5>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                            <i class="bi bi-shield-fill-check fa-3x text-primary mb-3"></i>
                            {{-- <i class="fas fa-shield fa-3x text-primary mb-3"></i> --}}
                            <h5>On Time Delivery</h5>
                        </div>
                    </div>
                    <a href="{{ route('about') }}"
                        class="btn btn-primary py-3 px-5 {{ Route::currentRouteName() == 'about' ? 'active' : '' }} ">Explore
                        More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Fact Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase mb-3">Some Facts</h6>
                    <h1 class="mb-5">Best Place To Manage All Of Your Shipments</h1>
                    <p class="mb-5">Safety, timely delivery और customer satisfaction के प्रति कंपनी की commitment ने
                        उन्हें logistics industry में एक strong reputation दिलाई है। वे सभी regulatory requirements का पालन
                        करते हैं और सामान की safe transportation को prioritize करते हैं। चाहे यह short-distance हो या
                        long-distance delivery, कंपनी हर delivery को professionally और पूरी देखभाल के साथ handle करती है।
                    </p>
                    <div class="d-flex align-items-center">
                        <i class="fa fa-headphones fa-2x flex-shrink-0 bg-primary p-3 text-white"></i>
                        <div class="ps-4">
                            <h6>Call for any query!</h6>
                            <h5 class="text-primary m-0">+91 9695137922, 8795958890</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row g-4 align-items-center">
                        <div class="col-sm-6">
                            <div class="bg-primary p-4 mb-4 wow fadeIn" data-wow-delay="0.3s">
                                <i class="fa fa-users fa-2x text-white mb-3"></i>
                                <h2 class="text-white mb-2 counter" data-toggle="counter-up">150</h2>
                                <p class="text-white mb-0">Happy Clients</p>
                            </div>
                            <div class="bg-secondary p-4 wow fadeIn" data-wow-delay="0.5s">
                                <i class="fa fa-ship fa-2x text-white mb-3"></i>
                                <h2 class="text-white mb-2 counter" data-toggle="counter-up">2000</h2>
                                <p class="text-white mb-0">Complete Shipments</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="bg-success p-4 wow fadeIn" data-wow-delay="0.7s">
                                <i class="fa fa-star fa-2x text-white mb-3"></i>
                                <h2 class="text-white mb-2 counter" data-toggle="counter-up">0</h2>
                                <p class="text-white mb-0">Customer Reviews</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->


    <!-- Service Start -->
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
                        <p>यह ट्रांसपोर्ट कंपनी आपको reliable और efficient road transportation services प्रदान करती है, जो
                            आपके सामान की timely delivery का promise करती है। हम Faizabad, Azamgarh, Barhalganj, Maunath
                            Bhanjan, Belthera Road Ballia, Jaunpur,...
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
    <!-- Service End -->


    <!-- Feature Start -->
    <div class="container-fluid overflow-hidden py-5 px-lg-0">
        <div class="container feature py-5 px-lg-0">
            <div class="row g-5 mx-lg-0">
                <div class="col-lg-6 feature-text wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase mb-3">Our Features</h6>
                    <h1 class="mb-5">We Are Trusted Transport Company Since 2005</h1>
                    {{-- <div class="d-flex mb-5 wow fadeInUp" data-wow-delay="0.3s">
                        <i class="fa fa-globe text-primary fa-3x flex-shrink-0"></i>
                        <div class="ms-4">
                            <h5>Worldwide Service</h5>
                            <p class="mb-0">Diam dolor ipsum sit amet eos erat ipsum lorem sed stet lorem sit clita duo
                                justo magna erat amet</p>
                        </div>
                    </div> --}}
                    <div class="d-flex mb-5 wow fadeIn" data-wow-delay="0.5s">
                        <i class="fa fa-shipping-fast text-primary fa-3x flex-shrink-0"></i>
                        <div class="ms-4">
                            <h5>On Time Delivery</h5>
                            <p class="mb-0">हमारी कंपनी समय पर डिलीवरी की गारंटी देती है, ताकि आपके व्यवसाय को कभी रुकावट
                                का सामना न करना पड़े।</p>
                        </div>
                    </div>
                    <div class="d-flex mb-0 wow fadeInUp" data-wow-delay="0.7s">
                        <i class="fa fa-headphones text-primary fa-3x flex-shrink-0"></i>
                        <div class="ms-4">
                            <h5>24/7 Telephone Support</h5>
                            <p class="mb-0">हमारी कंपनी 24/7 टेलीफोन सपोर्ट प्रदान करती है, जिससे आप किसी भी समय हमसे
                                सहायता प्राप्त कर सकते हैं।</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeInRight" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{ URL::asset('img/feature.jpg') }}"
                            style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->

    <!-- Quote Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase mb-3">Get A Quote</h6>
                    <h1 class="mb-5">Request A Free Quote!</h1>
                    <p class="mb-5">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                        eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet</p>
                    <div class="d-flex align-items-center">
                        <i class="fa fa-headphones fa-2x flex-shrink-0 bg-primary p-3 text-white"></i>
                        <div class="ps-4">
                            <h6>Call for any query!</h6>
                            <h5 class="text-primary m-0">+91 9695137922, 8795958890</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="bg-light text-center p-5 wow fadeIn" data-wow-delay="0.5s">
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Name"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" placeholder="Your Email"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Mobile"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" style="height: 55px;">
                                        <option selected>Select A Freight</option>
                                        <option value="1">Freight 1</option>
                                        <option value="2">Freight 2</option>
                                        <option value="3">Freight 3</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" placeholder="Special Note"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->

    <!-- Testimonial Start -->
    @if ($feedbacks->isNotEmpty())
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="text-center">
                    <h6 class="text-secondary text-uppercase">Testimonial</h6>
                    <h1 class="mb-0">Our Clients Say!</h1>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    @foreach ($feedbacks as $feedback)
                        <div class="testimonial-item p-4 my-5">
                            <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                            <div class="d-flex align-items-end mb-4">
                                {{-- <img class="img-fluid flex-shrink-0" src="{{ URL::asset('img/' . $testimonial->image) }}"
                                    style="width: 80px; height: 80px;"> --}}
                                <div class="ms-4">
                                    <h5 class="mb-1">{{ $feedback->name }}</h5>
                                    {{-- <p class="m-0">{{ $feedback->profession }}</p> --}}
                                </div>
                            </div>
                            <p class="mb-0">{{ strip_tags($feedback->feedback) }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
@endsection
