@extends('admin.layout.index') 
@section('title')
    Chi tiết slide
@endsection
@section('content')
<section class="content container-fluid">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Chi tiết</h3>
        </div>
        <div class="box-header with-border">
            <h4>Slide</h4>
        </div>
        <br>
        <div style="margin-bottom:10px">   
            <dl class="dl-horizontal">
                <dt>
                   Mã slide
                </dt>
                <dd>
                    {!!$slide->id!!}
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                   Tiêu đề
                </dt>
                <dd>
                    {!!$slide->TieuDe!!}
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                   Mô tả
                </dt>
                <dd>
                    {!!$slide->MoTa!!}
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                  Hình ảnh
                </dt>
                <dd>
                    <img src="image_Slide/{!!$slide->HinhAnh!!}" width="500px" height="300px" alt="">
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                 Link
                </dt>
                <dd>
                     {!!$slide->Link!!}
                </dd>
            </dl>

        </div>
        <br><br>
    </div>
    <div class="box-footer">
        <a href="admin/slide/edit/{!!$slide->id!!}">Sửa</a> |
        <a href="admin/slide/list">Danh sách</a>
    </div>
</section>
@endsection