$(function() {
    
    $('.drawer').drawer();
    
    $('.slider').slick({
        dots:true,
    });
    $('.front').on('touchend',function(){
        $('.front').removeClass('turn-4');
        $('.reverse').removeClass('turn-3');
        $('.front').addClass('turn-1');
        $('.reverse').addClass('turn-2');
        console.log(0);
    })
    $('.reverse').on('touchend',function(){
        $('.front').removeClass('turn-1');
        $('.reverse').removeClass('turn-2');
        $('.front').addClass('turn-4');
        $('.reverse').addClass('turn-3');
        console.log(0);
    })
});
