$(window).on("scroll",(function(){$(this).scrollTop()>50?$(".header-part").addClass("active"):$(".header-part").removeClass("active")})),$(document).ready((function(){$(".select").niceSelect()})),jQuery(document).on("ready",(function(){var e=$(".faq-ans").hide();$(".faq-que").on("click",(function(){var t=$(this);e.slideUp(),t.next().slideDown()}))})),$(".faq-que").on("click",(function(){$(".faq-que").removeClass("active"),$(this).addClass("active")})),$("li").on("click",(function(e){window.matchMedia("(max-width: 1199px)").matches&&($(this).children("ul").toggle(),$(this).siblings("li").find("ul").hide(),e.stopPropagation())})),$(".header-menu").on("click",(function(){$("body").css("overflow","hidden"),$(".nav-sidebar").addClass("active"),$(".nav-close").on("click",(function(){$("body").css("overflow","inherit"),$(".nav-sidebar").removeClass("active"),$(".backdrop").fadeOut()}))})),$(".header-menu").on("click",(function(){$(".backdrop").fadeIn(),$(".backdrop").on("click",(function(){$(this).fadeOut(),$("body").css("overflow","inherit"),$(".nav-sidebar").removeClass("active")}))})),$(".compare-content").slice(0,3).show(),$(".compare-content:hidden").css("opacity",0),$(".compare-btn").on("click",(function(e){$(".compare-content:hidden").slice(0,1).slideDown("slow").animate({opacity:1},{queue:!1,duration:"slow"}),0==$(".compare-content:hidden").length&&$(".compare-btn").fadeOut("slow"),e.preventDefault()})),$(".quantity-plus").on("click",(function(){var e=$(this).closest(".product-quantity").children(".quantity-input").get(0).value++,t=$(this).closest(".product-quantity").children(".quantity-minus");e>0&&t.removeAttr("disabled")})),$(".quantity-minus").on("click",(function(){2==$(this).closest(".product-quantity").children(".quantity-input").get(0).value--&&$(this).attr("disabled","disabled")}));