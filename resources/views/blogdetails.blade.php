@extends('layouts.app')

@section('content')

        <!-- PAGE TITLE
        ================================================== -->
        <section class="page-title-section bg-img cover-background primary-overlay" data-overlay-dark="7" data-background="img/bg/bg-19.jpg">
            <div class="row position-relative z-index-1">
                <div class="col-md-12">
                    <div class="faded-text">
                        <div class="f-text"><span class="main-font">Blog</span></div>
                    </div>
                    <h1>Blog Details</h1>
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#!">Blog Details</a></li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- BLOG DETAILS
        ================================================== -->
        <section>
            <div class="container">
                <div class="row">

                    <!-- blog-details left -->
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <div class="pe-lg-1-9">
                            <div class="row">
                                <div class="col-lg-12 mb-5">
                                    <article class="card card-style10">
                                        <div class="image-box">
                                            <img src="{{ asset('storage/' . $post->image) }}" alt="Professional Website Design in Nigeria">
                                            <div class="date">
                                                <a href="#!">{{ $post->created_at->format('M') }}</a>
                                                <a href="#!">{{ $post->created_at->format('d') }}</a>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            {{-- <div class="category"><span>Web Development</span></div> --}}
                                            <h3 class="h4 mb-3"><a href="blog-detail.html">{{ $post->title }}</a></h3>
                                            <ul class="list-unstyled border-bottom pb-3 mb-3">
                                                {{-- <li class="last"><i class="far fa-comment-dots me-2 text-secondary"></i><a href="#!">10 Comment</a></li> --}}
                                            </ul>

                                            <div class="row mb-2-2">
                                                <div class="col-lg-12">
                                                    <p class="mb-4 w-lg-95">{{ $post->content }}.</p>

                                                </div>
                                            </div>


                                            <div class="separator"></div>
                                            <div class="row g-0 align-items-center">
                                                <div class="col-md-6 col-xs-12 mb-1-6 mb-md-0">
                                                    <div class="tags">
                                                        {{-- <h6 class="h5 mb-3 text-primary">Related Tags</h6>
                                                        <ul class="blog-tags">
                                                            <li class="d-inline-block"><a href="#!">IT Service</a></li>
                                                            <li class="d-inline-block"><a href="#!">Cloud</a></li>
                                                            <li class="d-inline-block"><a href="#!">Cyber</a></li>
                                                        </ul> --}}
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-xs-12">
                                                    <h6 class="h5 text-md-end text-start mb-3 text-primary">Share Post</h6>
                                                    <div class="text-end">
                                                        <a href="#!" class="me-3"><i class="fab fa-facebook-f"></i></a>
                                                        <a href="#!" class="me-3"><i class="fab fa-twitter"></i></a>
                                                        <a href="#!" class="me-3"><i class="fab fa-instagram"></i></a>
                                                        <a href="#!" class="me-3"><i class="fab fa-youtube"></i></a>
                                                        <a href="#!"><i class="fab fa-linkedin-in"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>



                            </div>
                        </div>
                    </div>
                    <!-- end blog-details left -->

                    <!-- blog-details right -->
                    <div class="col-lg-4">

                    </div>
                    <!-- end blog-details right -->
                </div>
            </div>
        </section>

        <!-- FOOTER
        @endsection
