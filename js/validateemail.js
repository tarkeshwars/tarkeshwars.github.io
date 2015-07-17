<script type="text/javascript">
$(document).ready(function() {
 $('#myform').validate({
  rules: {
   email: {
    required: true,
    email: true
   },
  },
messages: {
  email: {
  required: "Please enter a valid email id!",
  email: "Please enter a valid email id!"
    }
}, 
errorPlacement: function(error, element) {
  if (("#errormsg").innerHTML===""){
  error.appendTo("#errormsg");
  }
  else{
  $("#errormsg").empty();
  $("#msg_normal").empty();
  error.appendTo("#errormsg");
  }
},
submitHandler: function(form) {
   // submitting and disabling form and showing success message
   $.post('process.php', $("#myform").serialize(), function(data) {
    $('#results').html(data);
       });
	$("#errormsg").hide();
	$("#msg_normal").hide();
	$("#submit").attr("disabled","disabled");
	$("#email").attr("disabled","disabled");
	$("#submit").css("background-image","url(../images/ic_tick.png)");
  }
 });
}); // end validate form
</script>