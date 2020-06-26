</body>
</html>
<script>
$(document).ready(function(){
$("#button").click(function(){
$(".form-control:input").each(function(index){
  var input = $(this).attr('id');
  var val = $("#"+input).val();
  var id = $("#"+input);

  if(val==''){
    id.addClass('error');
  }
  else{
    id.removeClass('error');
    $("#form").submit();
  }
 
});

});
  // jQuery methods go here...

}); 
</script>