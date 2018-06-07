<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Cobardia (firebrick)</title>
    <base href="{{asset('')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Invoicebus Invoice Template">
    <meta name="author" content="Invoicebus">
    <meta name="template-hash" content="baadb45704803c2d1a1ac3e569b757d5">
    <link href="Bill/css/template.css" rel="stylesheet" />
</head>
<body>
    <div id="container" style="width:960px">
        <section id="memo">
            <div class="logo">
                <img src="image_SanPham/logo.jpg" style="width:381px" />
            </div>

            <div class="company-info">
                <div>SHOP Mỹ Huyền</div>
                <br />

                <span>Địa chỉ</span>
                <span>Shop Mỹ Huyền</span>
                <br />

                <span>0984752196</span>
                <span>cskhshopmyhuyen.com</span>
            </div>
        </section>
        <section id="invoice-title-number">

            <span id="title">Hóa đơn nhập</span>
            <span id="number">{{$nhapSanPham->id}}</span>

        </section>

        <div class="clearfix"></div>


        <section id="client-info">
            <div>
                <span>Mã tài khoản: <strong> {{$nhapSanPham->MaTaiKhoan}}</strong></span>
            </div>

            <div>
                <span>Email: <strong> {{$nhapSanPham->TaiKhoan->email}}</strong></span>
            </div>
        </section>


        <section id="client-info" style="float:right;">
            <div>
                <span>Mã nhà cung cấp: <strong> {{$nhapSanPham->MaNhaCC}}</strong></span>
            </div>
            <div>
                <span>Tên nhà cung cấp: <strong> {{$nhapSanPham->NhaCungCap->TenNhaCC}}</strong></span>
            </div>
            <div>
                <span>Điện thoại: <strong> {{$nhapSanPham->NhaCungCap->DienThoai}}</strong></span>
            </div>

            <div>
                <span>Email: <strong> {{$nhapSanPham->NhaCungCap->email}}</strong></span>
            </div>

            <div>
                <span>Địa chỉ: <strong>{{$nhapSanPham->NhaCungCap->DiaChi}}</strong></span>
            </div>
        </section>

        <div class="clearfix"></div>

        <section id="items">

            <table cellpadding="0" cellspacing="0">

                <tr>
                    <th>Mã</th>
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Giá</th>
                    <th>Tổng tiền</th>
                </tr>
                @foreach ($nhapSanPham->ChiTietNhaps as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->SanPham->TenSanPham}}</td>
                        <td>{{$item->SoLuong}}</td>
                        <td>{{$item->Gia}}</td>
                        <td>{{$item->SoLuong*$item->Gia}}
                        </td>
                    </tr>
                @endforeach
            </table>

        </section>

        <!-- <section id="sums">

            <table cellpadding="0" cellspacing="0">
                <tr data-hide-on-quote="true">
                    <th>Thành tiền</th>
                    <td>if(Model.TongTien != null)
                    {
                        <spam>Model.TongTien.Value.ToString("#,###", System.Globalization.CultureInfo.GetCultureInfo("vi-VN"))</spam>
                    }
                    </td>
                </tr>

            </table>
            <div class="clearfix"></div>

        </section> -->

        <div class="clearfix"></div>
        <section id="invoice-info">
            <div>
                <span>Ngày nhập</span> <span>{{$nhapSanPham->NgayNhap}}</span>
            </div>
        </section>

        <section id="terms">
            <div class="notes"></div>
            <br />
            <div class="payment-info">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>

        </section>
        <div class="clearfix"></div>
        <div class="thank-you">Thanks You</div>
        <div class="clearfix"></div>
    </div>
</body>
</html>
