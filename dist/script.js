"use strict"

$(document).ready(function() {
    $("#jouer").hide();
    $(document).on("scroll",function(){
        var position=$(window).scrollTop();
        console.log(position);
        //var scrollValue=$(target).offset().top;
      if (position < 200){
        $("#jouer").hide();
      }else if (position > 200){
          $("#jouer").show();
      }
       });
});