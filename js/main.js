
(function($) {
  $(document).ready(function(){

    $( ".read-more" ).click(function(e){
          $section = $(this).next(".detail-section");
          if($section.is(":visible")){
            $(this).html("Read More");
            $section.toggle("slow");
          }else{
             $(this).html("Read Less");
             $section.toggle("slow");
          }
          
    });
 });
}(jQuery));
