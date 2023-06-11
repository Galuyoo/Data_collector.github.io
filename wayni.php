<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>DATA BASE</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="navbar1.css">
    <script type="text/javascript">
        function preventback(){window.history.forward()};
        setTimeout("preventback()",0);
        window.onunload=function(){null;}
    </script>
 </head>
 <body style= "background-color:#333">
.

<nav>
  <a href="./home.php"><img src="./static/agamine_logo.png" class="logo"></a>
  <input type="checkbox" id="check">
  <label for="check" class="checkbtn">
    <i class="fa fa-bars"></i>
  </label>
  <ul>
    <li><a  href="./base.php">Mesurements</a></li>
    <li><a  href="./alarms.php">Events</a></li>
    <li><a  href="./home.php">home</a></li>
    <li><a  href="./te.php">Time filter</a></li>
  </ul>
</nav>
</div>


</body>
<div class="sec-center" style="margin-left: 1.6%; margin-bottom: 0;"> 	
	  	<input class="dropdown" type="checkbox" id="dropdown" name="dropdown"/>
	  	<label class="for-dropdown" for="dropdown">SECTIONS <i class="uil uil-arrow-down"></i></label>
  		<div class="section-dropdown"> 
		  	<input class="dropdown-sub" type="checkbox" id="dropdown-sub" name="dropdown-sub"/>
		  	<label class="for-dropdown-sub" for="dropdown-sub"> SECTIONS <i class="uil uil-plus"></i></label>
	  		<div class="section-dropdown-sub"> 
	  			<a href="#"> LED1 <i class="uil uil-arrow-right"></i></a>
	  			<a href="#"> LED2 <i class="uil uil-arrow-right"></i></a>
	  		</div>

  		</div>
  	</div>
  </div>

<div class="container">
   <br />

   <div class="form-group">
    <div class="input-group">
     <span class="input-group-addon">Search</span>
     <input  type="text" name="search_text" id="search_text" placeholder="Search by DATE" class="form-control" />
    </div>
   </div>

   <form method="POST" action="./excel.php">
    <input style="width:150px; height: 50px" type="submit" name="export_excel" class="btn btn-success" value="Export to Excel" /> 
    <input style="color:black" type="datetime-local" name="start_date" required>
    <input style="color:black" type="datetime-local" name="end_date" required>
</form>
   <br />
   <div id="result"></div>
  </div>
  <script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>

 </body>
</html>


