@extends('layouts.master')

@section('title')
    Social Media - Gaurav Garry
@endsection

@section('description')
    This is social media page of Gaurav Garry.
@endsection

@section('content')
    <section>
        <div class="w-100 position-relative">
            <div class="fixed-bg" style="background:#000;"></div>
            <div class="container">
                <div class="page-title text-center w-100">
                    <h1 class="mb-2 text-white">Social Media</h1>
                    <p class="mb-0 text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque aliquid quis,
                        facilis mollitia itaque eveniet iste impedit deleniti exercitationem neque veritatis a maxime
                        pariatur, aut voluptatum! Magni dicta voluptatem deserunt.</p>
                </div><!-- Page Title -->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/" title=""><i class="icon_house"></i></a></li>
                    <li class="breadcrumb-item active">Social Media</li>
                </ol><!-- Breadcrumb -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-155 pb-120 position-relative">
            <div class="container">
                <div class="blog-wrap2 position-relative w-100">
                    <div class="row">
                        @if ($blogs)
                            @foreach ($blogs as $key => $blog)
                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    <div class="post-style2 mb-45 w-100">
                                        <div class="post-img2 position-relative overflow-hidden w-100"><a
                                                href="/blog-detail/{{ $blog->id }}" title=""><img
                                                    class="img-fluid w-100" src="{{ $blog->blog_image }}"
                                                    alt="{{ $blog->blog_title . ' Image' }}"></a></div>
                                        <div class="post-info2 w-100">
                                            <div class="post-meta thm-bg brd-rd3">
                                                <span>{{ date('d M Y', strtotime($blog->created_at)) }}</span> / <a
                                                    href="javascript:void(0);" title="">{{ $blog->blog_category }}</a>
                                            </div>
                                            <h3 class="mb-0"><a href="/blog-detail/{{ $blog->id }}"
                                                    title="">{{ $blog->blog_title }}</a></h3>
                                            <p class="mb-0">{{ $blog->blog_short_description }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="text-center"><span>No Data Found</span></div>
                        @endif
                    </div>
                </div><!-- Blog Style 2 -->
                {{ $blogs->links('vendor.pagination.custom') }}
            </div>
        </div>
    </section>
@endsection
