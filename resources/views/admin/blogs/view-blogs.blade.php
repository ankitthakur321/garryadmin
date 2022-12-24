@extends('admin.layouts.master')

@section('title')
    View Blogs | GarryAdmin
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
                            <li class="breadcrumb-item active" aria-current="page">View Blogs</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->

            <div class="card">
                <div class="card-body">
                    <h6 class="mb-0 text-uppercase">All Blogs</h6>
                    <hr />
                    @if (session('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert" id="successMessage">
                            <strong>{{ session('status') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="row">
                        @foreach ($blogs as $key => $blog)
                            <div class="col-md-3">
                                <div class="card border-end shadow-none">
                                    <img src="{{ asset($blog->blog_image) }}" class="card-img-top" alt="Blog Image" height="250">
                                    <div class="card-body">
                                        <span class="badge bg-success">{{ $blog->blog_category }}</span>
                                        <h5 class="card-title">{{ $blog->blog_title }}</h5>
                                        <p class="card-text">{{ $blog->blog_short_description }}</p>
                                        <hr>
                                        <div class="d-flex align-items-center gap-2">
                                            <a href="javascript:;" class="btn btn-success"><i
                                                    class='bx bx-show'></i>View</a>
                                            <a href="/my-admin/edit-blog/{{ $blog->id }}" class="btn btn-info"><i class='bx bx-edit'></i>Edit</a>
                                            <button class="btn btn-danger btn-delete" type="button" data-id="{{ $blog->id }}"><i
                                                    class='bx bx-trash'></i>Delete</button>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-white"> <small class="text-muted">Created on
                                            {{ date('d M Y', strtotime($blog->created_at)) }}</small>
                                    </div>
                                </div>


                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Delete Blog-->
    <div class="modal fade" id="blogDeleteModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content bg-danger">
                <div class="modal-body text-center">
                    <div>
                        <i class="lni lni-warning" style="font-size: 80px; color: #ffffff;"></i>
                        <h4 style="color: #ffffff;">Are You Sure?</h4>
                    </div>
                </div>
                <div class="modal-footer">
                    <form action="/my-admin/delete-blog" method="post">
                        @csrf
                        <input type="hidden" id="blogId" name="blogId">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-dark">Yes! Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Delete Blog-->

    <script>
        $(document).ready(function() {
            $('.btn-delete').on('click', function() {
                // get data from button edit
                const id = $(this).attr('data-id');
                // Set data to Form Edit
                $('#blogId').val(id);
                // Call Modal Edit
                $('#blogDeleteModal').modal('show');
            });
        });
    </script>
@endsection
