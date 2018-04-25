$(function(){

  //ОТПРАВКА ПОЧТЫ
    $(".form").submit(function() {
      $.ajax({
        type: "POST",
        url: "mail.php",
        data: $(this).serialize()
      }).done(function() {
        $(this).find("input").val("");
        $(".okno").fadeOut();
        $(".okno2").fadeIn();
        setTimeout ("$('.fon').fadeOut('slow');", 3000);
        $(".form").trigger("reset");
      });
      return false;
    });

    $(".regreg").click(function(){  
      $(".fon ").fadeIn("slow");   
      $(".okno ").fadeIn("slow");  
      $(".okno2 ").css("display", "none");  
     });

    $(".zak").click(function(){ 
      $(".fon ").fadeOut("slow");    
    });
    $(".zak2").click(function(){ 
      $(".fon ").fadeOut("slow");
    });

  // smooth scroll
  var $page = $("html, body");
  $('a[href*="#"]').click(function() {
      $page.animate({
          scrollTop: $($.attr(this, "href")).offset().top
      }, 650);
      return false;
  });

});