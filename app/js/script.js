 $(document).ready(function(){
    $('#main-slider').slick({
        slidesToShow: 1,
        autoplay:true,
        autoplaySpeed:5000,
        adaptiveHeight: true,
        infinity:true,
        fade:true,
    });
    var but_text =[
        {text:'заказать сайт', href:'price/site'},
        {text:'продвижение сайта', href:'price'},
        {text:'подробнее', href:'price'}
    ];
    $('#main-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
        $("#mainSlider-but").fadeOut(0,"linear",function() {
            var currSlide = $('#main-slider').slick('slickCurrentSlide');
            if (currSlide == 2) {
                currSlide = -1;
            }
            $('#mainSlider-but').attr('href',but_text[currSlide+1].href).text(but_text[currSlide+1].text);
        }).fadeIn(300,'linear');
    });
    
    var slide_m = ($(window).width()-4*170)/3;
    $('.marquee').bxSlider({
        minSlides: 1,
        maxSlides: 4,
        slideWidth: 170,
        slideMargin: 115,
        ticker: true,
        speed: 15000
      });
    new WOW().init();
    $(".scroll").on("click", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top-$('.navbar-default').height();
        $('body,html').animate({scrollTop: top}, 1500);
    }); 
    $("form").submit(function() {
        var form = $(this); 
        $.ajax({
            type: "POST",
            url: "mail.php",
            data: form.serialize(),
            success:function(){
                form.trigger('reset');
            }
        });
        return false;
    });
    $('#dropdownMenu').hover(function(){},function(){});
    $(window).scroll(function(){
        if ($(window).scrollTop() > $('header').height()+30-$('.navbar-default').height()) {
            if(!$('.navbar-default').hasClass('fixed'))
                $('.navbar-default').addClass('fixed z-depth-2').fadeIn();
        }
        else if($(window).scrollTop() <= $('header').height()+30+$('.navbar-default').height()) {
            $('.navbar-default').removeClass('fixed z-depth-2')
        }
    });

});
 $(window).on('load', function(){
    function EquateCols2(section,block){
        $(section).each(function(){
            var right = $(this).find('.col-right');
            var left = $(this).find('.col-left');
            if (block){
                right = right.find(block);
                left = left.find(block);
            }
            if (right.height() > left.height()){
                left.height(right.height());
            }
            else{
                right.height(left.height());
            } 
           // .height(.height());
        });
    }
    function EquateCols(section){
        var maxh = 0;
        $(section).each(function(){
            var h = $(this).height();
            if (h > maxh){
                maxh = h;
            }
        });
        $(section).each(function(){
            $(this).height(maxh);
        });
    }
    if ($(window).width()>991) {
        EquateCols2("#main_form");
        EquateCols2("#price .row");
        EquateCols2("#price .row",".card-text");
        EquateCols("#info .card-title");
    }
 });