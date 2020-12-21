$(document).ready(function(){ 
$(document).on("click","button", function(){

    var firstname = $(".firstname").val();
    var email = $(".email").val();
    var usr = $(".usr").val();
    var psr = $(".psr").val();
    var dob = $(".dob1").val();
    var age = $(".age").val();
    console.log(firstname);
    $.ajax({
    url:"signup.php",
    type:"POST",
    data:{
    firstname: firstname,
    email: email,
    usr: usr,
    psr: psr,
    dob: dob,
    age: age
    },
    success:function(result){
            alert(result);
    },

});
});
});