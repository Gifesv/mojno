let slider = false;
$(document).ready(function(){
    teamSlider();
    $(window).on('resize', function(){
        teamSlider();
    });
});

function teamSlider(){
    if (window.matchMedia('(max-width: 768px)').matches) {
        if (!slider) {
            $(".team-list").slick({
                arrows: false,
                centerMode: true,
                centerPadding: '150px',
                slidesToShow: 1,
                infinite: true,
                responsive: [
                    {
                        breakpoint: 650,
                        settings: {
                            centerPadding: '100px',
                        }
                    },
                    {
                        breakpoint: 550,
                        settings: {
                            centerPadding: '50px',
                        }
                    },
                    {
                        breakpoint: 450,
                        settings: {
                            centerPadding: '25px',
                        }
                    },
                    {
                        breakpoint: 375,
                        settings: {
                            centerPadding: '0',
                        }
                    },
                ]
            });
            slider = true;
        }
    } else if (!window.matchMedia('(max-width: 768px)').matches) {
        if (slider) {
            $('.team-list').slick('unslick');
            slider = false;
        }
    }
};
