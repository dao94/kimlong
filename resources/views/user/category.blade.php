@extends('user.main')

@section('content')
<style type="text/css">
    a.product-name{margin-bottom: 10px;white-space: normal}
    .feature-product{padding-left: 0px;padding-right: 0px;}
</style>
<div class="columns-container">
    <div id="columns" class="container">
        <div class="col-md-12 " style="padding:0px;">
            <ol class="breadcrumb clearfix hidden-sm hidden-xs">
                <li>
                    <a href="/" target="_self">Trang chủ</a>
                </li>
                <li class="active">
                    <span>{{$name_category ? $name_category->name : ''}}</span>
                </li>
            </ol>
        </div>
        <div class="row">
            <div class="feature-product col-xs-12 col-md-12 col-sm-12">
                @if(!$product_list)
                <div class="alert" role="alert">
                    <span >Không có sản phẩm nào !</span>
                </div>
                @else
                    @foreach($product_list as $item)
                    <div class="col-sm-3">
                        <div class="item-inner">
                            <div class="products image-resize">
                                <a class="bigpic_3_tabproduct tabproduct-img product_image" href="/san-pham/{{$item->slug}}-{{$item->id}}" title="{{$item->name}}">
                                    <img class="replace-2x img-responsive" src='{{asset("uploads/$item->images")}}' alt="{{$item->alt}}" width="100%" style="padding:5px">
                                </a>
                            </div>
                            <div class="product-contents">
                                <h5 class="product-name">
                                    <a class="product-name" href="/san-pham/{{$item->slug}}-{{$item->id}}" title="{{$item->name}}">
                                       {{$item->name}}
                                   </a>
                               </h5>
                                <div class="price-box">
                                    <span class="price product-price">Giá : 0{{$item->price}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div><!--end.columns-->
</div><!--end.columns-container-->

@endsection