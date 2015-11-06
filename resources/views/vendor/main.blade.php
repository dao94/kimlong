<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap 101 Template</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
    <link href="{{ asset('css/style.css')}}" rel="stylesheet" media="screen">
  </head>
  <body>
    <div class="header">
      <div class="top_nav">
        <div class="container">
          <div class="row">
            <div class="col-md-8"></div>
            <div class="col-md-4">
              <span class="glyphicon glyphicon-user"></span><a href=""> Đăng nhập</a> hoặc <a href="">đăng ký tài khoản </a>
            </div>
          </div>
        </div>
      </div><!-- end top-nav-->
      <div class="main_nav">
        <div class="container">
          <nav class="navbar navbar-default main-menu" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand logo" href="index.html"><img src="images/logo.png" alt="LOGO" /></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right menu">
                <li class="active"><a href="index.html">Trang chủ</a></li>
                <li><a href="introduction.html">Giới thiệu</a></li>
                <li><a href="#">Sản phẩm</a></li>
                <li><a href="#">Tin tức</a></li>
                <li><a href="#">Hỏi đáp</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Liên hệ <b class="caret"></b></a>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </nav>
        </div>
      </div><!-- end main-nav-->
      <div class="slide">

      </div><!--end-slide-->
    </div><!-- end header-->
    <div class="main-page container">
      <div class="row">
        <div class="col-md-9">
          <div class="product-list">
            <div class="title">
              <h3>Sản phẩm nổi bật</h3>
            </div><!-- end title-->
            <div class="list">
              <div class="product-item col-md-3 col-sm-4 col-sx-6">
                <div class="thumb text-center">
                  <a href=""><img src="images/product.jpg" alt="alt" class="img-responsive" /></a>
                  <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Xem ngay</button>
                  <span class="status"><i class="glyphicon glyphicon-shopping-cart"></i> Còn hàng</span>
                </div>
                <h2 class="product-name"><a href="">Đầm Vintage Chấm Bi</a></h2>
                <div class="row">
                  <div class="col-md-6 price">50.000 vnđ</div>
                  <div class="col-md-6 product-code">Mã : D001</div>
                </div>
              </div><!-- end product-item-->
              <div class="product-item col-md-3 col-sm-4 col-sx-6">
                <div class="thumb">
                  <a href=""><img src="images/product.jpg" alt="alt" class="img-responsive" /></a>
                  <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Xem ngay</button>
                  <span class="status"><i class="glyphicon glyphicon-shopping-cart"></i> Còn hàng</span>
                </div>
                <h2 class="product-name"><a href="">Đầm Vintage Chấm Bi</a></h2>
                <div class="row">
                  <div class="col-md-6 price">50.000 vnđ</div>
                  <div class="col-md-6 product-code">Mã : D001</div>
                </div>
              </div><!-- end product-item-->
              <div class="product-item col-md-3 col-sm-4 col-sx-6">
                <div class="thumb">
                  <a href=""><img src="images/product.jpg" alt="alt" class="img-responsive" /></a>
                  <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Xem ngay</button>
                  <span class="status"><i class="glyphicon glyphicon-shopping-cart"></i> Còn hàng</span>
                </div>
                <h2 class="product-name"><a href="">Đầm Vintage Chấm Bi</a></h2>
                <div class="row">
                  <div class="col-md-6 price">50.000 vnđ</div>
                  <div class="col-md-6 product-code">Mã : D001</div>
                </div>
              </div><!-- end product-item-->
              <div class="product-item col-md-3 col-sm-4 col-sx-6 hidden-sm">
                <div class="thumb">
                  <a href=""><img src="images/product.jpg" alt="alt" class="img-responsive" /></a>
                  <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Xem ngay</button>
                  <span class="status"><i class="glyphicon glyphicon-shopping-cart"></i> Còn hàng</span>
                </div>
                <h2 class="product-name"><a href="">Đầm Vintage Chấm Bi</a></h2>
                <div class="row">
                  <div class="col-md-6 price">50.000 vnđ</div>
                  <div class="col-md-6 product-code">Mã : D001</div>
                </div>
              </div><!-- end product-item-->
            </div><!-- end list-->
          </div><!-- end product-->
          <div class="product-list">
            <div class="title">
              <h3>Quần nữ</h3>
            </div><!-- end title-->
            <div class="list">
              <div class="product-item col-md-3 col-sm-4 col-sx-6">
                <div class="thumb text-center">
                  <a href=""><img src="images/product.jpg" alt="alt" class="img-responsive" /></a>
                  <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Xem ngay</button>
                  <span class="status"><i class="glyphicon glyphicon-shopping-cart"></i> Còn hàng</span>
                </div>
                <h2 class="product-name"><a href="">Đầm Vintage Chấm Bi</a></h2>
                <div class="row">
                  <div class="col-md-6 price">50.000 vnđ</div>
                  <div class="col-md-6 product-code">Mã : D001</div>
                </div>
              </div><!-- end product-item-->
              <div class="product-item col-md-3 col-sm-4 col-sx-6">
                <div class="thumb">
                  <a href=""><img src="images/product.jpg" alt="alt" class="img-responsive" /></a>
                  <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Xem ngay</button>
                  <span class="status"><i class="glyphicon glyphicon-shopping-cart"></i> Còn hàng</span>
                </div>
                <h2 class="product-name"><a href="">Đầm Vintage Chấm Bi</a></h2>
                <div class="row">
                  <div class="col-md-6 price">50.000 vnđ</div>
                  <div class="col-md-6 product-code">Mã : D001</div>
                </div>
              </div><!-- end product-item-->
              <div class="product-item col-md-3 col-sm-4 col-sx-6">
                <div class="thumb">
                  <a href=""><img src="images/product.jpg" alt="alt" class="img-responsive" /></a>
                  <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Xem ngay</button>
                  <span class="status"><i class="glyphicon glyphicon-shopping-cart"></i> Còn hàng</span>
                </div>
                <h2 class="product-name"><a href="">Đầm Vintage Chấm Bi</a></h2>
                <div class="row">
                  <div class="col-md-6 price">50.000 vnđ</div>
                  <div class="col-md-6 product-code">Mã : D001</div>
                </div>
              </div><!-- end product-item-->
              <div class="product-item col-md-3 col-sm-4 col-sx-6">
                <div class="thumb">
                  <a href=""><img src="images/product.jpg" alt="alt" class="img-responsive" /></a>
                  <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Xem ngay</button>
                  <span class="status"><i class="glyphicon glyphicon-shopping-cart"></i> Còn hàng</span>
                </div>
                <h2 class="product-name"><a href="">Đầm Vintage Chấm Bi</a></h2>
                <div class="row">
                  <div class="col-md-6 price">50.000 vnđ</div>
                  <div class="col-md-6 product-code">Mã : D001</div>
                </div>
              </div><!-- end product-item-->
            </div><!-- end list-->
          </div><!-- end product-->
          <div class="product-list">
            <div class="title">
              <h3>Áo nữ</h3>
            </div><!-- end title-->
            <div class="list">
              <div class="product-item col-md-3 col-sm-4 col-sx-6">
                <div class="thumb text-center">
                  <a href=""><img src="images/product.jpg" alt="alt" class="img-responsive" /></a>
                  <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Xem ngay</button>
                  <span class="status"><i class="glyphicon glyphicon-shopping-cart"></i> Còn hàng</span>
                </div>
                <h2 class="product-name"><a href="">Đầm Vintage Chấm Bi</a></h2>
                <div class="row">
                  <div class="col-md-6 price">50.000 vnđ</div>
                  <div class="col-md-6 product-code">Mã : D001</div>
                </div>
              </div><!-- end product-item-->
              <div class="product-item col-md-3 col-sm-4 col-sx-6">
                <div class="thumb">
                  <a href=""><img src="images/product.jpg" alt="alt" class="img-responsive" /></a>
                  <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Xem ngay</button>
                  <span class="status"><i class="glyphicon glyphicon-shopping-cart"></i> Còn hàng</span>
                </div>
                <h2 class="product-name"><a href="">Đầm Vintage Chấm Bi</a></h2>
                <div class="row">
                  <div class="col-md-6 price">50.000 vnđ</div>
                  <div class="col-md-6 product-code">Mã : D001</div>
                </div>
              </div><!-- end product-item-->
              <div class="product-item col-md-3 col-sm-4 col-sx-6">
                <div class="thumb">
                  <a href=""><img src="images/product.jpg" alt="alt" class="img-responsive" /></a>
                  <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Xem ngay</button>
                  <span class="status"><i class="glyphicon glyphicon-shopping-cart"></i> Còn hàng</span>
                </div>
                <h2 class="product-name"><a href="">Đầm Vintage Chấm Bi</a></h2>
                <div class="row">
                  <div class="col-md-6 price">50.000 vnđ</div>
                  <div class="col-md-6 product-code">Mã : D001</div>
                </div>
              </div><!-- end product-item-->
              <div class="product-item col-md-3 col-sm-4 col-sx-6">
                <div class="thumb">
                  <a href=""><img src="images/product.jpg" alt="alt" class="img-responsive" /></a>
                  <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Xem ngay</button>
                  <span class="status"><i class="glyphicon glyphicon-shopping-cart"></i> Còn hàng</span>
                </div>
                <h2 class="product-name"><a href="">Đầm Vintage Chấm Bi</a></h2>
                <div class="row">
                  <div class="col-md-6 price">50.000 vnđ</div>
                  <div class="col-md-6 product-code">Mã : D001</div>
                </div>
              </div><!-- end product-item-->
            </div><!-- end list-->
          </div><!-- end product-->
        </div><!-- main-content-->
        <div class="col-md-3">
          <div class="sidebar-right">
            <div class="title-sidebar">
                <a href="#">Danh mục sản phẩm</a>
            </div>
                <ul class="list-unstyled list-style ">
                  <li><a href="#">Áo thun nữ</a></li>
                  <li><a href="#">Áo khoác nữ</a></li>
                  <li><a href="#">Váy - Đầm nữ</a></li>
                  <li><a href="#">Sơ mi nữ</a></li>
                  <li><a href="#">Phụ kiện nữ</a></li>
                </ul>
            </div><!--sibar right-->
            <div class="sidebar-right">
                <div class="title-sidebar">
                    <a href="#">Tin tức</a>
                </div>
                <div class="media">
                    <a class="pull-left" href="#">
                      <img class="media-object sidebar-image" src="images/anh1_bg.png" alt="anh1" />
                    </a>
                    <div class="media-body">
                      <a href="#">Zoom vào phong cách của chàng trai nước Mỹ </a>
                    </div>
                </div>
                <div class="media">
                    <a class="pull-left" href="#">
                      <img class="media-object sidebar-image" src="images/anh1_bg.png" alt="anh1">
                    </a>
                    <div class="media-body">
                      <a href="#">Zoom vào phong cách của chàng trai nước Mỹ </a>
                    </div>
                </div>
                <div class="media">
                    <a class="pull-left" href="#">
                      <img class="media-object sidebar-image" src="images/anh1_bg.png" alt="anh1">
                    </a>
                    <div class="media-body">
                      <a href="#">Zoom vào phong cách của chàng trai nước Mỹ </a>
                    </div>
                </div>
                <div class="media">
                    <a class="pull-left" href="#">
                      <img class="media-object sidebar-image" src="images/anh1_bg.png" alt="anh1">
                    </a>
                    <div class="media-body">
                      <a href="#">Zoom vào phong cách của chàng trai nước Mỹ </a>
                    </div>
                </div>
            </div><!--sibar right-->
            <div class="sidebar-right muahang">
              <p>HƯỚNG DẪN MUA HÀNG TẠI NHÍM SHOP</p>
              <img  class="img-responsive" src="images/tui_bg.png">
              <img  class="tui2" src="images/tui2_bg.png">
            </div><!--sidebar-right muahang-->
            <div class="facebook ">
              <img src="images/facebook_bg.png" />
            </div><!--facebook-->
        </div><!--end col-md-3-slide-bar-->
      </div>
       <div class="col-md-12">
          <div class="dathang">
              <img class="img-responsive" src="images/anh5_bg.png"/>
          </div><!--end.dathang-->
        </div>
    </div>
    <div class="col-md-12 footer">
      <div class="main-page container">
          <div class="col-md-3">
            <div class="hotrokhachhang">
              <h4>HỖ TRỢ KHÁCH HÀNG</h4>
              <div class="line-hotro"></div>
              <ul>
                  <li><a href="#">Trợ giúp</a></li>
                  <li><a href="#">Chính sách khách hàng</a></li>
                  <li><a href="#">Hướng dẫn mua hàng</a></li>
                  <li><a href="#">Gửi phản hồi / ý kiến</a></li>
              </ul>
            </div><!--end .hotrokhachhang-->
          </div>
          <div class="col-md-2">
             <div class="hotrokhachhang">
              <h4>VỀ NHÍM SHOP</h4>
              <div class="line-hotro"></div>
              <ul>
                  <li><a href="#">Giới thiệu về Nhím Shop</a></li>
                  <li><a href="#">Điều khoản sử dụng</a></li>
                  <li class="face"><a href="#">Facebook</a></li>
                  <li class="google"><a href="#">Google +</a></li>
              </ul>
            </div><!--end .hotrokhachhang-->
          </div>
          <div class="col-md-3">
            <div class="hotrokhachhang">
              <h4>LIÊN HỆ</h4>
              <div class="line-hotro"></div>
              <ul>
                  <li><a href="#">Cơ sở : Số 123 - đường Mỹ Đình - Từ Liêm - Hà Nội</a></li>
                  <li><a href="#">HOTLINE : 0962987026</a></li>
                  <li><a href="#">Email : sales@nhimshop.com</a></li>
                  <li><a href="#">skype :ac_nobita or thinhnguyen</a></li>
              </ul>
            </div><!--end .hotrokhachhang-->
          </div>
          <div class="col-md-3 hidden-xs">
            <img src="images/bando_bg.png" class="responsive-img maps">
          </div>
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Đầm Vintage Chấm Bi</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-4 col-sm-4 col-xs-4">
                <a href=""><img src="images/product.jpg" alt="alt" class="img-responsive" /></a>
              </div>
              <div class="col-md-7 col-sm-7 col-xs-7">
                <ul class="info-product">
                  <li><strong>Giá</strong> : 100.000 vnđ</li>
                  <li><strong>Size</strong> : XL</li>
                  <li><strong>Tình trạng</strong> : <span class="label label-success">Còn hàng</span></li>
                  <li><strong>Số lượng</strong> : <input type="number" min="1" max="50" value="1" /></li>
                  <li><button class="btn btn-primary">Cho vào giỏ</button></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
    $('.carousel').carousel();
    $('#myModal').modal(options);
    </script>
  </body>
</html>
