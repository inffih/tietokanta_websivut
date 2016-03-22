$(document).ready(function(){
  $(".ratahaku").click(function(){
    var $haku = $("#input_rata").val();
    $.ajax({
      type: "GET",
      url: "ratahaku.php",
      data: {haku: $haku},
      success: function(json){
        alert(json);
      }
    });
  });
});
