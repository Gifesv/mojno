$(document).ready(function(){
    $(".team-list_sm").slick({
        arrows: false,
        centerMode: true,
        centerPadding: '20%',
        slidesToShow: 1,
        infinite: true,
        responsive: [
            {
                breakpoint: 650,
                settings: {
                    centerPadding: '20%',
                }
            },
            {
                breakpoint: 550,
                settings: {
                    centerPadding: '15%',
                }
            },
            {
                breakpoint: 450,
                settings: {
                    centerPadding: '10%',
                }
            },
            {
                breakpoint: 400,
                settings: {
                    centerPadding: '7%',
                }
            },
            {
                breakpoint: 360,
                settings: {
                    centerPadding: '0',
                }
            },
        ]
    });
});

