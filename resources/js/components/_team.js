$(document).ready(function() {
   $('.team-list').slick({
       responsive: [
           {
             breakpoint: 9999,
             settings: 'unslick',
           },
           {
               breakpoint: 768,
               settings: {
                   arrows: false,
                   centerMode: true,
                   centerPadding: '150px',
                   slidesToShow: 1,
                   infinite: true,
               }
           },
           {
            breakpoint: 568,
            settings: {
                    arrows: false,
                   centerMode: true,
                   centerPadding: '100px',
                   slidesToShow: 1,
                   infinite: true,
            }
           },
           {
            breakpoint: 450,
            settings: {
                    arrows: false,
                   centerMode: true,
                   centerPadding: '40px',
                   slidesToShow: 1,
                   infinite: true,
            }
           },
       ],
   });
});
