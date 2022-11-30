let slider = false;
$(document).ready(function(){
    teamSlider();
    $(window).on('resize', function(){
        teamSlider();
    });
});

function teamSlider(){
    if($(window).width() <= 768){
        if(!slider){
            console.log('resp')
            $(".team-list").slick({
                arrows: false,
                centerMode: true,
                centerPadding: '150px',
                slidesToShow: 1,
                infinite: true,
                responsive: [
                    {
                        breakpoint: 1,
                        settings: {
                            centerPadding: '100px',
                        },
                    }
                ]
            });
            slider = true;
        }
    } else if($(window).width() > 768){
        if(slider){
            $('.team-list').slick('unslick');
            slider = false;
        }
    }
};
