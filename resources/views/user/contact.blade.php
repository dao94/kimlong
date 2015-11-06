@extends('user.main')

@section('content')
<style type="text/css">
    .produce-wp a{color: #43b8b4;font-weight: bold;}
    .info-contact{margin-top: 30px;margin-bottom: 10px}
    .form-thongtin{margin-bottom: 10px}
    .info-news p{margin-top: 10px}
</style>
<div class="columns-container">
    <div id="columns" class="container">
        <div class="col-md-12 " style="padding:0px;">
            <ol class="breadcrumb clearfix hidden-sm hidden-xs">
                <li>
                    <a href="/" target="_self">Trang chủ</a>
                </li>
                <li class="active">
                    <span>Liên hệ</span>
                </li>
            </ol>
        </div>
        <div class="feature-product col-xs-12 col-md-12 col-sm-12">
            <div class="menu-introduction">
                <h4>Công ty TNHH sản xuất thương mại và đầu tư Kim Long</h4>
                <div class="col-md-2 info-news">
                  <p>Địa chỉ</p>
                  <p>Điện thoại</p>
                  <p>fax</p>
                  <p>website</p>
                </div>
                <div class="col-md-10 info-news">
                  <p>Số 30 Ngõ 493 Trương Định, Hoàng Mai Hà Nội</p>
                  <p>0914214969</p>
                  <p>0166313.1970</p>
                  <p>www.kimlong.info</p>
                </div>
                <div class="clearfix"></div>
                <h3 class="info-contact">Thông Tin phản hồi</h3>
                <form action="" method="POST">
                    <div class="col-md-2 form-thongtin">
                        Họ Tên : 
                    </div>
                    <div class="col-md-4 form-thongtin">
                        <input type="text" class="form-control">
                    </div>
                    <div class="clearfix "></div>
                    <div class="col-md-2 form-thongtin">
                        Địa Chỉ :
                    </div>
                    <div class="col-md-4 form-thongtin">
                        <input type="text" class="form-control">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-2 form-thongtin">
                        Hòm Thư :
                    </div>
                    <div class="col-md-4 form-thongtin">
                        <input type="text" class="form-control">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-2 form-thongtin">
                        Số Điện Thoại :
                    </div>
                    <div class="col-md-4 form-thongtin">
                        <input type="text" class="form-control">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-2 form-thongtin">
                        Tiêu Đề :
                    </div>
                    <div class="col-md-4 form-thongtin">
                        <input type="text" class="form-control">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-2 form-thongtin">
                        Nội Dung : 
                    </div>
                    <div class="col-md-4 form-thongtin">
                        <textarea class="form-control"></textarea>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-2 form-thongtin"></div>
                    <div class="col-md-4 form-thongtin" style="margin-top:10px">
                      <button type="submit" class="btn btn" style="background:#6FA3E2">Gửi </button>
                      <button type="reset" class="btn btn" style="background:#6FA3E2">Nhập Lại</button>
                    </div>
                </form>
            </div><!--menu-introduction-->
        </div><!---->
    </div><!--end.columns-->
</div><!--end.columns-container-->

@endsection