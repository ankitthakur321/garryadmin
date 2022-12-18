@extends('admin.layouts.master')

@section('title')
    Edit Blog | GarryAdmin
@endsection

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Blogs</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Blog</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-0 text-uppercase">Update Blog Content</h6>
                    <hr />
                    {{-- <h4 class="mb-4">Add Blog Content</h4> --}}
                    <form method="POST" class="row g-3 needs-validation" action="/my-admin/update-blog" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="blogId" id="blogId" value="{{ $blog->id }}">
                        <div class="col-md-10">
                            <label for="blogTitle" class="form-label">Blog Title</label>
                            <input type="text" class="form-control" id="blogTitle" name="blogTitle" placeholder="Enter Blog Title" value="{{ $blog->blog_title }}" required>
                            <div class="valid-feedback">Looks good!</div>
                        </div>
                        <div class="col-md-10">
                            <label for="validationCustom02" class="form-label">Blog Image</label>
                            <input type="file" class="form-control" id="blogImage" name="blogImage"
                                aria-describedby="BlogImage" aria-label="Upload">
                            <img src="{{ $blog->blog_image }}" alt="Blog Image" class="img-responsive" width="300px">
                        </div>
                        <div class="col-md-10">
                            <label for="blogDesc" class="form-label">Blog Short Description</label>
                            <input type="text" class="form-control" id="blogDesc" name="blogDesc" placeholder="Enter Blog Short Description" value="{{ $blog->blog_short_description }}" required>
                            <div class="valid-feedback">Looks good!</div>
                        </div>
                        <div class="col-md-10">
                            <label for="editBlogContent" class="form-label">Blog Content</label>
                            <textarea id="editBlogContent" name="blogContent" class="form-control"> {{ $blog->blog_content }} </textarea>
                        </div>
                        <div class="col-md-10">
                            <label for="blogAuthor" class="form-label">Author</label>
                            <input type="text" class="form-control bg-white" id="blogAuthor" name="blogAuthor"
                                value="{{ Auth::user()->name }}" readonly>
                            <div class="valid-feedback">Looks good!</div>
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-primary" type="submit">Update Blog</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
