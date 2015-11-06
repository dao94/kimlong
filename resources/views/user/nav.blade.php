
                <div class="row">
                    <h1 class="hidden">Loza Store</h1>

                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="navleft-container visible-lg visible-md ">
                            <div class="pt_vmegamenu_title">
                                <h2><i class="icon-reorder"></i>Danh mục </h2>
                            </div>

                            <div id="pt_vmegamenu" class="pt_vmegamenu">
                                <?php 
                                     function checkMenuHasChild($menus, $parentId){
                                        foreach ($menus as $key => $value) {
                                            if($value['parent_key'] == $parentId){
                                                return true;
                                            }
                                        }
                                        return false;
                                    }
                                ?>
                                @foreach ($menu as $item)
                                    @if ($item['parent_key'] == 0)

                                        <div id="ver_pt_menu16" class="pt_menu left {{checkMenuHasChild($menu, $item['id']) ? '' : 'noSub'}}" >
                                            <div class="parentMenu">
                                            @if (checkMenuHasChild($menu, $item['id']))
                                                <a >
                                                    <span>{{$item['name']}}</span>
                                                </a>
                                            @else
                                                <a href="chuyen-muc/{{$item['slug']}}-{{$item['id']}}">
                                                    <span>{{$item['name']}}</span>
                                                </a>
                                            @endif



                                                
                                            </div>
                                            @if (checkMenuHasChild($menu, $item['id']))
                                            <div class="wrap-popup">
                                                <div id="ver_popup15" class="popup">
                                                    <div class="box-popup">
                                                        <div class="block1">
                                                            <div class="first clearfix">
                                                                <div class="itemMenu level1">
                                                                    <div class="row_menu">
                                                                        <div class="itemSubMenu level3">
                                                                            <div class="itemMenu level4">
                                                                                @foreach ($menu as $sub)
                                                                                    @if ($sub['parent_key'] == $item['id'])
                                                                                        <a class="itemMenuName level4" href="chuyen-muc/{{$sub['slug']}}-{{$sub['id']}}"><span> {{$sub['name']}}</span></a>
                                                                                    @endif
                                                                                @endforeach
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="last clearfix">
                                                                <div class="itemMenu level1">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif

                                        </div>
                                    @endif
                                @endforeach
                                
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <script>
                            //<![CDATA[
                            var VMEGAMENU_POPUP_EFFECT = 2;
                            //]]>

                            $(document).ready(function () {
                                $("#pt_ver_menu_link ul li").each(function () {
                                    var url = document.URL;
                                    $("#pt_ver_menu_link ul li a").removeClass("act");
                                    $('#pt_ver_menu_link ul li a[href="' + url + '"]').addClass('act');
                                });

                                $('.pt_menu.left').hover(function () {
                                    if (VMEGAMENU_POPUP_EFFECT == 0) $(this).find('.popup').stop(true, true).slideDown('slow');
                                    if (VMEGAMENU_POPUP_EFFECT == 1) $(this).find('.popup').stop(true, true).fadeIn('slow');
                                    if (VMEGAMENU_POPUP_EFFECT == 2) $(this).find('.popup').stop(true, true).show('slow');
                                }, function () {
                                    if (VMEGAMENU_POPUP_EFFECT == 0) $(this).find('.popup').stop(true, true).slideUp('fast');
                                    if (VMEGAMENU_POPUP_EFFECT == 1) $(this).find('.popup').stop(true, true).fadeOut('fast');
                                    if (VMEGAMENU_POPUP_EFFECT == 2) $(this).find('.popup').stop(true, true).hide('fast');
                                });

                            });
                        </script>
                        <script>
                            $(function () {
                                $('.pt_vmegamenu_title').click(function () {
                                    $(this).parent().find('.pt_vmegamenu').slideToggle('fast');
                                    $(this).parent().find('.pt_vmegamenu').css("overflow", "visible");
                                });
                            });

                        </script>

                    </div>

                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class=" pos_bannerslide">
                            <div class="pos_slideshow">
                                <div id="sequence-theme">
                                    <div id="sequence">
                                        <ul class="sequence-canvas">

                                            @foreach ($slide as $item)
                                            <li class="animate-in" id="kind_effect1" >
                                                <img class="slider-bg" src='{{asset("uploads/$item->images")}}'
                                                     alt="{{$item->alt}}"/>
                                            </li>
                                            @endforeach


                                            
                                        </ul>

                                        <ul class="sequence-pagination">

                                            <li><a href="javascript:void(0)">1 </a></li>

                                            <li><a href="javascript:void(0)">2 </a></li>


                                        </ul>


                                    </div>
                                </div>

                                <script type="text/javascript">

                                    //<![CDATA[
                                    $(document).ready(function () {

                                        var options = {
                                            autoPlay: true, // auto change slides
                                            autoPlayDelay: 6000,
                                            pauseOnHover: false,
                                            hidePreloaderDelay: 500,
                                            nextButton: true,
                                            prevButton: true,
                                            pauseButton: true,
                                            preloader: true,
                                            pagination: true,
                                            hidePreloaderUsingCSS: false,
                                            animateStartingFrameIn: true,
                                            navigationSkipThreshold: 750,
                                            preventDelayWhenReversingAnimations: true,
                                            customKeyEvents: {
                                                80: "pause"
                                            }
                                        };

                                        var sequence = $("#sequence").sequence(options).data("sequence");


                                    });
                                    //]]>

                                </script>
                            </div>

                        </div>
                    </div><!--slide-->

                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="banner-static">

                            <div class="">
                                <div class="box-inner"><iframe width="100%" height="100%" src="https://www.youtube.com/embed/{{$setting['video_promotion']}}" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>


                            <div class="banner-box banner-box2">
                                <div class="box-inner"><a href=""><img
                                        src='{{asset("uploads/$setting[logo]")}}' alt="" style='height: 207px' ></a>
                                </div>
                            </div>

                        </div>

                    </div><!--  -->

                </div>
            </div>
        </div>

    
