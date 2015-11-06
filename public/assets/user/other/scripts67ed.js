$(document).ready(function(){
	$('.ajax_add_to_cart').click(function(){
		var quantity = quantity || 1;
		var variant_id = $(this).attr('data-variant');
		var params = {
			type: 'POST',
			url: '/cart/add.js',
			data: 'quantity=' + quantity + '&id=' + variant_id,
			dataType: 'json',
			success: function(line_item) {
				$('#view-cart > div:not(#clone-item,.text-mini-cart,.cart-check-mini)').remove();
				getCartView();
				Haravan.onItemAdded(line_item);
				$('#cart-modal').modal('show');
			},
			error: function(XMLHttpRequest, textStatus) {
				Haravan.onError(XMLHttpRequest, textStatus);
			}
		};
		jQuery.ajax(params);
	});
	$('#quick-shop-add').click(function(e){
		if (typeof e !== 'undefined') e.preventDefault();
		var $this = $(this);
		var form = $this.parents('form');
		$.ajax({
			type: 'POST',
			url: '/cart/add.js',
			data: form.serialize(),
			dataType: 'json',
			success:function(line_item) {
				$('#view-cart > div:not(#clone-item,.text-mini-cart,.cart-check-mini)').remove();
				getCartView();
				Haravan.onItemAdded(line_item);
				$('#cart-modal').modal('show');
			},
			error: function(XMLHttpRequest, textStatus) {
				Haravan.onError(XMLHttpRequest, textStatus);
			}


		});
		// Hide Modal
		$('#quick-view-modal').modal('hide');
	});
});
$(document).ready(function(){
	Haravan.onItemAdded = function(line_item) {
		console.log(line_item);
		var cart = null;

		jQuery.getJSON('/cart.js', function(cart, textStatus) {
			if(cart)
			{
				var total_line = 0;
				var total_line = line_item.quantity * line_item.price;
				if(line_item.image != null)
					$('.layer_cart_img').html("<img src=" + Haravan.resizeImage(line_item.image,'medium') + ">");
				else
					$('.layer_cart_img').html("<img src='//hstatic.net/0/0/global/noDefaultImage6_large.gif'>");
				vt = line_item.variant_options;
				if(vt.indexOf('Default Title') != -1)
					vt = '';
				$('.item-title a').html(line_item.product_title + '<br><span>' + vt + '</span>').attr('href', line_item.url);
				$('.item-total').html(Haravan.formatMoney(cart.total_price, "")+"đ");	
				$('.item-price').html(Haravan.formatMoney(line_item.price, "")+"đ");
				$('.cart-count').html(cart.item_count);
				$('.layer_cart_img').attr('href', line_item.url);
				$('.item-quantity').html('<strong>Số lượng:</strong>'+line_item.quantity);
			}
		})


	}
});
$(document).ready(function(){

	function addItem(form_id) {
		$.ajax({
			type: 'POST',
			url: '/cart/add.js',
			dataType: 'json',
			data: $('#'+form_id).serialize(),
			success: Haravan.onSuccess,
			error: Haravan.onError
		});
	}

	$(".addtocart").click(function(e){

		var elem = $(this)
		$(elem).prop("disabled", true)

		e.preventDefault();
		addItem('add-item-form');

	});

	Haravan.onSuccess = function() {

		var elem = $('.addtocart');

		elem.removeAttr("disabled");

		var quantity = parseInt(jQuery('[name="quantity"]').val(), 10) || 1;
		$(elem).prop("disabled", false)
		var cartCount =  parseInt($('#cart-count').text()) + quantity;
		$('#cart-count').text(cartCount)
		getCartAjax();
		$('#myCart').modal('show');
		$('.modal-backdrop').css({'height':$(document).height(),'z-index':'99'});
	};

	Haravan.onError = function(XMLHttpRequest, textStatus) {
		// Haravan returns a description of the error in XMLHttpRequest.responseText.
		// It is JSON.
		// Example: {"description":"The product 'Amelia - Small' is already sold out.","status":500,"message":"Cart Error"}
		var data = eval('(' + XMLHttpRequest.responseText + ')');
		if (!!data.message) {
			alert(data.message + '(' + data.status  + '): ' + data.description);
		} else {
			alert('Error : ' + Haravan.fullMessagesFromErrors(data).join('; ') + '.');
		}

		$('.addtocart').removeAttr("disabled");
	};

	Haravan.fullMessagesFromErrors = function(errors) {
		var fullMessages = [];
		jQuery.each(errors, function(attribute, messages) {
			jQuery.each(messages, function(index, message) {
				fullMessages.push(attribute + ' ' + message);
			});
		});
		return fullMessages;
	};

})

jQuery(document).ready(function(){

	if ( $('.slides li').size() > 1 ) {

		$('.flexslider').flexslider({
			animation: "slide",
			slideshow: true,
			animationDuration: 700,
			slideshowSpeed: 6000,
			animation: "fade",
			controlsContainer: ".flex-controls",
			controlNav: false,
			keyboardNav: true
		});
		//.hover(function(){ $('.flex-direction-nav').fadeIn();}, function(){$('.flex-direction-nav').fadeOut();});

	}

	$("select.loc_on_change").change(function(){
		if($(this).attr("value") == "#") return false;
		window.location = $(this).attr("value");
	});

	
	 });

	 jQuery(document).ready(function($){



		 $("nav.mobile select").change(function(){ window.location = jQuery(this).val(); });
		 $('#product .thumbs a').click(function(){
			 
			 $('#placeholder').attr('href', $(this).attr('href'));
				$('#placeholder img').attr('src', $(this).attr('data-original-image'))
				
				$('#zoom-image').attr('href', $(this).attr('href'));
				 return false;
				});

				$('input[type="submit"], input.btn, button').click(function(){ // remove ugly outline on input button click
					$(this).blur();
				})

				$("li.dropdown").hover(function(){
					$(this).children('.dropdown').show();
					$(this).children('.dropdown').stop();
					$(this).children('.dropdown').animate({
						opacity: 1.0
					}, 200);
				}, function(){
					$(this).children('.dropdown').stop();
					$(this).children('.dropdown').animate({
						opacity: 0.0
					}, 400, function(){
						$(this).hide();
					});
				});

			 }); // end document ready

			 /* jQuery css bezier animation support -- Jonah Fox */

			 ;(function($){

				 $.path = {};

				 var V = {
					 rotate: function(p, degrees) {
						 var radians = degrees * Math.PI / 180,
								 c = Math.cos(radians),
								 s = Math.sin(radians);
						 return [c*p[0] - s*p[1], s*p[0] + c*p[1]];
					 },
					 scale: function(p, n) {
						 return [n*p[0], n*p[1]];
					 },
					 add: function(a, b) {
						 return [a[0]+b[0], a[1]+b[1]];
					 },
					 minus: function(a, b) {
						 return [a[0]-b[0], a[1]-b[1]];
					 }
				 };

				 $.path.bezier = function( params, rotate ) {
					 params.start = $.extend( {angle: 0, length: 0.3333}, params.start );
					 params.end = $.extend( {angle: 0, length: 0.3333}, params.end );

					 this.p1 = [params.start.x, params.start.y];
					 this.p4 = [params.end.x, params.end.y];

					 var v14 = V.minus( this.p4, this.p1 ),
							 v12 = V.scale( v14, params.start.length ),
							 v41 = V.scale( v14, -1 ),
							 v43 = V.scale( v41, params.end.length );

					 v12 = V.rotate( v12, params.start.angle );
					 this.p2 = V.add( this.p1, v12 );

					 v43 = V.rotate(v43, params.end.angle );
					 this.p3 = V.add( this.p4, v43 );

					 this.f1 = function(t) { return (t*t*t); };
					 this.f2 = function(t) { return (3*t*t*(1-t)); };
					 this.f3 = function(t) { return (3*t*(1-t)*(1-t)); };
					 this.f4 = function(t) { return ((1-t)*(1-t)*(1-t)); };

					 /* p from 0 to 1 */
					 this.css = function(p) {
						 var f1 = this.f1(p), f2 = this.f2(p), f3 = this.f3(p), f4=this.f4(p), css = {};
						 if (rotate) {
							 css.prevX = this.x;
							 css.prevY = this.y;
						 }
						 css.x = this.x = ( this.p1[0]*f1 + this.p2[0]*f2 +this.p3[0]*f3 + this.p4[0]*f4 +.5 )|0;
						 css.y = this.y = ( this.p1[1]*f1 + this.p2[1]*f2 +this.p3[1]*f3 + this.p4[1]*f4 +.5 )|0;
						 css.left = css.x + "px";
						 css.top = css.y + "px";
						 return css;
					 };
				 };

				 $.path.arc = function(params, rotate) {
					 for ( var i in params ) {
						 this[i] = params[i];
					 }

					 this.dir = this.dir || 1;

					 while ( this.start > this.end && this.dir > 0 ) {
						 this.start -= 360;
					 }

					 while ( this.start < this.end && this.dir < 0 ) {
						 this.start += 360;
					 }

					 this.css = function(p) {
						 var a = ( this.start * (p ) + this.end * (1-(p )) ) * Math.PI / 180,
								 css = {};

						 if (rotate) {
							 css.prevX = this.x;
							 css.prevY = this.y;
						 }
						 css.x = this.x = ( Math.sin(a) * this.radius + this.center[0] +.5 )|0;
						 css.y = this.y = ( Math.cos(a) * this.radius + this.center[1] +.5 )|0;
						 css.left = css.x + "px";
						 css.top = css.y + "px";
						 return css;
					 };
				 };

				 $.fx.step.path = function(fx) {
					 var css = fx.end.css( 1 - fx.pos );
					 if ( css.prevX != null ) {
						 $.cssHooks.transform.set( fx.elem, "rotate(" + Math.atan2(css.prevY - css.y, css.prevX - css.x) + ")" );
					 }
					 fx.elem.style.top = css.top;
					 fx.elem.style.left = css.left;
				 };

			 })(jQuery);


			 function getCartAjax(){
				 var cart = null;
				 $('#cartform').hide();
				 $('#myCart #exampleModalLabel').text("Giỏ hàng");
				 jQuery.getJSON('/cart.js', function(cart, textStatus) {
					 if(cart)
					 {
						 $('#cartform').show();
						 $('.line-item:not(.original)').remove();
						 $.each(cart.items,function(i,item){
							 var total_line = 0;
							 var total_line = item.quantity * item.price;
							 tr = $('.original').clone().removeClass('original').appendTo('table#cart-table tbody');
							 if(item.image != null)
								 tr.find('.item-image').html("<img src=" + Haravan.resizeImage(item.image,'small') + ">");
							 else
								 tr.find('.item-image').html("<img src='//hstatic.net/0/0/global/noDefaultImage6_large.gif'>");
							 vt = item.variant_options;
							 if(vt.indexOf('Default Title') != -1)
								 vt = '';
							 tr.find('.item-title a').html(item.product_title + '<br><span>' + vt + '</span>').attr('href', item.url);
							 tr.find('.item-quantity').html("<input id='quantity1' name='updates[]' min='1' type='number' value=" + item.quantity + " class='' />");
							 tr.find('.item-price').html(Haravan.formatMoney(total_line, ""));
							 tr.find('.item-delete').html("<a href='#' onclick='deleteCart(" + item.variant_id + ")' >Xóa</a>");
						 });
						 $('.item-total').html(Haravan.formatMoney(cart.total_price, ""));
						 $('.modal-title b').html(cart.item_count);
						 $('*[id=cart-count]').html(cart.item_count);
						 if(cart.item_count == 0){
							 //$('#myCart button').attr('disabled', '');
							 $('#myCart #cartform').addClass('hidden');
							 $('#myCart #exampleModalLabel').html('Giỏ hàng của bạn đang trống. Mời bạn tiếp tục mua hàng.');
						 }
						 else{
							 $('#myCart #exampleModalLabel').html('Bạn có ' + cart.item_count + ' sản phẩm trong giỏ hàng.');
							 $('#myCart #cartform').removeClass('hidden');
							 $('#myCart button').removeAttr('disabled');
						 }

					 }
					 else{
						 $('#myCart #exampleModalLabel').html('Giỏ hàng của bạn đang trống. Mời bạn tiếp tục mua hàng.');
						 $('#cartform').hide();
					 }
				 });

			 }
			 $(document).ready(function(){
				 $('#cart-target a').click(function(event){
					 event.preventDefault() ;
					 getCartAjax();

					 $('#myCart').modal('show');
					 $('.modal-backdrop').css({'height':$(document).height(),'z-index':'99'});
				 });
				 $('a[data-spy=scroll]').click(function(){
					 event.preventDefault() ;
					 $('body').animate({scrollTop: ($($(this).attr('href')).offset().top - 20) + 'px'}, 500);
				 })

				 $('#update-cart-modal').click(function(event){
					 event.preventDefault();
					 if (jQuery('#cartform').serialize().length <= 5) return;
					 $(this).html('Đang cập nhật');
					 var params = {
						 type: 'POST',
						 url: '/cart/update.js',
						 data: jQuery('#cartform').serialize(),
						 dataType: 'json',
						 success: function(cart) {
							 if ((typeof callback) === 'function') {
								 callback(cart);
							 } else {

								 getCartAjax();
							 }

							 $('#update-cart-modal').html('Cập nhật');
						 },
						 error: function(XMLHttpRequest, textStatus) {
							 Haravan.onError(XMLHttpRequest, textStatus);
						 }
					 };
					 jQuery.ajax(params);
				 });
			 });

			 function deleteCart(variant_id){
				 var params = {
					 type: 'POST',
					 url: '/cart/change.js',
					 data: 'quantity=0&id=' + variant_id,
					 dataType: 'json',
					 success: function(cart) {
						 getCartAjax();
					 },
					 error: function(XMLHttpRequest, textStatus) {
						 Haravan.onError(XMLHttpRequest, textStatus);
					 }
				 };
				 jQuery.ajax(params);
			 }
			 $('#checkout').click(function(){
				 $('#cartform').submit();
			 })
			 // The following piece of code can be ignored.
			 $(function(){
				 $(window).resize(function() {
					 $('#info').text("Page width: "+$(this).width());
				 });
				 $(window).trigger('resize');
			 });
			 function bindGrid() {
				 var view = $.totalStorage('display');

				 if (!view && (typeof displayList != 'undefined') && displayList) view = 'list';

				 if (view && view != 'grid') display(view);
				 else $('.display').find('li#grid').addClass('selected');

				 $(document).on('click', '#grid', function(e) {
					 e.preventDefault();
					 display('grid');
				 });

				 $(document).on('click', '#list', function(e) {
					 e.preventDefault();
					 display('list');
				 });
			 }

			 function display(view) {
				 if (view == 'list') {
					 $('ul.product_list').removeClass('grid').addClass('list row');
					 $('.product_list > li').removeClass('col-xs-12 col-sm-6 col-md-4').addClass('col-xs-12');
					 $('.left-block').addClass('col-xs-4 col-xs-5 col-md-4');
					 $('.right-block').addClass('col-xs-8 col-sm-7 col-md-8');
					 $('.pr-0').removeClass('product-contents');
					 $('.pr-0').addClass('right-block-content row');
					 $('.product-desc').show();
					 $('.pr-q1').hide();
					 $('.display').find('li#list').addClass('selected');
					 $('.display').find('li#grid').removeAttr('class');
					 $.totalStorage('display', 'list');
				 } else {
					 $('ul.product_list').removeClass('list').addClass('grid row');
					 $('.product_list > li').removeClass('col-xs-12').addClass('col-xs-12 col-sm-6 col-md-4');
					 $('.left-block').removeClass('col-xs-4 col-xs-5 col-md-4');
					 $('.right-block').removeClass('col-xs-8 col-sm-7 col-md-8');
					 $('.pr-0').addClass('product-contents');
					 $('.pr-0').removeClass('right-block-content row');
					 $('.product-desc').hide();
					 $('.pr-q1').show();
					 $('.display').find('li#grid').addClass('selected');
					 $('.display').find('li#list').removeAttr('class');
					 $.totalStorage('display', 'grid');
				 }
				 $("[data-toggle='tooltip']").tooltip();
			 }
			 //tab home --home-tab-product
			 $(document).ready(function() {
				 var owl = $(".productTabContent");
				 owl.owlCarousel({
					 items :4,
					 slideSpeed: 1000,
					 pagination :false,
					 itemsDesktop : [1199,4],
					 itemsDesktopSmall : [991,3],
					 itemsTablet: [767,2],
					 itemsMobile : [480,1]
				 });
				 $(".nexttabslider").click(function(){
					 owl.trigger('owl.next');
				 })
				 $(".prevtabslider").click(function(){
					 owl.trigger('owl.prev');
				 })  
			 });
			 //home-product-1
			 $(document).ready(function() {
				 var owl = $(".featureSlide");
				 owl.owlCarousel({
					 items : 4,
					 slideSpeed: 1000,
					 pagination :false,
					 itemsDesktop : [1199,4],
					 itemsDesktopSmall : [991,3], 
					 itemsTablet: [767,2], 
					 itemsMobile : [480,1],
					 autoPlay :  false,
				 });

				 // Custom Navigation Events
				 $(".nextfure").click(function(){
					 owl.trigger('owl.next');
				 })
				 $(".prevfure").click(function(){
					 owl.trigger('owl.prev');
				 })     


				 var owl2 = $(".featureSlide2");
				 owl2.owlCarousel({
					 items : 4,
					 slideSpeed: 1000,
					 pagination :false,
					 itemsDesktop : [1199,4],
					 itemsDesktopSmall : [991,3], 
					 itemsTablet: [767,2], 
					 itemsMobile : [480,1],
					 autoPlay :  false,
				 });

				 // Custom Navigation Events
				 $(".nextfure2").click(function(){
					 owl2.trigger('owl.next');
				 })
				 $(".prevfure2").click(function(){
					 owl2.trigger('owl.prev');
				 })     
			 });
			 // home-product-2
			 $(document).ready(function() {
				 var owl = $(".Topsellers");
				 owl.owlCarousel({
					 items :1,
					 slideSpeed: 1000,
					 pagination :false,
					 itemsDesktop : [1200,1],
					 itemsDesktopSmall : [1024,1],
					 itemsTablet: [768,1],
					 itemsMobile : [480,1]
				 });
				 $(".nextsellers").click(function(){
					 owl.trigger('owl.next');
				 })
				 $(".prevsellers").click(function(){
					 owl.trigger('owl.prev');
				 })  
			 });