@extends('layouts.master')

@section('title')
    {{ $blog->blog_title }} - Network & Security - Gaurav Garry
@endsection

@section('description')
    This is blog details page of Gaurav Garry.
@endsection

@section('content')
    <section>
        <div class="w-100 position-relative">
            <div class="fixed-bg" style="background: #000;"></div>
            <div class="container">
                <div class="page-title text-center w-100">
                    <h1 class="mb-0 text-white">{{ $blog->blog_title }}</h1>
                </div><!-- Page Title -->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/" title=""><i class="icon_house"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{ $cat }}" title="">{{ $blog->blog_category }}</a>
                    </li>
                    <li class="breadcrumb-item active">{{ $blog->blog_title }}</li>
                </ol><!-- Breadcrumb -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-155 pb-120 position-relative">
            <div class="container">
                <div class="blog-detail-wrap w-100">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-8">
                            <div class="leftside">
                                <div class="theiaStickySidebar">
                                    <div class="blog-detail w-100">
                                        <div class="blog-img-info w-100">
                                            <img class="img-fluid w-50" src="{{ asset($blog->blog_image) }}"
                                                alt="Blog Detail Image">
                                            <h2 class="mb-0">{{ $blog->blog_title }}</h2>
                                            <ul class="pst-dtl-mta mb-0 list-unstyled d-flex flex-wrap">
                                                <li><strong>{{ $blog->updated_at }}</strong></li>
                                                <li>Posted by <a href="/about" title="">Gaurav Garry</a></li>
                                                <li>In: <a href="{{ $cat }}"
                                                        title="">{{ $blog->blog_category }}</a></li>
                                                <li>Comments: <span>0</span></li>
                                            </ul>
                                        </div>
                                        {!! $blog->blog_content !!}
                                        <div class="blog-detaildata w-100">
                                            <div class="d-block tags w-100">
                                                <span>Tags:</span>
                                                <a href="javascript:void(0);" title="">Graphic Design</a>,
                                                <a href="javascript:void(0);" title="">Photoshop</a>,
                                                <a href="javascript:void(0);" title="">Websites</a>,
                                                <a href="javascript:void(0);" title="">Photography</a>,
                                                <a href="javascript:void(0);" title="">Articles</a>
                                            </div>
                                            <div class="scl4 w-100">
                                                <span>Share:</span>
                                                <a class="d-inline-block rounded-circle facebook" href="javascript:void(0);"
                                                    title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                                <a class="d-inline-block rounded-circle twitter" href="javascript:void(0);"
                                                    title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                                                <a class="d-inline-block rounded-circle google" href="javascript:void(0);"
                                                    title="Google Plus" target="_blank"><i
                                                        class="fab fa-google-plus-g"></i></a>
                                                <a class="d-inline-block rounded-circle pinterest"
                                                    href="javascript:void(0);" title="Pinterest" target="_blank"><i
                                                        class="fab fa-pinterest-p"></i></a>
                                            </div>
                                        </div>
                                        <div class="author d-flex flex-wrap align-items-center w-100 brd-rd10">
                                            <div class="author-img">
                                                <img class="rounded-circle" src="{{ asset('assets/images/Gaurav1.png') }}"
                                                    alt="Author Image">
                                            </div>
                                            <div class="author-info">
                                                <h3 class="mb-0">Gaurav Garry</h3>
                                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                                    sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
                                            </div>
                                        </div>
                                        <div class="reply-form w-100">
                                            <h3 class="mb-0">Leave a Comment</h3>
                                            <form class="w-100">
                                                <div class="row mrg20">
                                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                                        <input class="w-100 mt-20" type="text" placeholder="Your Name *">
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                                        <input class="w-100 mt-20" type="email"
                                                            placeholder="Email Address *">
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                                        <input class="w-100 mt-20" type="url" placeholder="Website *">
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                                        <textarea class="w-100 mt-20" placeholder="Your Comment *"></textarea>
                                                        <button class="thm-btn mini-btn mt-40 brd-rd3"
                                                            type="submit">SEND</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-4">
                            <div class="rightsside">
                                <div class="theiaStickySidebar">
                                    <div class="sdbr-wrp w-100">
                                        <div class="wdgt style2 brd-rd3 w-100">
                                            <h4>Looking For A First</h4>
                                            <ul class="mb-0 list-unstyled w-100">
                                                <li><a href="/network-security" title="">Network & Security</a>
                                                </li>
                                                <li><a href="/cloud-computing" title="">Cloud Computing</a></li>
                                                <li><a href="/social-media" title="">Social Media</a></li>
                                            </ul>
                                        </div>
                                        <div class="wdgt mt-50 style2 brd-rd3 w-100">
                                            <h4>Latest News</h4>
                                            <div class="mini-pst-wrp w-100">
                                                <div class="mini-pst-bx w-100">
                                                    <a href="#" title=""><img
                                                            src="{{ asset('assets/images/resources/mini-pst-img1-1.jpg') }}"
                                                            alt="Mini Post Image 1"></a>
                                                    <div class="mini-pst-inf">
                                                        <span class="pst-dat"><a href="javascript:void(0);"
                                                                title="">29 October</a></span>
                                                        <h4><a href="#" title="">Post with
                                                                Gallery</a></h4>
                                                        <span class="pst-athr"><a href="javascript:void(0);"
                                                                title="">Robin Miles</a></span>
                                                    </div>
                                                </div>
                                                <div class="mini-pst-bx w-100">
                                                    <a href="#" title=""><img
                                                            src="{{ asset('assets/images/resources/mini-pst-img1-2.jpg') }}"
                                                            alt="Mini Post Image 2"></a>
                                                    <div class="mini-pst-inf">
                                                        <span class="pst-dat"><a href="javascript:void(0);"
                                                                title="">6 October</a></span>
                                                        <h4><a href="#" title="">Video Post
                                                                Format</a></h4>
                                                        <span class="pst-athr"><a href="javascript:void(0);"
                                                                title="">Jonathana Miller</a></span>
                                                    </div>
                                                </div>
                                                <div class="mini-pst-bx w-100">
                                                    <a href="#" title=""><img
                                                            src="{{ asset('assets/images/resources/mini-pst-img1-3.jpg') }}"
                                                            alt="Mini Post Image 3"></a>
                                                    <div class="mini-pst-inf">
                                                        <span class="pst-dat"><a href="javascript:void(0);"
                                                                title="">23 September</a></span>
                                                        <h4><a href="#" title="">Audio Post
                                                                Format</a></h4>
                                                        <span class="pst-athr"><a href="javascript:void(0);"
                                                                title="">Admin</a></span>
                                                    </div>
                                                </div>
                                                <a class="thm-btn rounded-pill" href="{{ $cat }}" title="">All
                                                    News</a>
                                            </div>
                                        </div>
                                        <div class="wdgt mt-50 style2 brd-rd3 w-100">
                                            <h4>Tagcloud</h4>
                                            <div class="tagcloud w-100">
                                                <a href="javascript:void(0);" title="">Mock-Ups</a>
                                                <a href="javascript:void(0);" title="">UI</a>
                                                <a href="javascript:void(0);" title="">Websites</a>
                                                <a href="javascript:void(0);" title="">PSD Templates</a>
                                                <a href="javascript:void(0);" title="">Branding</a>
                                                <a href="javascript:void(0);" title="">WordPress</a>
                                                <a href="javascript:void(0);" title="">Graphic Design</a>
                                                <a href="javascript:void(0);" title="">UI Kit</a>
                                                <a href="javascript:void(0);" title="">Development</a>
                                            </div>
                                        </div>
                                    </div><!-- Sidebar Wrap -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Blog Detail Wrap -->
            </div>
        </div>
    </section>
@endsection
