@extends('master')

@section('css')
@endsection

@section('js')

@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                @include('layouts.errors')
                <div class="card">

                    <div class="card-header" style="border-bottom: 0">
                        <h3 class="card-title">Danh mục phân loại hình thức nhà đất</h3>
                        <div class="float-right" style="margin-right: 150px">
                        </div>
                        <div class="float-right" style="margin-right: 150px">
                            <a href="{{ url($backendUrl.'/group/create') }}"><button class="btn btn-success"><i class="fa fa-plus-circle"></i> Thêm nhóm dự án</button></a>
                        </div>
                        <div class="card-tools ">
                            <div class="input-group input-group-sm dataTables_filter" style="width: 150px;">
                                <form action="" name="formSearch" method="GET" >
                                    <input type="text" name="keyword" class="form-control float-right" placeholder="Search" style="padding-right: 42px;">
                                    <div class="input-group-append" style="margin-left: 110px">
                                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <form action="" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="card-body" style="padding-top: 0;">
                            <div class="row table-responsive"><div class="col-sm-12">
                                    <table id="example1" class="table table-bordered table-striped dataTable">
                                        <thead>
                                            <th>ID</th>
                                            <th>Tên nhóm dự án</th>
                                            <th>Seo</th>
                                            <th>Code</th>
                                            <th>Trạng thái</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($data as $item)
                                            <tr>
                                                <td>{{$item->id}}</td>
                                                <td>{{$item->name}}</td>
                                                <td>{{$item->slug}}</td>
                                                <td >{{$item->code}}</td>
                                                <td>
                                                    <div data-table="realestates_project_group" data-id="{{ $item->id }}" data-col="status" class="Switch Round @if($item->status == 1) On @else Off @endif " style="vertical-align:top;margin-left:10px;">
                                                        <div class="Toggle" ></div>
                                                    </div>
                                                </td>
                                                <td style="text-align: center">
                                                    <a href="{{ url($backendUrl.'/group/edit/'.$item->id)}}"> <span class="btn btn-warning"><i title="Sửa" class="ace-icon fa fa-pencil bigger-130"></i></span> </a>  |
                                                    <a href="#" name="{{ $item->name }}" link="{{ url($backendUrl.'/group/delete/'.$item->id)}}" class="deleteClick red id-btn-dialog2"data-toggle="modal" data-target="#deleteModal" > <span class="btn btn-danger"><i title="Delete" class="ace-icon fa fa-trash-o bigger-130"></i></span></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            {{$data->links()}}
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
    <script type="text/javascript">
        $(document).ready(function(){
            $(".deleteClick").click(function(){
                var link = $(this).attr('link');
                var name = $(this).attr('name');
                $("#deleteForm").attr('action',link);
                $("#deleteMes").html("Delete : "+name+" ?");
            });
        });
    </script>
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form id="deleteForm" action="" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Danh Mục</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div id="deleteMes" class="modal-body">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <input type="hidden" name="_method" value="delete" />
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
    <!-- End Delete form-->
@endsection
