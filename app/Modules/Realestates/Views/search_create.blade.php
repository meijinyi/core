@extends('master')

@section('css')
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/daterangepicker/daterangepicker-bs3.css') }}">

@endsection
@section('js')

@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="col-md-12">
                    <!-- general form elements -->
                    @include('layouts.errors')

                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Thêm tìm kiếm</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form  method="post" >
                            <div class="card-body row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <div class="col-md-6 form-group">
                                            <label for="type">Loại tìm kiếm:</label>
                                            <select name="type" class="form-control">
                                                <option value="1">Tìm kiếm theo giá nhà đất bán theo (VNĐ)</option>
                                                <option value="2">Tìm kiếm theo giá nhà đất thuê theo (VNĐ)</option>
                                                <option value="3">Tìm kiếm theo diện tích nhà đất bán theo (mét vuông)</option>
                                                <option value="4">Tìm kiếm theo diện tích nhà đất thuê theo (mét vuông)</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="name">Tên tìm kiếm:</label>
                                            <input name="name" type="text" class="form-control" id="name" placeholder="Nhập tên tìm kiếm">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <div class="col-md-4"><label for="name">Giá trị từ:</label></div>
                                            <div class="col-md-8"><input name="start" type="text" class="form-control" id="name" placeholder="Từ"></div>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <div class="col-md-4"><label for="name">Đến</label></div>
                                            <div class="col-md-8"><input name="end" type="text" class="form-control" id="name" placeholder="Đến"></div>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="name">CODE:</label>
                                            <input name="code" type="text" class="form-control" id="name" placeholder="Nhập code">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="form_id">Trạng thái:</label>
                                            <select name="status" class="form-control">
                                                <option value="1">Bật</option>
                                                <option value="0">Tắt</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Thêm Mới</button>
                                    </div>
                                    <div class="card-footer">
                                        <a href="{{route('type.index')}}" class="btn btn-danger">Hủy</a>
                                     </div>
                            </div>
                    @csrf
                </form>

                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.card -->
        </div>
        <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->

    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form id="deleteForm" action="" method="POST">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete File</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div id="deleteMes" class="modal-body">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Delete</button>
                    </div>
                    <input type="hidden" name="_method" value="delete" />
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
    <!-- End Delete form-->

@endsection
