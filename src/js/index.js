$(window).on('scroll',function(){
  if($(window).scrollTop()){
      $('.navigation').addClass('fixed-menu');
      console.log("scrolled");
  }
  else{
      $('.navigation').removeClass('fixed-menu');
  }

  if($(window).scrollTop() >= $("#apply__form").offset().top ){
      $('.buy-now-sticky').addClass("hidden");
  }else {
    $('.buy-now-sticky').removeClass("hidden");
  }
});


$(document).ready(function() {
  $("#applyform").submit(function(event){
    event.preventDefault();
    console.log('clickedddd');
    var fullname = $('#fullname').val();
    var phone = $('#phone').val();
    var phoneConfirmation = $('#phone2').val();
    var address = $('#address').val();
    if( phone == "" || phoneConfirmation == ""){
      $(".errorconf").html("المرجو إدخال رقم الهاتف");
      return;
    }
    if(phone != phoneConfirmation){
      $(".errorconf").html("أرقام الهواتف ليست هي نفسها");
      $('#phone').css({"border": "1px solid #F56E96"});
      $('#phone2').css({"border": "1px solid #F56E96"});
      return;
    }

    // console.log('fdfdfdf')

    var dataString = `fullname=${fullname}&phone=${phone}&address=${address}`;
    // $("#popup").addClass('popup');
    // $(".popup__content").addClass('show-content');
    $.ajax({
      type : "POST",
      url : "functions.php",
      data : dataString,
      cache : false,
      success : function(data) {
        var dataArr = $.parseJSON(data);
        if(dataArr["code"] == 200){
          $("#popup").addClass('popup');
          $(".popup__content").addClass('show-content');
          console.log(dataArr["msg"]);
        }else {
          console.log("regestring  failed");
        }

      }
    });

  });
});