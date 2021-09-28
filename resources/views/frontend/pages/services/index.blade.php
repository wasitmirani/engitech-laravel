@extends('layouts.backend.master')
@section('content')
<div class="page-header flex-middle">
    <div class="container">
        <div class="inner flex-middle">
            <h1 class="page-title">IT Services</h1>
            <ul id="breadcrumbs" class="breadcrumbs none-style">
                <li><a href="/">Home</a></li>
                <li class="active">IT Services</li>
            </ul>
        </div>
    </div>
</div>
<section class="service-page">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-8 mb-4 mb-sm-0">
                <div class="ot-heading mb-0">
                    <span>// our service</span>
                    <h2 class="main-heading">We Offer a Wide <br>Variety of IT Services</h2>
                </div>
            </div>
            <div class="col-md-6 col-sm-4 text-sm-right align-self-end">
                <div class="ot-button">
                    <a href="/services/" class="octf-btn octf-btn-primary">all sevices</a>
                </div>
                <div class="space-10"></div>
            </div>
        </div>
        <div class="space-55"></div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="icon-box-s2 s1 pb-60">
                    <div class="icon-main"><span class="flaticon-code"></span></div>
                    <div class="content-box">
                        <h5>Web Development</h5>
                        <p>We carry more than just good coding skills. Our experience makes us stand out from other web development.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="icon-box-s2 s1 pb-60">
                    <div class="icon-main"><span class="flaticon-app"></span></div>
                    <div class="content-box">
                        <h5>Mobile Development</h5>
                        <p>Create complex enterprise software, ensure reliable software integration , modernise your legacy system.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="icon-box-s2 s1 pb-60">
                    <div class="icon-main"><span class="flaticon-monitor"></span></div>
                    <div class="content-box">
                        <h5>UI/UX Design</h5>
                        <p>Build the product you need on time with an experienced team that uses a clear and effective design process.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="icon-box-s2 s1 sm-pb-60">
                    <div class="icon-main"><span class="flaticon-browser"></span></div>
                    <div class="content-box">
                        <h5>QA &amp; Testing</h5>
                        <p>Turn to our experts to perform comprehensive, multi-stage testing and auditing of your software.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="icon-box-s2 s1 xs-pb-60">
                    <div class="icon-main"><span class="flaticon-report-1"></span></div>
                    <div class="content-box">
                        <h5>IT Counsultancy</h5>
                        <p>Trust our top minds to eliminate workflow pain points, implement new tech, and consolidate app portfolios.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="icon-box-s2 s1">
                    <div class="icon-main"><span class="flaticon-best"></span></div>
                    <div class="content-box">
                        <h5>Dedicated Team</h5>
                        <p>Over the past decade, our customers succeeded by leveraging Intellectsoft’s process of building, motivating.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="service-pricing">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="ot-heading">
                    <span>// choose your plan</span>
                    <h2 class="main-heading">Flexible Pricing Plans</h2>
                </div>
                <div class="space-5"></div>
                <p>We help businesses elevate their value through custom software development,<br>product design, QA and consultancy services.</p>
                <div class="space-20"></div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="ot-pricing-table">
                    <div class="icon-main"><span class="flaticon-tablet"></span></div>
                    <div class="inner-table">
                        <h4 class="title-table">Basic Plan</h4>
                        <h2><sup>$</sup> 129.99</h2>
                        <span>Monthly Package</span>
                        <div class="details ">
                            <ul>
                                <li class="active">Web Counsulting</li>
                                <li class="active">24/7 System Monitoring</li>
                                <li class="active">Machine and Deep Learning</li>
                                <li>Data Quality Management</li>
                                <li>Security Management</li>
                            </ul>
                        </div>
                        <a href="#" class="octf-btn">Choose Plane</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="ot-pricing-table">
                    <div class="icon-main"><span class="flaticon-report"></span></div>
                    <div class="inner-table">
                        <h4 class="title-table">Economy Plan</h4>
                        <h2><sup>$</sup> 159.99</h2>
                        <span>Monthly Package</span>
                        <div class="details ">
                            <ul>
                                <li class="active">Web Counsulting</li>
                                <li class="active">24/7 System Monitoring</li>
                                <li class="active">Machine and Deep Learning</li>
                                <li class="active">Data Quality Management</li>
                                <li>Security Management</li>
                            </ul>
                        </div>
                        <a href="#" class="octf-btn">Choose Plane</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="ot-pricing-table">
                    <div class="icon-main"><span class="flaticon-ui"></span></div>
                    <div class="inner-table">
                        <h4 class="title-table">Premium Plan</h4>
                        <h2><sup>$</sup> 189.99</h2>
                        <span>Monthly Package</span>
                        <div class="details ">
                            <ul>
                                <li class="active">Web Counsulting</li>
                                <li class="active">24/7 System Monitoring</li>
                                <li class="active">Machine and Deep Learning</li>
                                <li class="active">Data Quality Management</li>
                                <li class="active">Security Management</li>
                            </ul>
                        </div>
                        <a href="#" class="octf-btn">Choose Plane</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-consultation">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <p>// Drop us a line! We are here to answer your questions 24/7</p>
                <h2>NEED A CONSULTATION?</h2>
                <div class="ot-button">
                    <a href="contact.html" class="octf-btn octf-btn-primary">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="service-clients bg-map-dots">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="ot-heading text-center">
                    <span>// our clients</span>
                    <h2 class="main-heading">We are Trusted <br>15+ Countries Worldwide</h2>
                </div>
            </div>
        </div>
        <div class="space-35"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="ot-testimonials">
                    <div class="owl-carousel owl-theme testimonial-inner ot-testimonials-slider">
                        <div class="testi-item">
                            <div class="layer1"></div>
                            <div class="layer2">
                                <div class="t-head flex-middle">
                                    <img src="images/testi2.png" alt="Emilia Clarke" class="lazyloaded" data-ll-status="loaded">
                                    <div class="tinfo">
                                        <h6>SoftTech,</h6>
                                        <span>Manager of Company</span>
                                    </div>
                                </div>
                                <div class="ttext">
                                    "Patience. Infinite patience. No shortcuts. Very well thought out and articulate communication. Clear milestones, deadlines and fast work. Even if the client is being careless. The best part...always solving problems with great original ideas!."
                                </div>
                            </div>
                        </div>
                        <div class="testi-item">
                            <div class="layer1"></div>
                            <div class="layer2">
                                <div class="t-head flex-middle">
                                    <img src="images/testi1.png" alt="Emilia Clarke" class="lazyloaded" data-ll-status="loaded">
                                    <div class="tinfo">
                                        <h6>Moonkle LTD,</h6>
                                        <span>Client of Company</span>
                                    </div>
                                </div>
                                <div class="ttext">
                                    "Very well thought out and articulate communication. Clear milestones, deadlines and fast work. Patience. Infinite patience. No shortcuts. Even if the client is being careless. The best part...always solving problems with great original ideas!."
                                </div>
                            </div>
                        </div>
                        <div class="testi-item">
                            <div class="layer1"></div>
                            <div class="layer2">
                                <div class="t-head flex-middle">
                                    <img src="images/testi2.png" alt="Emilia Clarke" class="lazyloaded" data-ll-status="loaded">
                                    <div class="tinfo">
                                        <h6>SoftTech,</h6>
                                        <span>Manager of Company</span>
                                    </div>
                                </div>
                                <div class="ttext">
                                    "Patience. Infinite patience. No shortcuts. Very well thought out and articulate communication. Clear milestones, deadlines and fast work. Even if the client is being careless. The best part...always solving problems with great original ideas!."
                                </div>
                            </div>
                        </div>
                        <div class="testi-item">
                            <div class="layer1"></div>
                            <div class="layer2">
                                <div class="t-head flex-middle">
                                    <img src="images/testi1.png" alt="Emilia Clarke" class="lazyloaded" data-ll-status="loaded">
                                    <div class="tinfo">
                                        <h6>Moonkle LTD,</h6>
                                        <span>Client of Company</span>
                                    </div>
                                </div>
                                <div class="ttext">
                                    "Very well thought out and articulate communication. Clear milestones, deadlines and fast work. Patience. Infinite patience. No shortcuts. Even if the client is being careless. The best part...always solving problems with great original ideas!."
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection