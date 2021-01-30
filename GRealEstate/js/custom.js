(function($){
    $(document).ready(function(){

        $(function () {
            // Slideshow 
            $("#slider").responsiveSlides({
              auto: true,
              pager: false,
              nav: true,
              speed: 500,
              namespace: "callbacks",
              before: function () {
                $('.events').append("<li>before event fired.</li>");
              },
              after: function () {
                $('.events').append("<li>after event fired.</li>");
              }
            });
          });
          $('.maps').click(function () {
            $('.maps iframe').css("pointer-events", "auto");
          });
        
          $( ".maps" ).mouseleave(function() {
            $('.maps iframe').css("pointer-events", "none"); 
          });
          $('.maps').click(function () {
            $('.maps iframe').css("pointer-events", "auto");
          });
        
          $( ".maps" ).mouseleave(function() {
            $('.maps iframe').css("pointer-events", "none"); 
          });



    });
})(jQuery)