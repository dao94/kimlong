@extends('user.main')

@section('content')
<style type="text/css">
    .produce-wp a{color: #43b8b4;font-weight: bold;}
</style>
<div class="columns-container">
    <div id="columns" class="container">
        <div class="col-md-12 " style="padding:0px;">
            <ol class="breadcrumb clearfix hidden-sm hidden-xs">
                <li>
                    <a href="/" target="_self">Trang chủ</a>
                </li>
                <li class="active">
                    <span>Tin tức</span>
                </li>
            </ol>
        </div>
        <div class="feature-product col-xs-12 col-md-12 col-sm-12">
            @if ($news)
                @foreach ($news as $item)
                <div class="row produce-wp media">
                    <a class="pull-left" href="{{$curentUrl}}/{{$item->slug}}-{{$item->id}}">
                      <img class="media-object " style="width:130px;" src='{{asset("uploads/$item->images")}}' alt="anh1">
                    </a>
                    <div class="media-body">
                        <a href="{{$curentUrl}}/{{$item->slug}}-{{$item->id}}">
                            <h5>{{$item->name}}</h5>
                        </a>
                        <div class="clearfix"></div>
                        <p class="text-left">{{$item->description}}</p>
                    </div>
                </div>
                @endforeach
            @endif
        </div><!---->
    </div><!--end.columns-->
</div><!--end.columns-container-->

@endsection