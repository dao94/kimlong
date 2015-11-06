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
                    <span>Giới thiệu</span>
                </li>
            </ol>
        </div>
        <div class="feature-product col-xs-12 col-md-12 col-sm-12">
        	<?php echo $item ? html_entity_decode($item->content) : '';?>
        </div><!---->
    </div><!--end.columns-->
</div><!--end.columns-container-->

@endsection