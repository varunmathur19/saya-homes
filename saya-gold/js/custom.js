$(document).ready(function () {

    $('.scroll').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
        && location.hostname == this.hostname) {
          var $target = $(this.hash);
          $target = $target.length && $target
          || $('[name=' + this.hash.slice(1) +']');
          if ($target.length) {
            var targetOffset = $target.offset().top - 80;
            $('html,body')
            .animate({scrollTop: targetOffset}, 1000);
           return false;
          }
        }
      });
      
      
      
$('nav .nav-item a, .top_head li a').click(function(e){
  e.preventDefault();
  var target = $($(this).attr('href'));
  if(target.length){
    var scrollTo = target.offset().top -50;
    $('body, html').animate({scrollTop: scrollTo+'px'}, 500);
  }
});



      
	$('.customers-slide').slick({
	  dots: false,
	  infinite: true,
	  loop:true,
	  speed: 1500,
	  slidesToShow: 2,
	  slidesToScroll:1,
	  pauseOnHover: false,
	  autoplay:true,
	  prevArrow: '<span class="product-showcase-carousel-controls product-showcase-carousel-controls--left nittext-btn"><img src="images/arrow.svg" alt="Saya Homes Arrow"></span>',
      nextArrow: '<span class="product-showcase-carousel-controls product-showcase-carousel-controls--right nittext-btn"><img src="images/arrow.svg" alt="Saya Homes Arrow"></span>',

	  responsive: [
		{
		  breakpoint:600,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1
		  }
		}
	  ],

	});
	
	
	
	$('.pro_slide').slick({
	  dots: false,
	  infinite: true,
	  loop:true,
	  speed: 1500,
	  slidesToShow: 2,
	  slidesToScroll:1,
	  pauseOnHover: false,
	  autoplay:true,
	  prevArrow: '<span class="product-showcase-carousel-controls product-showcase-carousel-controls--left nittext-btn"><img src="images/arrow.svg" alt="Saya Homes Arrow"></span>',
      nextArrow: '<span class="product-showcase-carousel-controls product-showcase-carousel-controls--right nittext-btn"><img src="images/arrow.svg" alt="Saya Homes Arrow"></span>',

	  responsive: [
		{
		  breakpoint:600,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1
		  }
		}
	  ],

	});


	$('.highligts-slides').slick({
		dots: false,
		infinite: true,
		loop:true,
		speed: 1500,
		slidesToShow:3,
		slidesToScroll:1,
		pauseOnHover: false,
		autoplay:true,
		prevArrow: '<span class="product-showcase-carousel-controls product-showcase-carousel-controls--left nittext-btn"><img src="images/arrow.svg" alt="Saya Homes Arrow"></span>',
		nextArrow: '<span class="product-showcase-carousel-controls product-showcase-carousel-controls--right nittext-btn"><img src="images/arrow.svg" alt="Saya Homes Arrow"></span>',
  
		responsive: [
		  {
			breakpoint:991,
			settings: {
			  slidesToShow: 2,
			}
		  },
		  {
			breakpoint:767,
			settings: {
			  slidesToShow: 1,
			}
		  }
		],
  
	  });
	  
	  
	  
	 
     $(".sp_img").slick({
        dots: false,
        infinite: true,
        arrows:false,
        loop:false,
        speed: 1500,
        autoplay: 3000,
        slidesToShow:1,
        slidesToScroll: 1,
        pauseOnHover: false,
        autoplay: true,
        
		 
		 responsive: [{
      breakpoint: 768,
      settings: {
        slidesToShow: 1
      }
    }, {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
          
      }
    }]
        
    });
    
   
    
    
     $(".sp_cont").slick({
        dots: false,
        infinite: true,
        loop:false,
        speed: 1500,
        autoplay: 3000,
        slidesToShow:1,
        slidesToScroll: 1,
        pauseOnHover: false,
        autoplay: true,
        prevArrow: '<span class="product-showcase-carousel-controls product-showcase-carousel-controls--left nittext-btn"><img src="images/arrow.svg" alt="Saya Homes Arrow"></span>',
		nextArrow: '<span class="product-showcase-carousel-controls product-showcase-carousel-controls--right nittext-btn"><img src="images/arrow.svg" alt="Saya Homes Arrow"></span>',
        asNavFor: '.sp_img',
        
       
      
		 
		 responsive: [{
      breakpoint: 768,
      settings: {
        slidesToShow: 1
      }
    }, {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
          
      }
    }]
        
    });
    
  


	  $('.location-slider').slick({
		dots: true,
		infinite: true,
		loop:true,
		speed: 1500,
		slidesToShow:1,
		slidesToScroll:1,
		pauseOnHover: false,
		autoplay:true,
		arrows:false,  
		responsive: [
		  {
			breakpoint:600,
			settings: {
			  slidesToShow: 1,
			  slidesToScroll: 1
			}
		  }
		],
  
	  });

    $('.gallerywrapper').slick({
	  dots: false,
	  infinite: true,
	  loop:true,
	  speed: 1500,
	  slidesToShow: 3,
	  slidesToScroll:1,
	  pauseOnHover: false,
	  autoplay:true,
	  prevArrow: '<span class="product-showcase-carousel-controls product-showcase-carousel-controls--left nittext-btn"><img src="images/arrow.svg" alt="Saya Homes Arrow"></span>',
      nextArrow: '<span class="product-showcase-carousel-controls product-showcase-carousel-controls--right nittext-btn"><img src="images/arrow.svg" alt="Saya Homes Arrow"></span>',

	  responsive: [
	    {
		  breakpoint:1000,
		  settings: {
			slidesToShow: 2,
			slidesToScroll: 1
		  }
		},
		{
		  breakpoint:600,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1
		  }
		}
	  ],

	});
	

	$('.sayahomes').parent().click(function () {
		if($(this).children(".sayahomes").get(0).paused){ 
			$(this).children(".sayahomes").get(0).play(); 
			$(this).children(".playpause").fadeOut();
		  }else{
			$(this).children(".sayahomes").get(0).pause();
			$(this).children(".playpause").fadeIn();
		  }
	  });

 if ($(window).width() > 990 ) {
	  $(window).scroll(function() {
		if ($(this).scrollTop() > 1){  
			$('nav').addClass("saya_nav");
		  }
		  else{
			$('nav').removeClass("saya_nav");
		  }
		});
	}


	

wow = new WOW({
	boxClass: "wow", // default
	animateClass: "animated", // default
	offset: 0, // default
	mobile: true, // default
	live: true, // default
});
wow.init()

if ($(window).width() < 991) {
	$("span.navbar-toggler-icon").click(function () {
		$(this).toggleClass("cross");
	});
}




$('.nav-link, .mega-menu').mouseover(function(){
	$("body").addClass("navigation_blacks");
 }).mouseout(function(){
	$("body").removeClass("navigation_blacks");
 });
 
});

 if ($(window).width() < 990 ) {
     
     $('.navbar-nav .nav-item a').click(function(){ 
         
         $('.navbar-collapse').removeClass('show');
         $('.navbar-toggler-icon').removeClass('cross')
     })
     
 }



$(window).on('load', function(){
  "use strict";
  $('.js_wiper').wipeSlider({
    transition : 500,
    duration : 2000,
    auto : false,
    pager : false,
        controls : true,
        variable: true,
    loop: false
  });
  
  $('.js_wiper2').wipeSlider({
    transition : 500,
    duration : 2000,
    auto : false,
    pager : false,
        controls : true,
        variable: true,
    loop: false
  });
  
  $('.js_wiper3').wipeSlider({
    transition : 500,
    duration : 2000,
    auto : false,
    pager : false,
        controls : true,
        variable: true,
    loop: false
  });
  
  $('.galArrowLeft').click(function(){
    $('.wrapper1 .prevBtn').click();
    $('.wrapper2 .prevBtn').click();
    $('.wrapper3 .prevBtn').click();
    var activeTxt = $('.wrapper1 .myslide.active img').attr('data-text');
  
  $('.frame3 .txtMs').html(activeTxt);
  });
  
  $('.galArrowRight').click(function(){
    $('.wrapper1 .nextBtn').click();
    $('.wrapper2 .nextBtn').click();
    $('.wrapper3 .nextBtn').click();
    var activeTxt = $('.wrapper1 .myslide.active img').attr('data-text');
  
  $('.frame3 .txtMs').html(activeTxt);
  });
  
  
$(".select2_country").select2({
        placeholder: 'Country',
         ajax: {
          url: "../ajax/load-country.php",
          type: "post",
          dataType: 'json',
          delay: 250,
          data: function (params) {
              return {
                searchTerm: params.term // search term
              };
          },
          processResults: function (response) {
              return {
                 results: response
              };
          },
          cache: true
         }
    });
    
    $(".select2_country_state").select2({
        placeholder: "State",
        ajax: {
            url: "../ajax/load-state.php",
            type: "post",
            dataType: "json",
            delay: 250,
            data: function(e) {
                return {
                    searchTerm: e.term,
                    country_id: $('#country_selected').val()
                }
            },
            processResults: function(e) {
                return {
                    results: e
                }
            },
            cache: !0
        }
    }), $(".select2_country_city").select2({
        placeholder: "City",
        ajax: {
            url: "../ajax/load-city.php",
            type: "post",
            dataType: "json",
            delay: 250,
            data: function(e) {
                return {
                    searchTerm: e.term,
                    state_id: $('#state_selected').val()
                }
            },
            processResults: function(e) {
                return {
                    results: e
                }
            },
            cache: !0
        }
    }), 
    
    $('.select2_country').on("select2:select", function(e) { 
        $('#country_selected').val($(e.currentTarget).val())
    }),
    
    $('.select2_country_state').on("select2:select", function(e) { 
        $('#state_selected').val($(e.currentTarget).val())
    }),
    
    $(".select2_country_code").select2({
        placeholder: 'Country',
         ajax: {
          url: "../ajax/load-country.php?type=code",
          type: "post",
          dataType: 'json',
          delay: 250,
          data: function (params) {
              return {
                searchTerm: params.term // search term
              };
          },
          processResults: function (response) {
              return {
                 results: response
              };
          },
          cache: true
         }
    });
    
    
    
$.validator.addMethod("customname", 
    function(value, element) {
        return /^[a-zA-Z ]*$/.test(value);
    }, 
    "Please enter valid Name"
);

$.validator.addMethod("restrictchar", 
    function(value, element) {
        return /^[a-zA-Z0-9.&,-]*$/.test(value);
    }, 
    "Please enter valid message"
);

$.validator.addMethod("customemail", 
    function(value, element) {
        return /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(value);
    }, 
    "Please enter valid email"
);

$.validator.addMethod("customphone", 
    function(value, element) {
        return /^\d{10}$/.test(value);
    }, 
    "Please enter 10 digit mobile number"
);


$.validator.addMethod('customspace', 
function(value, element) {
    return $.validator.methods.required.call(this, $.trim(value), element);
}, $.validator.messages.required);


 $("form[data-form-validate='true']").each(function() {
     var $this = $(this);
     $(this).validate({
          ignore: ".ignore",
          rules:{
            name :{ required : true, customspace: true, customname:true},
            mobile :{ required : true ,customphone:true},
            email : { required : true,customemail:true },
            country :{ required : true},
            city :{ required : true},
            message : { required : true, restrictchar: true },
            hiddenRecaptcha1 : { required : true },
            hiddenRecaptcha2 : { required : true },
        },
        messages:{
            name :{ required : "This field is required" ,customname:"Please enter valid name."},
		    mobile :{ required : "This field is required", customphone: "Please enter 10 digit mobile number." },
            email : { required : "This field is required", customemail : "Please enter valid email." },
            country: {required : "This field is required"},
            city: {required : "This field is required"},
            hiddenRecaptcha1:{required : "This field is required"},
            hiddenRecaptcha2:{required : "This field is required"},
            message: {required : "This field is required"}
        },
        submitHandler: function(form, event) {
            event.preventDefault();
            
            var $elem = $this.find('.btns').prop('disabled', true);
            
            var $form = $this[0];

            $.ajax({
                url: '../submit.php?type=saya-gold',
                type: 'POST',
                data : new FormData($form),
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function () {
    	            $this.find('.btns').prop('disabled', true).html("Processing...");
    	        },
                success: function(data){
                        $("#enquire").trigger("reset");
                        grecaptcha.reset();
                       // window.location = "thank-you.php";
                        $this.find('.btns').prop('disabled', false);
                }
            });
        },
     });

   });

  
  
});





