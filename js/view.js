$(document).ready(function(){
    $.ajax({
    url:"view1.php",
    type:"POST",
    success:function(result){
          $("#table").html(result);
    }
  });

  $(document).on("click",".deletebtn", function(){
    $(".deletebtn").attr("disabled", true);
    $(".deletebtn").text("Deleting..");
    $.ajax({
    url:"delete.php",
    type:"POST",
    data:{
      delete: $(this).val(),
    },
    success:function(result){
          $(".deletebtn").attr("disabled", false);
          $(".deletebtn").text("Delete");
          if(result == "Deleted")
          {
          toastr.error(result);
          }
          else{
            toastr.error("Problem Occured");
          }
          window.setTimeout(function(){
            location.reload();
          },900);
    }
  });
  });

  $(document).on("click",".donebutton", function(){
    $(".donebutton").attr("disabled", true);
    $(".donebutton").text("Done...");
    $.ajax({
    url:"done.php",
    type:"POST",
    data:{
      done: $(this).val()
    },
    success:function(result){
          $(".donebutton").attr("disabled", false);
          $(".donebutton").text("Done");
           if(result == "Task Marked as Done")
            {
            toastr.success(result);
            }
            else{
              toastr.error("Problem Occured");
            }
            window.setTimeout(function(){
              location.reload();
            },900);
    }
  });
  });

  $(document).on("click","button[data-role=update]",function(){
		var id=($(this).data('id'));
    var task = $('#'+id).children("td[data-target=task]").text();    
		$("#task").val(task);
    $("#userid").val(id);
    $("#mymodal").modal("toggle");
    
});

$("#save").click(function(){
  $("#save").attr("disabled", true);
  $("#save").text("Saving...");
	var id= $("#userid").val();
  var task= $("#task").val();
  var time = $('#'+id).children("td[data-target=time]").text();
	$.ajax({
		url: 'update.php',
		method: 'post',
		data:{task:task , id:id , time:time},
		success: function(){
      $("#save").attr("disabled", false);
      $("#save").text("Save changes");
      $("#mymodal").modal("toggle");
      toastr.success("Changes Saved");
      window.setTimeout(function(){
        location.reload();
      },900);
		}
	})
});

  });