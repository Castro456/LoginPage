$(document).ready(function(){ 
    $("#log").click( function(){
    var email = $("#email").val();
    var pass = $("#pass").val();
    $.ajax({
    url:"login.php",
    type:"POST",
    data:{
      em: email,
      psr : pass
    },
    success:function(result){
          alert(result);
    }
  });
  });
});