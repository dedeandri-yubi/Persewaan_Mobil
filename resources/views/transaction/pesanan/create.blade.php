@extends('adminlte.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Pesanan</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Pesanan</a></li>
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
                                <form method="post" action="{{ route('pesanan.store') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label for="no_pesanan">Kode Pesanan</label>
                                            <input type="text" name="no_pesanan" value="{{ $no_pesanan }}"
                                                class="form-control" required autocomplete="off" readonly>
                                            <div class="invalid-feedback">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="tanggal_pesanan">Tanggal Pesanan</label>
                                            <input type="date" name="tanggal_pesanan" class="form-control" required
                                                autocomplete="off">
                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="nama_supplier">Nama Supplier</label>
                                            <input type="text" name="nama_supplier" class="form-control" required
                                                autocomplete="off">
                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-lg-4">
                                            <label for="nama_product">Nama Product</label>
                                            <input type="text" name="nama_product" class="form-control" required
                                                autocomplete="off">
                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="total">Total</label>
                                            <input type="number" name="total" class="form-control" required
                                                autocomplete="off">
                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-lg-12">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                            <button type="button" onclick="back()" class="btn btn-secondary"><i
                                                    class="fas
                                            fa-arrow-left"></i>
                                                Back</button>
                                        </div>
                                    </div>
                                </form>
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
