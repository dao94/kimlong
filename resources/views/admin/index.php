<!DOCTYPE html>
<html ng-app="idsCore" controller="mainCtrl">
    <head>
		<meta charset="UTF-8">
		<title update-title></title>
		<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="<?php echo csrf_token(); ?>" />
        <!-- favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
        
	   <!-- bootstrap framework -->
		<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">

	   <!-- icon sets -->
		<!-- elegant icons -->
			<link href="assets/icons/elegant/style.css" rel="stylesheet" media="screen">
		<!-- elusive icons -->
			<link href="assets/icons/elusive/css/elusive-webfont.css" rel="stylesheet" media="screen">
		<!-- flags -->
			<link rel="stylesheet" href="assets/icons/flags/flags.css">

	<!-- google webfonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans&subset=latin,latin-ext' rel='stylesheet' media="screen">
    <!-- source code pro google fonts -->
        <link href="http://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet" media="screen">

    <!-- jQuery -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- smart resize -->
        <script src="assets/js/jquery.smartresize.min.js"></script>
    <!-- angularjs -->
        <script src="assets/angular/angularjs/angular.min.js"></script>
        <script src="assets/angular/angularjs/angular-animate.min.js"></script>
        <script src="assets/angular/angularjs/angular-cookies.min.js"></script>
        <script src="assets/angular/angularjs/angular-cookies.min.js"></script>
        <script src="assets/angular/angularjs/angular.treeview.js"></script>
        <script src="assets/angular/angularjs/angular-sanitize.min.js"></script>
        <script src="assets/angular/angularjs/angular-resource.min.js"></script>
    <!-- ui-router -->
    <!-- moment.js (date library) -->
        <script src="assets/js/angular-moment.js"></script>
    <!-- tree combobox -->
        <script src="assets/js/ng-nested-combobox.js"></script>
        <script src="assets/angular/plugins/ui-router/angular-ui-router.min.js"></script>
    <!-- breadcrumbs -->
        <script src="assets/angular/plugins/breadcrumbs/angular-breadcrumb.min.js"></script>

        <script src="assets/angular/plugins/angular-file-upload/angular-file-upload.js"></script>
    <!-- ui-bootstrap -->
        <script src="assets/angular/plugins/ui-bootstrap/ui-bootstrap-tpls-0.12.0.min.js"></script>
        <script id="template/accordion/accordion-group.html" type="text/ng-template">
            <div class="panel panel-default" ng-class="{'panel-active': isOpen}">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle" ng-click="toggleOpen()" accordion-transclude="heading"><span ng-class="{'text-muted': isDisabled}">{{heading}}</span></a>
                    </h4>
                </div>
                <div class="panel-collapse" collapse="!isOpen">
                    <div class="panel-body" ng-transclude></div>
                </div>
            </div>
        </script>

        

        <link href="assets/angular/plugins/angular-growl/build/angular-growl.min.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="assets/lib/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

        <script src="assets/angular/plugins/retina/angular-retina.min.js"></script>
        <script src="assets/angular/plugins/angular-growl/build/angular-growl.min.js"></script>
        <script src="assets/lib/switchery/dist/switchery.min.js"></script>
        <script src="assets/angular/plugins/switchery/ng-switchery.js"></script>
        <script src="assets/js/fastclick.min.js"></script>
        <script src="assets/lib/jquery-match-height/jquery.matchHeight-min.js"></script>
        <script src="assets/lib/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>

        <script src="assets/angular/plugins/textAngular/dist/textAngular-sanitize.min.js"></script>
        <script src="assets/angular/plugins/textAngular/dist/textAngular.min.js"></script>

        <!-- yukonApp -->
        <script src="assets/angular/app.js"></script>
        <script src="assets/angular/factory.js"></script>
        <script src="assets/angular/service.js"></script>
        <script src="assets/angular/directive.js"></script>
        <script src="assets/angular/state.js"></script>
        <script src='assets/angular/app/services/restful.service.js'></script>

        <!-- edit xeditable -->
        <script src="assets/js/xeditable.js"></script>
        <!-- ui-bootstrap-tpls -->
    
        <script src="assets/angular/controller.js"></script>
        <script src="assets/angular/app/controllers/common.js"></script>
        <script src='assets/angular/app/controllers/product.list.controller.js'></script>
        <script src='assets/angular/app/controllers/news.list.controller.js'></script>
        <script src='assets/angular/app/controllers/group_news.list.controller.js'></script>
        <script src='assets/angular/app/controllers/category.list.controller.js'></script>
        <script src='assets/angular/app/controllers/partner.list.controller.js'></script>
        <script src='assets/angular/app/controllers/album.list.controller.js'></script>
        <script src='assets/angular/app/controllers/images.list.controller.js'></script>
        <script src='assets/angular/app/controllers/slide.list.controller.js'></script>
        <script src='assets/angular/app/controllers/support.list.controller.js'></script>
        <script src='assets/angular/app/controllers/introduction.list.controller.js'></script>
        <script src='assets/angular/app/controllers/settings.controller.js'></script>
    <!-- google maps api-->
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>

    <!-- main stylesheet -->
        <link rel="stylesheet" type="text/css" href="assets/css/angular.treeview.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<link href="assets/css/main.min.css" rel="stylesheet" media="screen" id="mainCss">
        <link href="assets/css/animation.css" rel="stylesheet" media="screen" id="mainCss">
        <!-- edit xeditable -->
        <link href="assets/css/xeditable.css" rel="stylesheet" media="screen" id="mainCss">
        <link href="assets/css/nestedCombobox.css" rel="stylesheet" media="screen" id="mainCss">
        <link href="assets/css/animation.css" rel="stylesheet" media="screen" id="mainCss">

    </head>
    <body class="{{siteBg}}" ng-class="{
        'side_menu_active' : sideMenuAct && !$state.includes('error.404'),
        'side_menu_collapsed' : sideNavCollapsed && sideMenuAct,
        'side_menu_expanded' :  !sideNavCollapsed && sideMenuAct,
        'login_page': $state.is('login'),
        'login_page2': $state.is('login2'),
        'error_page': $state.includes('error.404'),
        'fixed_layout': fixedLayout && !$state.includes('error.404') && !$state.is('login') && !$state.is('login2'),
        'hide_breadcrumbs': hideBreadcrumbs && !$state.includes('error.404'),
        'top_menu_active': topMenuAct && !$state.includes('error.404')
    }">
        <div growl></div>
        <div ui-view autoscroll="false" class="mainView-animate"></div>
        <div page-loader></div>

    </body>
</html>
