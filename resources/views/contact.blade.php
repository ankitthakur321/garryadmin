@extends('layouts.master')

@section('title')
    Contact - Gaurav Garry
@endsection

@section('description')
    This is contact page of Gaurav Garry.
@endsection

@section('content')
    <section>
        <div class="w-100 dark-layer3 opc85 position-relative">
            <div class="fixed-bg" style="background-image: url(assets/images/parallax6.jpg);"></div>
            <div class="container">
                <div class="page-title text-center w-100">
                    <h1 class="mb-0">Contact us<span class="thm-clr">.</span></h1>
                </div><!-- Page Title -->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/" title=""><i class="icon_house"></i></a></li>
                    <li class="breadcrumb-item active">Contact us</li>
                </ol><!-- Breadcrumb -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pb-120 position-relative">
            <div class="cont-map style2 w-100" id="cont-map"></div>
            <div class="container">
                <div class="get-touch-wrap style2 w-100">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-lg-4">
                            <div class="get-info w-100">
                                <h2 class="mb-0">Get In Touch</h2>
                                <p class="mb-0">If you are interested in working with us, please get in touch.</p>
                                <ul class="get-info-list d-inline-block mb-0 list-unstyled w-100">
                                    <li><i class="icon_map_alt thm-clr"></i>75 South Park Avenue, Melbourne, Australia</li>
                                    <li><i class="fas fa-phone-volume thm-clr"></i>8 800 567.890.11 - Central Office</li>
                                    <li><i class="far fa-paper-plane thm-clr"></i><a href="javascript:void(0);"
                                            title="">hello@mexo.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-lg-8">
                            <div class="form-wrap w-100">
                                <h2 class="mb-0">FeedBack</h2>
                                <form class="w-100">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-lg-4">
                                            <input class="w-100 brd-rd3 mt-30" type="text" placeholder="Frank Willoy">
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-lg-4">
                                            <input class="w-100 brd-rd3 mt-30" type="email" placeholder="Email *">
                                        </div>
                                        <div class="col-md-12 col-sm-6 col-lg-4">
                                            <input class="w-100 brd-rd3 mt-30" type="text" placeholder="Subject">
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                            <textarea class="w-100 brd-rd3 mt-30" placeholder="Your Message"></textarea>
                                            <button class="thm-btn mini-btn brd-rd3 mt-50" type="submit">SEND
                                                MESSAGE</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- Get In Touch Style --->
            </div>
        </div>
    </section>
@endsection
