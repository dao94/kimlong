@extends('user.main')
    
@section('content')
<style type="text/css">
    .section-title {color:#6FA3E2 !important};
</style>
            <div class="container">
                @include('user.nav')
            </div>
    <!-- end header-container -->
            <div class="columns-container">
                <div id="columns" class="container">
                     <div class="row">
                <div class="feature-product col-xs-12 col-md-12 col-sm-12">
                    <div class="pos-feature-product ">
                        <div class="pos-feature-product-title">

                            <h2 class="section-title" style="">

                                Sản phẩm mới
                            </h2>

                        </div>
                        <div class="row">
                            <div class="featureSlide content-product-list owl-carousel owl-theme"
                                 style="display: block; opacity: 1;">
                                @foreach ($product_newest as $item)

                                <div class="slider_item product-resize">
                                    <div class="item-inner">
                                        <div class="products image-resize">
                                            <a class="bigpic_3_tabproduct tabproduct-img product_image"
                                               href="san-pham/{{$item->slug}}-{{$item->id}}"
                                               title="{{$item->name}}">
                                                <img class="replace-2x" src='{{asset("uploads/$item->images")}}' alt="">
                                            </a>
                                        </div>
                                        <div class="product-contents">
                                            <h5 class="product-name">
                                                <a class="product-name"
                                                   href="san-pham/{{$item->slug}}-{{$item->id}}"
                                                   title="{{$item->name}}">{{$item->name}}</a></h5>

                                            <div class="price-box">
                                                <span class="price product-price">{{$item->price}}đ - {{$setting['phone_contact']}}</span>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                

                            </div>
                            <div class="boxprevnext">
                                <a class="prev prevfure"><i class="fa fa-angle-left"></i></a>
                                <a class="next nextfure"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>



                @foreach ($category_show_in_index as $category)
                <div class="feature-product col-xs-12 col-md-12 col-sm-12">
                    <div class="pos-feature-product ">
                        <div class="pos-feature-product-title no-arrow-button">
                            <h2 class="section-title">
                                {{$category->name}}
                            </h2>

                        </div>
                        <div class="row">
                            <div class="featureSlide2 content-product-list owl-carousel owl-theme"
                                 style="display: block; opacity: 1;">

                                 @foreach ($model->listProductByCategory($category->id, 0, 4) as $item)
                                <div class="slider_item product-resize">
                                    <div class="item-inner">
                                        <div class="products image-resize">
                                            <a class="bigpic_3_tabproduct tabproduct-img product_image"
                                               href="san-pham/{{$item->slug}}-{{$item->id}}"
                                               title="{{$item->name}}">
                                                <img class="replace-2x" src='{{asset("uploads/$item->images")}}' alt="">
                                            </a>
                                        </div>
                                        <div class="product-contents">
                                            <h5 class="product-name">
                                                <a class="product-name"
                                                   href="san-pham/{{$item->slug}}-{{$item->id}}"
                                                   title="{{$item->name}}">{{$item->name}}</a></h5>

                                            <div class="price-box">
                                                <span class="price product-price">{{$item->price}}đ - {{$setting['phone_contact']}}</span>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                            
                        </div>
                    </div>
                </div>
                @endforeach
               
                <div class="col-xs-12 col-md-12 col-sm-12" style="clear:both;">
                    <div class="block-smartblog">
                        <h3 class="sdstitle_block"><a class="section-title">Tin tức</a></h3>

                        <div class="row">
                            <div class="sdsblog-box-content">
                                @foreach ($news as $item)
                                <div class="sds_blog_post">
                                    <div class="blog-post">
                                        <span class="news_module_image_holder">                         
                                            <a href="/tin-tuc/{{$item->slug}}-{{$item->id}}"><img
                                                    class="feat_img_small"
                                                    src='{{asset("uploads/$item->images")}}'
                                                    alt="{{$item->name}}">
                                            </a>                    
                                        </span>

                                        <h4 class="sds_post_title"><a
                                                href="/tin-tuc/{{$item->slug}}-{{$item->id}}">{{$item->name}}</a></h4>

                                        <p>
                                            <?php echo htmlspecialchars_decode($item->name);?>
                                        </p>
                                        <div class="post-bottom">
                                            <a href="/tin-tuc/{{$item->slug}}-{{$item->id}}"
                                               class="r_more">Xem thêm</a>
                                            <span class="date-smart"><?php echo (new DateTime($item->create_time))->format('d/m/Y');?></span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach





                            </div>
                            <div class="boxprevnext">
                                <a class="prev prevblog"><i class="fa fa-angle-left"></i></a>
                                <a class="next nextblog"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>


                    


                </div>
            </div>
                </div>





            </div>
           
@endsection
