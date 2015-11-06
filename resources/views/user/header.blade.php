<style type="text/css">
    header .header-middle{padding-top: 0px}
</style>
<header id="header">
            <div class="banner">
                <div class="container">
                    <div class="row">
                    </div>
                </div>
            </div>

            <div class="header-middle">
                <div class="container">
                    <div class="" style="background-image:url({{asset('uploads/'.$setting['banner'])}});background-size:80%;background-repeat: no-repeat;;background-repreat:;height:97px">
                        <div id="header_logo" class="col-xs-12 col-md-2 col-sm-12">
                            <!-- LOGO -->
                            <h1>
                                
                            </h1>
                            <h1 style="display:none">
                                <a href="index.html">CongXepTuDong</a>
                            </h1>
                        </div>
                        <div class="header-middle-right col-xs-12 col-md-10 col-sm-12" style="margin-top:40px;margin-left:270px">
                            <div class="row"><!-- Block search module TOP -->
                                <!-- MODULE Block cart -->
                                <div class="clearfix">
                                    <div class="col-xs-3 col-md-4 col-md-offset-9">
                                        <div class="hotline coler-desc">
                                            <div class="coler-icon"><span class="glyphicon glyphicon-phone-alt"></span>
                                            </div>
                                            <div class="coler-mest" style="font-size:14px">Hotline <span>24/7</span>

                                                <p class="sdt">
                                                    <strong><a href="tel:{{$setting['phone_contact']}}"><span style="color: #e5414a;">{{$setting['phone_contact']}}</span></a></strong>
                                                </p></div>
                                        </div>
                                        <!-- hotline coler-desc-->
                                    </div>
                                    <!-- col-xs-12 col-sm-12 col-md-52-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-bottom">
                <div class="container">
                    <div class="row">
                        <div class="menu-container">
                            <div class="container">
                                <div class="nav-container visible-lg visible-md">
                                    <div id="pt_custommenu" class="pt_custommenu">

                                        <?php $url =  URL::current(); 
                                            $exUrl = explode('/', $url);
                                        ?>

                                        <div id="pt_menu_home" class="pt_menu top <?php echo !isset($exUrl[3]) ? "act" : '' ;?>">
                                            <div class="parentMenu">
                                                <a href="/"><span>Trang chủ</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div id="pt_menu1" style="display:none;"
                                             class=" <?php echo !isset($exUrl[3]) ? "act" : '' ;?> pt_menu top  nav-1  pt_menu_no_child ">
                                            <div class="parentMenu ">
                                                <a href="/" title="Trang chủ"><span>Trang chủ</span>
                                                </a>
                                            </div>

                                        </div>


                                        <div id="pt_menu2" class="<?php echo isset($exUrl[3]) && $exUrl[3] == 'san-pham' ? "act" : '' ;?> pt_menu top  nav-2 ">
                                            <div class="parentMenu ">
                                                <a href='{{asset("san-pham")}}' title="Sản phẩm"><span>Sản phẩm</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div id="pt_menu4" class=" pt_menu top  nav-4  pt_menu_no_child <?php echo isset($exUrl[3]) && $exUrl[3] == 'gioi-thieu' ? "act" : '' ;?>">
                                            <div class="parentMenu ">
                                                <a href='{{asset("gioi-thieu")}}' title="Giới thiệu"><span>Giới thiệu</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div id="pt_menu4" class=" pt_menu top  nav-4  pt_menu_no_child <?php echo isset($exUrl[3]) && $exUrl[3] == 'cong-nghe' ? "act" : '' ;?>">
                                            <div class="parentMenu ">
                                                <a href='{{asset("cong-nghe")}}' title="Công nghệ"><span>Công nghệ</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div id="pt_menu4" class=" pt_menu top  nav-4  pt_menu_no_child <?php echo isset($exUrl[3]) && $exUrl[3] == 'tin-tuc' ? "act" : '' ;?>">
                                            <div class="parentMenu ">
                                                <a href='{{asset("tin-tuc")}}' title="Tin tức"><span>Tin tức</span>
                                                </a>
                                            </div>

                                        </div>

                                        <div id="pt_menu5" class=" pt_menu top  nav-5  pt_menu_no_child <?php echo isset($exUrl[3]) && $exUrl[3] == 'lien-he' ? "act" : '' ;?>">
                                            <div class="parentMenu ">
                                                <a href='{{asset("lien-he")}}' title="Liên hệ"><span>Liên hệ</span>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- end menu -->
                            </div>

                        </div>
                        <script>
                            //<![CDATA[
                            var CUSTOMMENU_POPUP_EFFECT     = 0;
                            var CUSTOMMENU_POPUP_TOP_OFFSET = 55;
                            //]]>
                        </script>

                    </div>
                </div>
            </div>
            <div class="megamenu_out">
                <div class="container">
                    <!-- Block categories module -->
                    <div class="ma-nav-mobile-container hidden-desktop hidden-sm hidden-md hidden-lg">
                        <div class="navbar">
                            <div id="navbar-inner" class="navbar-inner navbar-inactive">
                                <a class="btn btn-navbar"></a>
                                <span class="brand">Danh mục</span>
                                <?php 
                                    if(!function_exists('checkMenuHasChild')){

                                    
                                         function checkMenuHasChild($menus, $parentId){
                                            foreach ($menus as $key => $value) {
                                                if($value['parent_key'] == $parentId){
                                                    return true;
                                                }
                                            }
                                            return false;
                                        }
                                    }
                                ?>
                                
                                <ul id="ma-mobilemenu" class="tree dhtml  mobilemenu nav-collapse collapse">
                                    @foreach ($menu as $item)
                                        @if ($item['parent_key'] == 0)
                                            <li>
                                                @if (checkMenuHasChild($menu, $item['id']))
                                                    <a >
                                                        <span>{{$item['name']}}</span>
                                                    </a>
                                                @else
                                                    <a href="chuyen-muc/{{$item['slug']}}-{{$item['id']}}">
                                                        <span>{{$item['name']}}</span>
                                                    </a>
                                                @endif
                                                @if (checkMenuHasChild($menu, $item['id']))
                                                <ul>

                                                    <li>
                                                        <p>Máy tính
                                                        </p>
                                                        <ul>
                                                        @foreach ($menu as $sub)
                                                            @if ($sub['parent_key'] == $item['id'])
                                                                <li><a href="/chuyen-muc/{{$sub['slug']}}-{{$sub['id']}}" title="{{$sub['name']}}"> {{$sub['name']}} </a></li>
                                                            @endif
                                                        @endforeach
                                                            
                                                            
                                                        </ul>
                                                    </li>

                                                </ul>
                                                @endif

                                            </li>
                                        @endif
                                    @endforeach
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /Block categories module -->
                </div>
            </div>
        </header>