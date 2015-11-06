<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<head>
    <link rel="shortcut icon" href="assets/user/other/favicon67ed.png?v=2016" type="image/png"/>
    <meta charset="utf-8"/>
    <title>

        {{$title}} - {{$setting['site_name']}}
        
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=0' name='viewport'/>

    <meta name="description" content="{{$setting['tag_description']}}">

    <meta name="keywords" content="{{$setting['tag_keyword']}}">
    <?php 
        //echo htmlspecialchars_decode($setting['tag_header']); 
    ?>
    <link rel="stylesheet" href="{{asset('assets/user/font-awesome/css/font-awesome.css')}}">
    <script src="{{ asset('assets/user/design/js/jquery.min.1.11.0.js') }}"></script>
    <script src="{{ asset('assets/user/design/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/user/other/scripts67ed.js?v=2016') }}" type='text/javascript'></script>
    <script src="{{ asset('assets/user/other/global67ed.js?v=2016')}}" type='text/javascript'></script>
    <script src="{{ asset('assets/user/other/treeManagement67ed.js?v=2016') }}" type='text/javascript'></script>
    <script src="{{ asset('assets/user/other/image-loaded67ed.js?v=2016') }}" type='text/javascript'></script>

    <script src="{{ asset('assets/user/other/15-jquery.total-storage.min67ed.js?v=2016') }}" type='text/javascript'></script>
    <script src="{{ asset('assets/user/design/theme-default/html5shiv.js')}}"></script>

    <script src="{{ asset('assets/user/design/theme-default/jquery-migrate-1.2.0.min.js')}}"></script>
    <script src="{{ asset('assets/user/option_selection.js')}}" type='text/javascript'></script>
    <script src="{{ asset('assets/user/api.jquery.js')}}" type='text/javascript'></script>

    <script data-target=".product-resize" data-parent=".content-product-list" data-img-box=".image-resize"
    src="{{asset('assets/user/design/js/fixheightproduct.js')}}"></script>
    <script src="{{asset('assets/user/design/js/haravan.plugin.1.0.js')}}"></script>

    <script src="{{asset('assets/user/design/theme-default/jquery.flexslider.js')}}" type='text/javascript'></script>
    <script src="{{asset('assets/user/other/custommenu67ed.js?v=2016')}}" type='text/javascript'></script>
    <script src="{{asset('assets/user/other/jquery.sequence67ed.js?v=2016')}}" type='text/javascript'></script>


    <script src="{{asset('assets/user/design/js/owl.carousel.js')}}" type='text/javascript'></script>
    <script src="{{asset('assets/user/other/loadimage67ed.js?v=2016')}}" type='text/javascript'></script>

    <link href="{{asset('assets/user/design/theme-default/page-contact-form.css')}}" rel='stylesheet' type='text/css' media='all'/>
    <link href="{{asset('assets/user/design/css/owl.carousel.css')}}" rel='stylesheet' type='text/css' media='all'/>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{asset('assets/user/design/css/bootstrap.3.3.1.css')}}">
    <!-- Theme haravan-->
    <link rel="stylesheet" href="{{asset('assets/user/other/haravantheme.1.067ed.css?v=2016')}}">
    <!-- Latest compiled and minified JavaScript -->

    <link href="{{asset('assets/user/design/theme-default/flexslider.css')}}" rel='stylesheet' type='text/css' media='all'/>
    <link href="{{asset('assets/user/other/jquery.ui.theme67ed.css?v=2016')}}" rel='stylesheet' type='text/css' media='all'/>

    <link href="{{asset('assets/user/other/styles67ed.css?v=2016')}}" rel='stylesheet' type='text/css' media='all'/>
    <link href="{{asset('assets/user/other/sidebar67ed.css?v=2016')}}" rel='stylesheet' type='text/css' media='all'/>
    <link href="{{asset('assets/user/other/custommenu67ed.css?v=2016')}}" rel='stylesheet' type='text/css' media='all'/>
    <link href="{{asset('assets/user/other/posvegamenu67ed.css?v=2016')}}" rel='stylesheet' type='text/css' media='all'/>
    <link href="{{asset('assets/user/other/jquery.mobile-menu67ed.css?v=2016')}}" rel='stylesheet' type='text/css' media='all'/>
    <link href="{{asset('assets/user/other/bannersequence67ed.css?v=2016')}}" rel='stylesheet' type='text/css' media='all'/>
    <link href="{{asset('assets/user/other/producttab67ed.css?v=2016')}}" rel='stylesheet' type='text/css' media='all'/>
    <script src="{{asset('assets/user/other/mobile_menu67ed.js?v=2016')}}" type='text/javascript'></script>
    <script src="{{asset('assets/user/other/jquery.mobile-menu67ed.js?v=2016')}}" type='text/javascript'></script>
    <script src="{{asset('assets/user/other/jquery-ui.min67ed.js?v=2016')}}" type='text/javascript'></script>

    <script src="{{asset('assets/user/custom_theme.js')}}" type='text/javascript'></script>

    <script type='text/javascript'>
        //<![CDATA[
        if ((typeof Haravan) === 'undefined') {
            Haravan = {};
        }
        //]]>
    </script>
    <style type="text/css">
        #sequence{height: 380px}
    </style>
</head>

<body>
<div id="overlay"></div>
<div id="page">
    <!-- begin .header-container -->
    <div class="header-container">
        @include('user.header')

        <div class="home-banner">
            @yield('content')

            @include('user.footer')

        </div>
    </div><!--end.header-container-->
    <div id="mobile-menu">
        @include('user.menu_mobile')
    </div>
</div><!--end.page-->
<!-- /#rmm   -->

<!-- Quick view -->

</body>

</html>



