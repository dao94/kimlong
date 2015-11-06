
@extends('user.main')

@section('content')
<style type="text/css">
    a.product-name{margin-bottom: 10px;white-space: normal}
    .feature-product{padding-left: 0px;padding-right: 0px;}
</style>
<div class="columns-container">
        <div id="columns" class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <ol class="breadcrumb clearfix hidden-sm hidden-xs">
                        <li><a href="/" target="_self">Trang chủ</a></li>
                        <li class="active"><span> {{$product->name}}</span></li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div id="wrapper-detail">
                        <div class="">
                            <div class="pb-left-column col-xs-12 col-sm-6 col-md-6">
                                <div id="surround">
                                    <div id="image-block">

                                        <!-- <a class="slide-prev slide-nav" href="javascript:">
                                            <i class="fa fa-arrow-circle-o-left fa-2"></i>
                                        </a>
                                        <a class="slide-next slide-nav" href="javascript:">
                                            <i class="fa fa-arrow-circle-o-right fa-2"></i>
                                        </a> -->
                                        <img class=" product-image-feature"
                                             src='{{asset("uploads/$product->images")}}'
                                             alt="{{$product->name}}">

                                    </div>

                                  


                                </div>

                            </div>
                            <div class="pb-center-column  col-xs-12 col-sm-6 col-md-6">
                                <div class="product-title">
                                    <h1>{{$product->name}}</h1>
                                    <span id="pro_sku"></span>
                                </div>
                                <div id="short_description_block">
                                    <div id="short_description_content" class="rte align_justify">
                                        <?php echo html_entity_decode($product->description) ?>
                                    </div>
                                </div>
                                <div class="product-price" id="price-preview">
                                    <!-- <del>400,000₫</del> -->
                                    <span><?php 
                                        if($product->price > 0){
                                            echo number_format($product->price).'₫';
                                        }else {
                                            echo 'Liên hệ';
                                        }
                                        ?>
                                    </span>
                                </div>
                                <p class="product-inventory"></p>
                                    <div class="add-to-box">
                                       
                                        <div class="cart-">
                                            <a href="{{asset('lien-he')}}">
                                                <button id="add-to-cart" class=" btn-color-add btn-min-width btn-mgt"name="add">
                                                    Liên hệ
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">

                                    </div>
                      

                                <div class="pt20">
                                    <!-- Begin tags -->


                                    <!-- End tags -->
                                </div>


                                <div class="pt20">
                                    <!-- Begin social icons -->
                                    <div class="addthis_toolbox addthis_default_style ">

                                        <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>


                                        <a class="addthis_button_google_plusone" g:plusone:size="medium"
                                           g:plusone:count="false"></a>

                                    </div>
                                    <script type="text/javascript"
                                            src="../../s7.addthis.com/js/250/addthis_widget.js"></script>

                                    <!-- End social icons -->
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="clearfix"></div>
                    <div class="more-info" style="margin-top:20px;">
                        
                        <div role="tabpanel" class="product-comments">
                        <!-- Nav tabs -->
                        <ul id="more_info_tabs" class="idTabs idTabsShort clearfix nav " role="tablist">
                            <li role="presentation" class="active">
                            <a href="#mota" aria-controls="mota" role="tab"
                                                                      data-toggle="tab">Mô tả sản phẩm</a></li>

                            <li role="presentation">
                                <a href="#binhluans" aria-controls="binhluans" role="tab" data-toggle="tab" role="tab">
                                    <span>Bình luận</span></a>

                            </li>

                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" id="mota" class="tab-pane page-product-box active">
                                <div class="container-fluid product-description-wrapper">

                                    <div class="tab-content active" id="tab_content_product_introduction"
                                         style="box-sizing: border-box; padding-top: 0px; padding-bottom: 16px; color: #333333; font-family: Tahoma, san-serif; font-size: 13px; line-height: 20px;"
                                         data-mce-style="box-sizing: border-box; padding-top: 0px; padding-bottom: 16px; color: #333333; font-family: Tahoma, san-serif; font-size: 13px; line-height: 20px;">
                                         <?php echo html_entity_decode($product->content) ?>
                                    </div>
                                   

                                </div>
                            </div>

                            <div role="tabpanel" id="binhluans" class="tab-pane page-product-box ">
                                <div class="container-fluid">
                                    <div id="fb-root"></div>
                                    <div class="fb-comments"
                                         data-href="http://loza-store.myharavan.com/products/chuot-khong-day-prolink-pmw6001-do"
                                         data-numposts="5" width="100%" data-colorscheme="light"></div>
                                    <!-- script comment fb -->
                                    <script type="text/javascript">(function (d, s, id) {
                                            var js, fjs = d.getElementsByTagName(s)[0];
                                            if (d.getElementById(id)) return;
                                            js = d.createElement(s);
                                            js.id = id;
                                            js.src = "http://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.0";
                                            fjs.parentNode.insertBefore(js, fjs);
                                        }(document, 'script', 'facebook-jssdk'));
                                    </script>
                                </div>
                            </div>

                        </div>
                    </div>
                    </div>




                </div>

                
                <div class="col-md-3 pos-best-sellers-wrapper">
                    <div class="pos-best-sellers products_block bestsellers ">

                        <h4 class="title_possellers" style="margin-right:0px">Sản phẩm cùng thể loại</h4>

                        <div class="block_content_bestsellers">
                            <div class="pageTopsellers block_content products-block owl-carousel owl-theme"
                                 style="display: block; opacity: 1;">


                                <div class="item_out">

                                    @foreach ($product_newest as $item)
                                    <div class="seller-item item">
                                        <div class="sellers-img">
                                            <a href="/san-pham/{{$item->slug}}-{{$item->id}}" title=""
                                               class="products-block-image content_img clearfix">
                                                <img class="replace-2x img-responsive"
                                                     src='{{asset("uploads/$item->images")}}'
                                                     alt="">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <h5 class="product-name">
                                                <a href="/san-pham/{{$item->slug}}-{{$item->id}}"
                                                   title="{{$item->name}}">
                                                    {{$item->name}}
                                                </a>
                                            </h5>

                                            <div class="price-box">
                                                <span itemprop="price" class="price product-price">
                                                    <?php 
                                                        if($item->price > 0){
                                                            echo number_format($item->price).'₫';
                                                        }else {
                                                            echo 'Liên hệ : '.$setting['phone_contact'];
                                                        }
                                                    ?>
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                    @endforeach


                                </div>




                            </div>

                           
                        </div>
                    </div>
                </div>
             
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 more-info">
                    
                </div>

             

            </div>
        </div>

   

    </div>

@endsection

<style>
    @media (max-width:1024px){
        .pos-best-sellers-wrapper{
            clear:both;
        }
    }

</style>