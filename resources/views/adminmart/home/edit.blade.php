@extends('layouts.app')
@section('content')
 <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Edit Services</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html" class="text-muted">Home</a></li>
                                     <li class="breadcrumb-item text-muted active" aria-current="page">Services</li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Edit Services</li>
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
                                <h4 class="card-title">Edit Service</h4>
                                <h6 class="card-subtitle">Edit data service</h6>
                                <form class="mt-4" method="post" action="{{url('update-service/'. $service->id)}}">
                                    @csrf @method('patch')
                                    <div class="form-group">
                                    	<label style="margin-left: 10px ;">Judul</label>
                                        <input type="text" name="judul" class="form-control" style="border-radius: 50px ;" value="{{$service->judul}}">
                                    </div>
                                    <div class="form-group">
                                    	<label style="margin-left: 10px">Deskripsi</label>
                                        <textarea class="form-control" name="deskripsi" rows="3" style="border-radius: 10px ;">{{$service->deskripsi}}</textarea>
                                    </div>
                                    <div align="center">
                                    <button class="btn btn-success" style="border-radius: 10px ; "><i class="fas fa-check"></i>
                                                Update</button>
                                    <a href="{{url('/service')}}" class="btn btn-outline-danger" style="border-radius: 10px ;" 
                                            ><i class="fas fa-home"></i>
                                                Cancel</a>
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