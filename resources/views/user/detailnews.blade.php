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
                    <span>{{$news ? $news->name : ''}}</span>
                </li>
            </ol>
        </div>
        <h4 class="text-info" style="margin-bottom:10px">{{$news->name}}</h4>
        <p><?php echo html_entity_decode($news->content);?></p>
    </div><!--end.columns-->
</div><!--end.columns-container-->

@endsection