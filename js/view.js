$(document).ready(function(){
    $.ajax({
    url:"view1.php",
    type:"POST",
    success:function(result){
          $("#table").html(result);
    }
  });

  $(document).on("click",".viewbtn", function(){
    $.ajax({
    url:"delete.php",
    type:"POST",
    data:{
      delete: $(this).val(),
    },
    success:function(result){
          alert(result);
          window.location.reload();
    }
  });
  });

  $(document).on("click",".donebtn", function(){
    $.ajax({
    url:"done.php",
    type:"POST",
    data:{
      done: $(this).val()
    },
    success:function(result){
          alert(result);
          window.location.reload();
    }
  });
  });

  });