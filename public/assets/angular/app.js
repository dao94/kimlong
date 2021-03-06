"use strict";

var base_url = 'http://localhost:8000/api/v1/';

var idsCore = angular.module('idsCore', 

    [ 

        'ui.router', 

        'ui.nested.combobox',

        'ngAnimate', 

        'ui.load', 

        'ngSanitize', 

        'ngResource', 

        'ngCookies', 

        'ui.bootstrap', 

        'ncy-angular-breadcrumb', 

        'ngRetina', 

        'angular-growl', 

        'NgSwitchery', 

        'textAngular',

        'xeditable',

        'angularFileUpload',

        'angularTreeview',

        

    ]

);



// format price

function format_price(n, currency) {

    return n.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,") + " " + currency;

}



var csrftoken =  (function() {

    // not need Jquery for doing that

    var metas = window.document.getElementsByTagName('meta');



    // finding one has csrf token 

    for(var i=0 ; i < metas.length ; i++) {



        if ( metas[i].name === "csrf-token") {



            return  metas[i].content;       

        }

    }  



})();



// adding constant into our app



idsCore.constant('CSRF_TOKEN', csrftoken); 



/* Run Block */

idsCore.run(

    [ '$rootScope', '$state', '$stateParams',

        function ($rootScope, $state, $stateParams) {



            $rootScope.$state = $state;

            $rootScope.$stateParams = $stateParams;



            $rootScope.$on('$stateChangeSuccess', function () {

                // scroll view to top

                $("html, body").animate({ scrollTop: 0 }, 200);

                // fastclick (eliminate the 300ms delay between a physical tap and the firing of a click event on mobile browsers)

                FastClick.attach(document.body);

            });



            $rootScope.$on('$stateChangeStart', function () {

                // remove datatables fixedHeader from DOM

                if($(".FixedHeader_Cloned").length) {

                    $(".FixedHeader_Cloned").remove();

                }

                // remove daterangepicker element from DOM

                if($(".daterangepicker").length) {

                    $(".daterangepicker").remove();

                }

                // remove autosize element from DOM

                if($("#autosizejs").length) {

                    $("#autosizejs").remove();

                }

                // remove select2-hidden-accessible

                if($(".select2-hidden-accessible").length) {

                    $('.select2-hidden-accessible').remove();

                }

            });



            $rootScope.isTouchDevice = !!('ontouchstart' in window);

            $rootScope.isHighDensity = function () {

                return ((window.matchMedia && (window.matchMedia('only screen and (min-resolution: 124dpi), only screen and (min-resolution: 1.3dppx), only screen and (min-resolution: 48.8dpcm)').matches || window.matchMedia('only screen and (-webkit-min-device-pixel-ratio: 1.3), only screen and (-o-min-device-pixel-ratio: 2.6/2), only screen and (min--moz-device-pixel-ratio: 1.3), only screen and (min-device-pixel-ratio: 1.3)').matches)) || (window.devicePixelRatio && window.devicePixelRatio > 1.3));

            }



            $rootScope.appVer = 'v0.1';



            // main menu

            $rootScope.sideMenuAct = true;

            $rootScope.topMenuAct = !$rootScope.sideMenuAct;

            

        }

    ]

);



idsCore

    /* Breadcrumbs options */

    .config(function($breadcrumbProvider) {

        $breadcrumbProvider.setOptions({

            prefixStateName: 'auth.home',

            templateUrl: 'views/partials/breadcrumbs.html'

        });

    })

    /* bootstrap-ui tooltips */

    .config(function($tooltipProvider ) {

        $tooltipProvider.options({

            appendToBody: true

        });

    })

    .config([

        'growlProvider',

        '$httpProvider',

        function (growlProvider, $httpProvider) {

            growlProvider.globalReversedOrder(true);

            growlProvider.globalDisableIcons(true);

            growlProvider.globalTimeToLive(5000);

            $httpProvider.interceptors.push(growlProvider.serverMessagesInterceptor);

        }

    ])

    .config(['$httpProvider', 'CSRF_TOKEN',

        function($httpProvider, CSRF_TOKEN) {

            /**

             * adds CSRF token to header

             */

            $httpProvider.defaults.headers.common['X-CSRF-TOKEN'] = CSRF_TOKEN;

        }

     ]);





/* filters */

idsCore

    // https://github.com/angular-ui/ui-utils

    .filter('unique', ['$parse', function ($parse) {

        return function (items, filterOn) {

            if (filterOn === false) {

                return items;

            }

            if ((filterOn || angular.isUndefined(filterOn)) && angular.isArray(items)) {

                var newItems = [],

                    get = angular.isString(filterOn) ? $parse(filterOn) : function (item) {

                        return item;

                    };

                var extractValueToCompare = function (item) {

                    return angular.isObject(item) ? get(item) : item;

                };

                angular.forEach(items, function (item) {

                    var isDuplicate = false;

                    for (var i = 0; i < newItems.length; i++) {

                        if (angular.equals(extractValueToCompare(newItems[i]), extractValueToCompare(item))) {

                            isDuplicate = true;

                            break;

                        }

                    }

                    if (!isDuplicate) {

                        newItems.push(item);

                    }

                });

                items = newItems;

            }

            return items;

        };

    }])