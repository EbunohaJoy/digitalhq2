@extends('layouts.app')

@section('content')

        <!-- PAGE TITLE
        ================================================== -->
        <section class="page-title-section bg-img cover-background primary-overlay" data-overlay-dark="7" data-background="img/bg/bg-19.jpg">
            <div class="row position-relative z-index-1">
                <div class="col-md-12">
                    <div class="faded-text">
                        <div class="f-text"><span class="main-font">Portfolio-1</span></div>
                    </div>
                    <h1>Portfolio 01</h1>
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#!">Portfolio 01</a></li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- PORTFOLIO STYLE 01
        ================================================== -->
        <section>
            <div class="container">
                <div class="section-heading5">
                    <span class="sub-title">Look At Portfolio</span>
                    <h2>Check Out Our <span class="text-secondary">Portfolio</span></h2>
                    <div class="divider"></div>
                </div>
                <div class="row">
                    <!-- start links -->
                    {{-- <div class="filtering col-sm-12 text-center">
                        <span data-filter="*" class="active">View All</span>
                        <span data-filter=".cloud">Cloud Service</span>
                        <span data-filter=".cyber">Cyber Security</span>
                        <span data-filter=".consultancy">IT Consultancy</span>
                        <span data-filter=".services">IT Services</span>
                    </div> --}}
                    <!-- end links -->
                </div>
                <div class="row portfolio-gallery-isotope mt-n1-9">
                  @foreach ($ports as $port)
                    <div class="col-md-6 col-lg-4 mt-1-9 cloud" data-src="{{ asset('storage/' . $port->image) }}" data-sub-html="<h4 class='text-white'>Web Designing #01</h4><p>Designing 01.</p>">
                        <div class="portfolio-style2">
                            <img class="border-radius-5" src="{{ asset('storage/' . $port->image) }}" alt="...">
                            <div class="portfolio-content">
                                <div class="portfolio-inner-content">
                                    <a href="portfolio-detail.html"><h4>{{$port->title}}</h4></a><a href=""></a>
                                    {{-- <span class="text-muted font-weight-500">Development</span> --}}
                                </div>
                            </div>
                            <div class="portfolio-buttons">
                                <a class="portfolio-link" href="portfolio-detail.html"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div>
@endforeach
                </div>
            </div>
        </section>

        <!-- FOOTER
        @endsection
