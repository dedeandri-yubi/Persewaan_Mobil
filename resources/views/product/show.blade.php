@extends('adminlte.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Show Product</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Show Product</a></li>
                            <li class="breadcrumb-item active">Create</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-4">
                                        <h4>Tittle : {{ $product['title'] }}</h4>
                                    </div>
                                    <div class="col-lg-4">
                                        <h4>Category : {{ $product['category'] }}</h4>
                                    </div>
                                    <div class="col-lg-4">
                                        <h4>Brand : {{ $product['brand'] }}</h4>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-4">
                                        <h4>Stock : {{ $product['stock'] }}</h4>
                                    </div>
                                    <div class="col-lg-4">
                                        <h4>Price : {{ $product['price'] }}</h4>
                                    </div>
                                    <div class="col-lg-4">
                                        <h4>Description : </h4>
                                        <p>{{ $product['description'] }}</p>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-12">
                                        <h4>Image : </h4>
                                        @foreach ($product['images'] as $image)
                                            <img src="{{ $image }}" width="100px" height="100px">
                                        @endforeach
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-12">
                                        <button type="button" onclick="back()" class="btn btn-secondary"><i
                                                class="fas
                                            fa-arrow-left"></i>
                                            Back</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
        </div>
        <!-- /.content -->
    </div>
    <script>
        function back() {
            window.history.back();
        }
    </script>
@endsection
