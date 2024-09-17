<html>
	<head>
		<link rel="stylesheet" href="bootstrap-4.1.3-dist\css\bootstrap.min.css" media="all" />
		<link rel="stylesheet" href="bootstrap-4.1.3-dist\css\bootstrap.min.css" media="all" />
		<script src="bootstrap-4.1.3-dist\js\bootstrap.min.js" type="text/javascript"></script>
		<script src="bootstrap-4.1.3-dist\js\bootstrap.min.js" type="text/javascript"></script>
		<link rel="stylesheet" href="bootstrap-4.1.3-dist\css\bootstrap.min.css"/>
		<link rel="stylesheet" href="bootstrap-4.1.3-dist\js\bootstrap.min.js" type="text/javascript"></script>
	</head>                                              
</html>                                                  
<?php                                                    
$connect=mysqli_connect("localhost","root","","bus_service");
$id = $_POST['bus_info'];                                
$sql = "select * from bus_info where id=$id";         
$result = mysqli_query($connect,$sql);                   
$response = "<div>";                                     
while( $row = mysqli_fetch_array($result) ){             
	 $Id = $row['id'];                                   
	 $bus_name = $row['bus_name'];                       
	 $company = $row['company'];                         
	 $no_bus = $row['no_bus'];                           
	 $routes = $row['routes'];                           
	 $image = $row['image']; 
	 $img_array=explode(" ", $image);                    
	$response ="                                        
	<h5 class='card-title'>".$bus_name."</h5>            
	<div id='demo' class='carousel slide' data-ride='carousel'>                           
	  <div class='carousel-inner'>                       
		<div class='carousel-item active'>               
		  <img src='busimages/".$img_array[0]."'  width='100%' height='400px'>
		</div>                                     
	  </div>                                              
	</div>                                               
	<div class='container' id='bus_info_modal'>          
		<div class='card-body'>                
			<small class='text-muted'>Company: ".$company."</small></label></label>
			<label class='card-text'><small class='text-muted'>Bus Number: ".$no_bus."</small></label>
			<p class='card-text' style='margin-top:2%'>Routes: ".$routes."</p>
		</div>
	</div>";                                
                                                         
	                                                     
}                                                        
$response .= "</div>";                                   
                                                         
echo $response;                                          
exit;                                                    
                                                         
                                                         