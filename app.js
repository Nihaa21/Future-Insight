// ------navbarscroll----------
$(function () {
    $(window).on('scroll', function () {
        if ( $(window).scrollTop() > 10 ) {
            $('.navbar').addClass('active');
        } else {
            $('.navbar').removeClass('active');
        }
    });
});



$("[data-trigger]").on("click", function(){
    var trigger_id =  $(this).attr('data-trigger');
    $(trigger_id).toggleClass("show");
    $('body').toggleClass("offcanvas-active");
});

// close button
$(".btn-close").click(function(e){
    $(".navbar-collapse").removeClass("show");
    $("body").removeClass("offcanvas-active");
});




// --------pre-load imges-------
var img= new Array();
function preload(){
  for(i=0; i<preload.arguments.length; i++){
  img[i]= new Image();
  img[i].src=preload.arguments[i];
  }
}
preload("images/one.png","images/doctor.jpg","images/primary.jpg","images/corona5.jpg");
new WOW().init();

// ----------carousel-------------
$(function(){
  $("#customers-testimonial").owlCarousel({
    responsive:false,
    items:1,
    autoplay:true,
    loop:true,
    smartSpeed:700,
    autoplayTimeout:1000,
    autoPlayHoverPause:true

  });
});

$('.play').on('click',function(){
    $("#customers-testimonial").trigger('play.owl.autoplay',[1000])
})
$('.stop').on('click',function(){
    $("#customers-testimonial").trigger('stop.owl.autoplay')
})
