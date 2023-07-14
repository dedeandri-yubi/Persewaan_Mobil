@extends('adminlte.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Product List</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Product</a></li>
                            <li class="breadcrumb-item active">List</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <div class="content">
            @if (Session::has('success'))
                <div class="alert alert-success">

                    <strong>Success: </strong>{{ Session::get('success') }}

                </div>
            @endif
            <!-- Modal -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                {{-- <form method="GET">
                                    <div class="row text-right">
                                        <div class="col-lg-12">
                                            <button type="button" class="btn btn-primary" >Show Product</button>
                                        </div>
                                    </div>
                                </form> --}}
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Brand</th>
                                            <th>Stock</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    @foreach ($item['images'] as $image)
                                                        <img src="{{ $image }}" width="100px">
                                                    @endforeach
                                                </td>
                                                <td>{{ $item['title'] }}</td>
                                                <td>{{ $item['category'] }}</td>
                                                <td>{{ $item['brand'] }}</td>
                                                <td>{{ $item['stock'] }}</td>
                                                <td>Rp. {{ number_format($item['price']) }}</td>
                                                <td>
                                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#exampleModal-{{ $loop->iteration }}">
                                                        View
                                                    </button>
                                                    <a href="{{ route('product.show', $item['id']) }}"
                                                        class="btn btn-success">Show</a>
                                                </td>

                                            </tr>

                                            <div class="modal  fade " id="exampleModal-{{ $loop->iteration }}"
                                                tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content" width="1000px">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Detail Product
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <h4>{{ $item['title'] }}</h4>
                                                                    <div class="row mt-2">
                                                                        <div class="col-md-12">
                                                                            @foreach ($item['images'] as $image)
                                                                                <img src="{{ $image }}"
                                                                                    width="100px">
                                                                            @endforeach
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <h4>Price : {{ $item['price'] }}</h4>
                                                                    <h4>Category : {{ $item['category'] }}</h4>
                                                                    <h4>Brand : {{ $item['brand'] }}</h4>
                                                                    <h4>Stock : {{ $item['stock'] }}</h4>
                                                                    <h4>Description :</h4>
                                                                    <p>{{ $item['description'] }}</p>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save
                                                                changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(".btnModal").click(function() {
            var passedID = $(this).data('id');
            $('input:text').val(passedID); //set the id to the input on the modal
        });
    </script>
@endsection
