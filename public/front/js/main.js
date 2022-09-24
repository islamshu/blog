




         var nums = document.querySelectorAll(".number-item span");
                    var section = document.querySelector(".whyUs");
                    var started = false; // Function Started ? No

                    window.onscroll = function () {
                    if (window.scrollY >= section.offsetTop -250) {
                        if (!started) {
                        nums.forEach((num) => startCount(num));
                        }
                        started = true;
                    }
                    };

                    function startCount(el){
                    var goal = el.dataset.top;
                    var count = setInterval(() => {
                        el.textContent++;
                        if (el.textContent == goal) {
                        clearInterval(count);
                        }
                    }, 2000 / goal);
                    }



$('document').ready(function(){



    new WOW({
        mobile:false
    }).init();





    $('.thumbnials img').click(function () {

        $(this).addClass('selected').siblings().removeClass('selected');

        $('.img-mian img').hide().attr('src', $(this).attr('src')).fadeIn(500)

    })

    var numOfThumb = $('.thumbnials').children().length,

        MargenBitwenThumb = "1.5",
        TotalMargen = (numOfThumb - 1) * MargenBitwenThumb,
        ThumbWidth = (100 - TotalMargen) / numOfThumb;
        // console.log(ThumbWidth)
        $('.thumbnials img').css({
        'width': ThumbWidth + "%",
        'margin-right': MargenBitwenThumb + "%"
    })


    $('.img-mian span:last-of-type').click(function () {

        if ($('.thumbnials .selected').is(":last-child")) {

            $('.thumbnials img').eq(0).click()
        } else {
            $('.thumbnials .selected').next().click()
        }
    })

    $('.img-mian span:first-of-type').click(function () {

        if ($('.thumbnials .selected').is(":first-child")) {
            $('.thumbnials img:last').click()

        } else {

            $('.thumbnials .selected').prev().click()
        }
    })








  $(window).scroll(function () { 
    if($(this).scrollTop() > 1000){
        $('.btn-top').addClass('d-block') 
    }else{
        $('.btn-top').removeClass('d-block') 

    }



    if($(this).scrollTop() > $('.ourValue').offset().top -200){
        $('.presntege').each(function(){
            $(this).animate({
                width:$(this).data('range')+'%'
               },500)
           })


           let ctx = document.getElementById('myChart').getContext('2d');

           var ChartPie = new Chart(ctx, {
               type: 'pie',
               data: {
                   datasets: [
                       {
                           label: 'عملاء',
                           data: [1, 2],
                           backgroundColor: [
                               '#372561',
                               ' #f4b728'
                           ],
                        
                           borderWidth: 1, fontSize:12,fill: true
                       }
                   ]
               },
               options: {
                   responsive: true,
                   plugins: {
                     legend: {
                       position: 'top',
                     },
                     
                   }
                 },
           });

           

        
    }


    if($(window).scrollTop()> 200){


        $('.navbar').addClass('navbar-fixd')
    
    }else{
        $('.navbar').removeClass('navbar-fixd')

    }
    
  
    

  })


  $('.goTop').click(function(){
        window.scrollTo({
        top: 0,
        behavior: 'smooth',
        });
  });



})


$(window).on("load",function(){
	$('.wrapper-cover').fadeOut("slow")
})





$('.collapse .navbar-nav li a').click(function(){

    $('html,body').animate({
        scrollTop:$("#"+$(this).data('scroll')).offset().top -280
    },700)

})





