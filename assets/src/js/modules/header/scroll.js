export default function scroll() {
   $(function() {
      $(window).on('scroll', function() {
         var WindowTop = $(window).scrollTop();
         $('section').each(function(i) {
            if (WindowTop > $(this).offset().top - 80 &&
               WindowTop < $(this).offset().top + $(this).outerHeight(true)
            ) {
               $('.nav > li > a').removeClass('active');
               $('.nav li').eq(i).find('a').addClass('active');
            }
         });
      });

      $('a[href*=\\#]:not([href=#])').click(function() {

         if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
               $('html,body').animate({
                  scrollTop: target.offset().top
               }, 1000);
               return false;
            }
         }

      });



   });
}