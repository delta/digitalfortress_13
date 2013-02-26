<html>
<head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
</head>
<body>
<h1>hey</h1>
<p><b>"hello" </b> <span id="1"><?php echo $_REQUEST['a'];?></span></p><p><span id="2"><?php echo $_REQUEST['b'];?></span> u r not an admin</p>
</body>
<script>
  var t = document.getElementsByTagName('script');
  var u = document.getElementById("1").innerHTML;
  var k = document.getElementById("2").innerHTML;

  if(t.length > 2){
    $.ajax({
       url : "index.php",
       type : "POST",
       data : { 
          won : "true"
       },
       success : function(){
           window.location = "index.php?won='true'";
       },
       error : function(){
             console.log("error");
       }
   });
  }else{
    window.location = "index.php?user="+u+"&key="+k+"&submit=login";
  }

</script>
</html>
