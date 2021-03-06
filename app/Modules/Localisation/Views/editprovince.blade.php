@extends('master')

@section('css')

@endsection
@section('js')
  @include('ckfinder::setup')
@endsection

@section('content')
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-12">
      <div class="col-md-12">
            <!-- general form elements -->

           @include('layouts.errors')

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Sửa ngân hàng</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              {!! Form::model( ['method' => 'PATCH']) !!}

              <div class="card-body row">
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="code">Tên quận/huyện:</label>
                          <input required name="name" type="text" class="form-control" id="code" placeholder="Ví dụ: Hoàng Mai" value="{{$data->name}}" >
                      </div>
                      <div class="form-group">
                          <label for="acc_num">Tỉnh/Thành phố:</label>
                          <select class="form-control" name="city_code" id="" required>
                              @foreach ($city as $news)
                                  <option value="{{$news->code}}" @if( $data->city_code == $news->code) selected @endif> {{$news->name_city}} </option>
                              @endforeach

                          </select>
                      </div>

                      <div class="form-group">
                          <label for="code">Type(có thể để chống):</label>
                          <input name="type" type="text" class="form-control" id="code" placeholder="Type" value="{{$data->type}}" >
                      </div>


                      <div class="form-group">
                          <label for="branch">Sắp xếp(có thể để trống):</label>
                          <input name="sort" type="number" class="form-control" id="branch" placeholder="Sắp xếp" value="{{ $data->sort }}" >
                      </div>

                      <div class="form-group">
                          <label for="withdraw">Nổi bật:</label>
                          <select class="form-control" name="featured" id="">
                              <option value="1"@if($data->featured==1) selected @endif> Nổi bật</option>
                              <option value="0"@if($data->featured==0) selected @endif> Không nổi bật</option>
                          </select>
                      </div>

                      <div class="form-group">
                          <label for="withdraw">Nổi bật:</label>
                          <select class="form-control" name="status" id="">
                              <option value="1"@if($data->status==1) selected @endif> Bật</option>
                              <option value="0"@if($data->status==0) selected @endif> Tắt</option>
                          </select>
                      </div>

                  </div>



              </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Cập nhật</button>
                </div>
                {!! Form::close() !!}
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
@endsection
