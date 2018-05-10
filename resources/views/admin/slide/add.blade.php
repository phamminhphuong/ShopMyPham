@extends('admin.layout.index') 
@section('title')
    Thêm slide
@endsection
@section('content')
<section class="content container-fluid">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Tạo mới slidec</h3>
        </div>
        <div class="box-header with-border">
            <h4>Slide</h4>
        </div>
        @if(count($errors) >0)
        <div class="alert alert-danger">
            @foreach($errors->all() as $er)
                
                    {{$er}}<br>
                
            @endforeach
        </div>
        @endif
        <br>
        <form action="admin/slide/add" method="post" enctype="multipart/form-data">
           <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-horizontal">
                <div class="form-group">
                        <b class="control-label col-md-2"> Tiêu đề</b>
                        <div class="col-md-10">
                                <input type="text" name="TieuDe" placeholder="Nhập tiêu đề" class="form-control">
                        </div>
                    </div>
                <div class="form-group">
                    <b class="control-label col-md-2"> Mô tả</b>
                    <div class="col-md-10">
                        <textarea id="MoTa" name="MoTa"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <b class="control-label col-md-2"> Hình ảnh</b>
                    <div class="col-md-10">
                      <input type="file" name="HinhAnh" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <b class="control-label col-md-2"> Link</b>
                    <div class="col-md-10">
                        <input type="text" name="Link" placeholder="Nhập link" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input type="submit" value="Tạo mới" class="btn btn-primary">
                        <br><br>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="box-footer">
        <a href="admin/slide/list">Danh sách</a>
    </div>
</section>
@endsection
@section('script')
    <script>
        CKEDITOR.replace( 'MoTa');
   </script>
@endsection