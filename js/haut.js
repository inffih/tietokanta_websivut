$(document).ready(function(){

  // hae radat
  $("#hae-radat").click(function(){
    $.ajax({
      type: "GET",
      url: "ratahaku.php",
      success: function(radat){
        naytaRadat(radat);
      }
    });
  });
  function naytaRadat(radat){
    $("#home").html("");
    $("#home").append("<h2>Radat</h2>");
    $("#home").append(radat);
  };

  // hae pelit
  $("#hae-pelit").click(function(){
    $.ajax({
      type: "GET",
      url: "pelihaku.php",
      success: function(pelit){
        naytaPelit(pelit);
      }
    });
  });
  function naytaPelit(pelit){
    $("#menu1").html("");
    $("#menu1").append("<h2>Pelit</h2>");
    $("#menu1").append(pelit);
  };

});
