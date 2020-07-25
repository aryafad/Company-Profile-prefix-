@extends('layouts.app')
@section('content')
 <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Edit Blogst</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html" class="text-muted">Home</a></li>
                                     <li class="breadcrumb-item text-muted active" aria-current="page">Blogs</li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Edit Blogs</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit BLogs</h4>
                                <h6 class="card-subtitle">Edit Data Blogs</h6>
                                 <form class="mt-4" method="post" action="{{url('update-blogs/'. $blogs->id)}}" enctype="multitype/form-data">
                                    @csrf @method('patch')
                                    <div class="form-group">
                                    	<label style="margin-left: 10px ;">Judul</label>
                                        <input type="text" name="judul" class="form-control" style="border-radius: 50px ;" value="{{$blogs->judul}}">
                                    </div>
                                   
                                    <div class="form-group">
                                    	<label style="margin-left: 10px">Deskripsi</label>
                                        <textarea class="form-control" id="summernote" name="deskripsi" rows="3" style="border-radius: 10px ;">{{$blogs -> deskripsi}}</textarea>
                                    </div>
                                     <div class="card">
                                        <div class="form-group">
                                            <label>File Upload</label>
                                                 
                                            <form class="mt-3">
                                                <fieldset class="form-group">
                                                <input type="file" name="file_upload" class="form-control-file" id="exampleInputFile" style="background-color: white">
                                                     {{$blogs-> file_upload}}   </fieldset>
                                                 <div align="center">
                                                        <button class="btn btn-success" style="border-radius: 10px ; "><i class="fas fa-check"></i>
                                                Simpan</button>
                                                        <button class="btn btn-outline-danger" style="border-radius: 10px ;"  
                                                type="button"><i class="fas fa-home"></i>
                                                Cancel</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
                                   
            <footer class="footer text-center">
                All Rights Reserved by Adminmart. Designed and Developed by <a
                    href="https://wrappixel.com">WrapPixel</a>.
            </footer>
@endsection