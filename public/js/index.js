(()=>{var e,n={599:()=>{$(document).ready((function(){$(".accordion__item").click((function(){$(this).hasClass("accordion__item_active")?($(this).removeClass("accordion__item_active"),$(this).find(".accordion__content").stop().slideUp(350)):($(this).addClass("accordion__item_active"),$(this).find(".accordion__content").stop().slideDown(350))}))}))},787:()=>{$(document).ready((function(){$(".header__nav-menu").click((function(e){$(".header__nav-menu,.header__nav,.header__nav-icon").toggleClass("active")}))}))},772:()=>{var e=!1;function n(){$(window).width()<=768?e||(console.log("resp"),$(".team-list").slick({arrows:!1,centerMode:!0,centerPadding:"150px",slidesToShow:1,infinite:!0,responsive:[{breakpoint:568,settings:{arrows:!1,centerMode:!0,centerPadding:"100px",slidesToShow:1,infinite:!0}},{breakpoint:450,settings:{arrows:!1,centerMode:!0,centerPadding:"40px",slidesToShow:1,infinite:!0}}]}),e=!0):$(window).width()>768&&e&&($(".team-list").slick("unslick"),e=!1)}$(document).ready((function(){n(),$(window).on("resize",(function(){n()}))}))},243:(e,n,o)=>{var i={"./_accordion.js":599,"./_menu.js":787,"./_team.js":772};function t(e){var n=r(e);return o(n)}function r(e){if(!o.o(i,e)){var n=new Error("Cannot find module '"+e+"'");throw n.code="MODULE_NOT_FOUND",n}return i[e]}t.keys=function(){return Object.keys(i)},t.resolve=r,e.exports=t,t.id=243}},o={};function i(e){var t=o[e];if(void 0!==t)return t.exports;var r=o[e]={exports:{}};return n[e](r,r.exports,i),r.exports}i.o=(e,n)=>Object.prototype.hasOwnProperty.call(e,n),(e=i(243)).keys().forEach((function(n){return e(n)}))})();