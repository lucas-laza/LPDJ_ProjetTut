"use strict"

$(document).ready(function() {
    $("#jouer").hide();
    $(document).on("scroll",function(){
        var target=$(".block2").offset().top;
        console.log(target);
        var position=$(window).scrollTop();
        console.log(position);
        //var scrollValue=$(target).offset().top;
      if (position < target - 100){
        $("#jouer").hide();
      }else if (position > target - 100){
          $("#jouer").show();
      }
      var ScrollValueBlur=$(".blureffect").offset().top;
      console.log(ScrollValueBlur);
      if (position > ScrollValueBlur - 100){
        $(".gif").css({"filter":"blur(4px)"})
      }else if (position < ScrollValueBlur - 100){
        $(".gif").css({"filter":"blur(0px)"})
      }
       });
       
});