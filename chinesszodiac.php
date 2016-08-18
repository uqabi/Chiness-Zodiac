
<!doctype html>
<html>
<head>
	<title>Chiness zodiac</title>

	<meta charset="utf-8" />
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="jQuery.js" type="text/javascript">

    
	<?php
	
	/*
	Date created:20-11-2015;
	Time:11:00am;
	Developer:Kamran Ali
	
	
	
	*/
	if(array_key_exists('year',$_POST)){
		
		$year = $_POST['year'];
		

	}
	
	

	
function chiness_zodiac($year){
switch (($year-4)%12) {
	
	
	case 0  : return  "Rat";      
	case 1  : return  "Ox";       
	case 2  : return  "Tiger";    
	case 3  : return  "Rabbit";   
	case 4  : return  "Dragon";   
	case 5  : return  "Snake";    
	case 6  : return  "Horse";    
	case 7  : return  "Goat";     
	case 8  : return  "Monkey";   
	case 9  : return  "Rooster";  
	case 10 : return  "Dog";      
	case 11 : return  "Pig";      
} 

}  
$num_length = strlen((string)$_POST['year']);
if(empty($_POST['year'])){
		
		$result='<div class="error">Please enter the year?</div>';
		
	} 
	
	elseif($num_length !==4){
		
		$result='<div class="error">Please enter correct year?</div>';
	}
	
	elseif(!is_numeric($_POST['year'])) {
		
		$result='<div class="error">Please enter a numeric value?</div>';
	}
	else {
	$result=" {$year} is the year of" . " " . chiness_zodiac($year);	
	}
   

?>
	
	
	
if($num_length == 10) {
    // Pass
} else {
    // Fail
}
	
	
	
	
	
	<!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	
	</head>

<body>
<style>
body {
	
background:grey;	

}
.error {
	
	color:red;
}



</style>



    <div class="col-md-3"style="background:#000;color:#fff;margin:100px 0 0 450px;border:3px solid yellow;border-radius:10px;width:24%;">
	<p style="margin:10px 0 5px 10px">The Chinese Zodiac, known as Sheng Xiao, is based on a twelve-year cycle, each year in that cycle related to an animal sign...</p><p><a href="http://www.chinahighlights.com/travelguide/chinese-zodiac/"><img id="img" style="height:80px;border:2px solid green;width:80px;margin:0 0 0 10px;border-radius:50px;"src="dragon.png"/></a></p>
	  <form method="post" id="form" action"<?php  $_php_SELF; ?>" style="border:none;width:100%;height:250px;background:#800000;border-radius:10px;margin-bottom:10px;">
	   <div style="height:30%;width:99.8%;background:green;text-align:center;padding:15px 0 5px 0;color:pink;font-weight:bold;font-size:18px"><?php  echo $result; ?></div>
	    <div class="form-group">
		 <input style="background:#8B4500;border:5px solid GREY;margin:30px 0 0 25px;padding:0 5px 0 5px;border-radius:15px; height:30px;text-align:center;width:80%;"type="text" id="input" name="year" placeholder="Enter the year"/>
		 </div>
	    <input style="background:green;border:2px solid green;width:45%;height:30px; color:#fff;margin:40px 0 0 20px;" type="submit" value="Enter">
	  
	  </form>
	  <p style="margin:1px 0 5px 40px;color:grey;">Developed by: Kamran Ali</p>
	
	</div>


   </div>

       
   </div>
  
 <script type="text/javascript">

/* 

    Date created:20-11-2015
	Time:11:00am
	Developer:Kamran Ali


*/
  /*var year = $("#input").val().toString().length;
  if(year ==""){
	  
	  alert("please enter a value");
	  
  }
 var div_width = $("#form").width();
alert ("The parent elemnet width = " + " " + div_width); 
*/



</script>



</html>
