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
       ],
   });
});
