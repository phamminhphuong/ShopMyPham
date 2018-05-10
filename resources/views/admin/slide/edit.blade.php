@extends('admin.layout.index') 
@section('title')
    Sửa slide
@endsection
@section('content')
<section class="content container-fluid">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Sửa slide</h3>
        </div>
        <div class="box-header with-border">
            <h4>Slide</h4>
        </div>
        @if(count($errors) >0)  
        <div class="alert alert-danger">
            @foreach($errors->all() as $er)
                    {{$er}}
            @endforeach  
        </div>
        @endif
        <br>
        <form action="admin/slide/edit/{!!$slide->id!!}" enctype="multipart/form-data" method="post">
           <input type="hidden" name="_token" value="{{csrf_token()}}">
           <div class="form-horizontal">
                
            <div class="form-group">
                <b class="control-label col-md-2"> Tiêu đề</b>
                <div class="col-md-10">
                    <input class="form-control text-box single-line" data-val="true" data-val-length="The field TenSanPham must be a string with a maximum length of 50."
                        data-val-length-max="50" id="TieuDe" name="TieuDe" type="text" value="{!!$slide->TieuDe!!}" placeholder="Nhập tiêu đề">
                </div>
            </div>
            
            <div class="form-group">
                <b class="control-label col-md-2"> Mô tả</b>
                <div class="col-md-10">
                    <textarea id="MoTa" name="MoTa">{!!$slide->MoTa!!}</textarea>
                </div>
            </div>
            <div class="form-group">
                <b class="control-label col-md-2"> Hình ảnh</b>
                <div class="col-md-10">
                    <img src="image_Slide/{!!$slide->HinhAnh!!}" width="300px" height="200px" alt="">
                    <br><br>
                  <input type="file" name="HinhAnh" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <b class="control-label col-md-2"> Link</b>
                <div class="col-md-10">
                        <input class="form-control text-box single-line" data-val="true" data-val-length="The field TenSanPham must be a string with a maximum length of 50."
                        data-val-length-max="50" id="Link" name="Link" type="text" value="{!!$slide->Link!!}" placeholder="Nhập link">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-offset-2 col-md-10">
                    <input type="submit" value="Sửa" class="btn btn-primary">
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