$(document).ready(initEvents);

function initEvents() {
   if ($('.nav-item a').hasClass('active')) {
      $('.nav-item a').removeClass('active');
   }
   $('#menuEventos').addClass('active');
}