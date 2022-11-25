$(document).ready(function() {
   $('.accordion__item').click(function() {
      if ($(this).hasClass('accordion__item_active')) {
          $(this).removeClass('accordion__item_active');
          $(this).find('.accordion__content').stop().slideUp(350);
      } else {
          $(this).addClass('accordion__item_active');
          $(this).find('.accordion__content').stop().slideDown(350);
      }
   });
});
