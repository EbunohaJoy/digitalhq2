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
                    <div class="filtering col-sm-12 text-center">
                        <span data-filter="*" class="active">View All</span>
                        <span data-filter=".cloud">Cloud Service</span>
                        <span data-filter=".cyber">Cyber Security</span>
                        <span data-filter=".consultancy">IT Consultancy</span>
                        <span data-filter=".services">IT Services</span>
                    </div>
                    <!-- end links -->
                </div>
                <div class="row portfolio-gallery-isotope mt-n1-9">
                    <div class="col-md-6 col-lg-4 mt-1-9 cloud" data-src="img/portfolio/portfolio-01.jpg" data-sub-html="<h4 class='text-white'>Web Designing #01</h4><p>Designing 01.</p>">
                        <div class="portfolio-style2">
                            <img class="border-radius-5" src="images/portfolio-01.jpg" alt="...">
                            <div class="portfolio-content">
                                <div class="portfolio-inner-content">
                                    <a href="portfolio-detail.html"><h4>Growth Strategies</h4></a><a href=""></a>
                                    <span class="text-muted font-weight-500">Development</span>
                                </div>
                            </div>
                            <div class="portfolio-buttons">
                                <a class="portfolio-link" href="portfolio-detail.html"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-1-9 cyber" data-src="img/portfolio/portfolio-02.jpg" data-sub-html="<h4 class='text-white'>Tech Conference #02</h4><p>Development 02.</p>">
                        <div class="portfolio-style2">
                            <img class="border-radius-5" src="images/portfolio-02.jpg" alt="...">
                            <div class="portfolio-content">
                                <div class="portfolio-inner-content">
                                    <a href="portfolio-detail.html"><h4>App Development</h4></a>
                                    <span class="text-muted font-weight-500">Media</span>
                                </div>
                            </div>
                            <div class="portfolio-buttons">
                                <a class="portfolio-link" href="portfolio-detail.html"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-1-9 consultancy" data-src="img/portfolio/portfolio-03.jpg" data-sub-html="<h4 class='text-white'>Innovative Interfaces #03</h4><p>Strategies 03.</p>">
                        <div class="portfolio-style2">
                            <img class="border-radius-5" src="images/portfolio-03.jpg" alt="...">
                            <div class="portfolio-content">
                                <div class="portfolio-inner-content">
                                    <a href="portfolio-detail.html"><h4>Data Security</h4></a>
                                    <span class="text-muted font-weight-500">Networking</span>
                                </div>
                            </div>
                            <div class="portfolio-buttons">
                                <a class="portfolio-link" href="portfolio-detail.html"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-1-9 services" data-src="img/portfolio/portfolio-04.jpg" data-sub-html="<h4 class='text-white'>Remote Management #04</h4><p>It Management 04.</p>">
                        <div class="portfolio-style2">
                            <img class="border-radius-5" src="images/portfolio-04.jpg" alt="...">
                            <div class="portfolio-content">
                                <div class="portfolio-inner-content">
                                    <a href="portfolio-detail.html"><h4>Analytic Solutions</h4></a>
                                    <span class="text-muted font-weight-500">IT Technology</span>
                                </div>
                            </div>
                            <div class="portfolio-buttons">
                                <a class="portfolio-link" href="portfolio-detail.html"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-1-9 cloud" data-src="img/portfolio/portfolio-05.jpg" data-sub-html="<h4 class='text-white'>Digital Marketing #05</h4><p>Digital 05.</p>">
                        <div class="portfolio-style2">
                            <img class="border-radius-5" src="images/portfolio-05.jpg" alt="...">
                            <div class="portfolio-content">
                                <div class="portfolio-inner-content">
                                    <a href="portfolio-detail.html"><h4>Product Design</h4></a>
                                    <span class="text-muted font-weight-500">Product</span>
                                </div>
                            </div>
                            <div class="portfolio-buttons">
                                <a class="portfolio-link" href="portfolio-detail.html"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-1-9 cyber" data-src="img/portfolio/portfolio-06.jpg" data-sub-html="<h4 class='text-white'>Virtual Integration #06</h4><p>IT Security 06.</p>">
                        <div class="portfolio-style2">
                            <img class="border-radius-5" src="images/portfolio-06.jpg" alt="...">
                            <div class="portfolio-content">
                                <div class="portfolio-inner-content">
                                    <a href="portfolio-detail.html"><h4>Benefits Research</h4></a>
                                    <span class="text-muted font-weight-500">Project</span>
                                </div>
                            </div>
                            <div class="portfolio-buttons">
                                <a class="portfolio-link" href="portfolio-detail.html"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FOOTER
        @endsection
