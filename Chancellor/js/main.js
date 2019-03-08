/*
Copyright 2018 Chancellor Systems, all rights reserved
*/

$(window).ready(function(){

  $("#logo").on("click", function(){
    window.location.href="../index.html";
  })

  $("#cancel").on("click", function(){
    window.location.href="../index.html";
  })

  $("#email_submit").on("click", function(){
    $("#confirmation").text("Email Sent");
  });

  $(document).on("click", ".cancel_butt", function(){
    $("#modal_not_bs_login_box").fadeOut("slow");
    $("#modal_not_bs_contact_box").fadeOut("slow");
  })

  $(document).on("click", "#accident_butt", function(event){
    $("#two").remove();
    $("#three").remove();
    event.preventDefault();

    $("#modal_not_bs_login_box").fadeIn("slow");
  })

  $(document).on("click", "#near_butt", function(event){
      event.preventDefault();
    $("#one").remove();
    $("#two").remove();
    $("#modal_not_bs_login_box").fadeIn("slow");
  })

  $(document).on("click", "#concern_butt", function(event){
      event.preventDefault();
    $("#one").remove();
    $("#three").remove();
    $("#modal_not_bs_login_box").fadeIn("slow");
  })

  $(document).on("click", "#contact", function(){
    $("#modal_not_bs_contact_box").fadeIn("slow");
  })

  $(document).on("click", "#add_user", function(){
    $("#modal_not_bs_contact_box").fadeIn("slow");
  })


})
