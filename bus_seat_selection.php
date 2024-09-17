<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


</head>

<style>
.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
}
/* On mouse-over, a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}
/* When the checkbox is checked , a blue background */
.container input:checked ~ .checkmark {
  background-color:#0df3ee;
}
/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}
.container input:checked ~ .checkmark:after {
  display: block;
}
.container .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);

}
.selection{
	margin-right:70px;
}
.left-seat{
	margin-left:40px;
}
.notify_seat{
	font-size:15px;
}

.female-bg input[type="checkbox"]:checked + .checkmark {
  background-color:#ec7fe2;
}
.male-bg input[type="checkbox"]:checked + .checkmark {
  background-color:#239ef5;
}

</style>
<body>
<h1>Bus Seats:</h1>
<div class="container">
	<div class="row" id="seat">
		<div class="col-sm-2 left-seat">
			<label class="container">A1<input onchange="getValue()" type="checkbox" name="checkbox" id="A1" value="A1"><span class="checkmark"></span></label>
			<label class="container">B1<input onchange="getValue()" type="checkbox" name="checkbox" id="B1" value="B1"><span class="checkmark"></span></label>
			<label class="container">C1<input onchange="getValue()" type="checkbox" name="checkbox" id="C1" value="C1"><span class="checkmark"></span></label>
			<label class="container">D1<input onchange="getValue()" type="checkbox" name="checkbox" id="D1" value="D1"><span class="checkmark"></span></label>
			<label class="container">E1<input onchange="getValue()" type="checkbox" name="checkbox" id="E1" value="E1"><span class="checkmark"></span></label>
			<label class="container">F1<input onchange="getValue()" type="checkbox" name="checkbox" id="F1" value="F1"><span class="checkmark"></span></label>
			<label class="container">G1<input onchange="getValue()" type="checkbox" name="checkbox" id="G1" value="G1"><span class="checkmark"></span></label>
		</div>
		<div class="col-sm-2 selection">
			<label class="container">A2<input onchange="getValue()" type="checkbox" name="checkbox" id="A2" value="A2"><span class="checkmark"></span></label>
			<label class="container">B2<input onchange="getValue()" type="checkbox" name="checkbox" id="B2" value="B2"><span class="checkmark"></span></label>
			<label class="container">C2<input onchange="getValue()" type="checkbox" name="checkbox" id="C2" value="C2"><span class="checkmark"></span></label>
			<label class="container">D2<input onchange="getValue()" type="checkbox" name="checkbox" id="D2" value="D2"><span class="checkmark"></span></label>
			<label class="container">E2<input onchange="getValue()" type="checkbox" name="checkbox" id="E2" value="E2"><span class="checkmark"></span></label>
			<label class="container">F2<input onchange="getValue()" type="checkbox" name="checkbox" id="F2" value="F2"><span class="checkmark"></span></label>
			<label class="container">G2<input onchange="getValue()" type="checkbox" name="checkbox" id="G2" value="G2"><span class="checkmark"></span></label>
		</div>
		
		<div class="col-sm-2">
			<label class="container">A3<input onchange="getValue()" type="checkbox" name="checkbox" id="A3" value="A3"><span class="checkmark"></span></label>
			<label class="container">B3<input onchange="getValue()" type="checkbox" name="checkbox" id="B3" value="B3"><span class="checkmark"></span></label>
			<label class="container">C3<input onchange="getValue()" type="checkbox" name="checkbox" id="C3" value="C3"><span class="checkmark"></span></label>
			<label class="container">D3<input onchange="getValue()" type="checkbox" name="checkbox" id="D3" value="D3"><span class="checkmark"></span></label>
			<label class="container">E3<input onchange="getValue()" type="checkbox" name="checkbox" id="E3" value="E3"><span class="checkmark"></span></label>
			<label class="container">F3<input onchange="getValue()" type="checkbox" name="checkbox" id="F3" value="F3"><span class="checkmark"></span></label>
			<label class="container">G3<input onchange="getValue()" type="checkbox" name="checkbox" id="G3" value="G3"><span class="checkmark"></span></label>
		</div>
		<div class="col-sm-2">
			<label class="container">A4<input onchange="getValue()" type="checkbox" name="checkbox" id="A4" value="A4"><span class="checkmark"></span></label>
			<label class="container">B4<input onchange="getValue()" type="checkbox" name="checkbox" id="B4" value="B4"><span class="checkmark"></span></label>
			<label class="container">C4<input onchange="getValue()" type="checkbox" name="checkbox" id="C4" value="C4"><span class="checkmark"></span></label>
			<label class="container">D4<input onchange="getValue()" type="checkbox" name="checkbox" id="D4" value="D4"><span class="checkmark"></span></label>
			<label class="container">E4<input onchange="getValue()" type="checkbox" name="checkbox" id="E4" value="E4"><span class="checkmark"></span></label>
			<label class="container">F4<input onchange="getValue()" type="checkbox" name="checkbox" id="F4" value="F4"><span class="checkmark"></span></label>
			<label class="container">G4<input onchange="getValue()" type="checkbox" name="checkbox" id="G4" value="G4"><span class="checkmark"></span></label>
		</div>
	</div>
	
</div>
		
<br>
<br>

<input hidden type="button" value="Submit" id ="getValue" onclick="getValue()"/>

<form  action="buy_seat.php" name="updateSeats" method="POST" onsubmit="return check(this)">
<input hidden id="update_results" name="update_results" value="" />
<input hidden id="update_results_id" name="update_results_id" value="" />
<input hidden id="update_results_unique" name="update_results_unique" value="" />
<input style="width:100%" class="btn btn-success book_seats" type="submit" name="submit" id="btn" onclick='check()' value="Book Seats"></input>
<br><br>
<div class="row">
    <div class="col-4">
        <label class="container female-bg">Female Booked<input type="checkbox" name="notify_seat" id="pinkSeat" checked><span class="checkmark"></span></label>
    </div>
    <div class="col-4">
		<label class="container male-bg">Male Booked<input type="checkbox" name="notify_seat" id="blueSeat" checked><span class="checkmark"></span></label>
    </div>
</div>
</form>
<?php
$connect=mysqli_connect("localhost","root","","bus_service");
$id = $_POST['bus_no'];
$sql = "select * from bus_lists where trip_no = ".$id."";
$gender = "SELECT * FROM passengers WHERE trip_no = $id";

$result = mysqli_query($connect,$sql);

$resultGender = mysqli_query($connect, $gender);
//echo ".$sel_gender.";

while($row = mysqli_fetch_array($result))
{
	 $trip_no = $row['trip_no'];
	 $bus_company = $row['bus_company'];
	 $bus_no = $row['bus_no'];
	 $time = $row['time'];
	 $date = $row['date'];
	 $start = $row['start'];
	 $end = $row['end'];
	 $fare = $row['fare'];

	 $booked_seat = $row['booked_seat'];
	 //echo ".$bus_company.";
	 //echo ".$booked_seat.";
	 //echo ".$sql.";
	 //echo ".$trip_no.";
	}
$passengersData = array();

while($row = mysqli_fetch_array($resultGender)) {
    $passenger = array(
        'Gender' => $row['Gender'],
        'Selected_Seats' => $row['Selected_Seats']
    );
    array_push($passengersData, $passenger);
}

$passengers_data = json_encode($passengersData);
	
	
?>

<script>
	
	$(document).ready(function(){

		var passengersData = <?=$passengers_data?>;
		//alert(gender);
		//alert("Welcome to my page");
		var booked = '<?=$booked_seat?>';
		blockseats(booked);
		
		applyBackgroundColors(passengersData);

		var InitialbookedArray = booked.split(",");
		var trip_num = '<?=$trip_no?>';
		
		var empt = "\'";
		var result1 = empt.concat(booked,"\'");
			
		var elem = document.getElementById('update_results');
		elem.value = InitialbookedArray;
		var elem = document.getElementById('update_results_id');
		//elem.value = '<?=$trip_no?>';
		elem.value = trip_num;
		
		});
		
	
	function blockseats(booked){
		var split_booked = booked;
		//alert(split_booked);
		var gender = '<?=$gender?>';

		var split_seat = split_booked.split(',');
		//alert(split_booked);
		//alert(split_seat);
		var len=split_seat.length;
		//alert(len);
		for(let i=0; i<len; i++){
			var seat= split_seat[i];
			var value="#" + seat;
			//alert(value);
			
			$(value).attr('disabled',true);
			$(value).attr('checked',true);
		};
		
	}

	function applyBackgroundColors(passengersData) {
	  passengersData.forEach(function(passenger) {
		var gender = passenger.Gender;
		var selectedSeats = passenger.Selected_Seats.split(',');

		if (gender === 'female') {
		  addBackgroundColor(selectedSeats, 'female-bg');
		} else if (gender === 'male') {
		  addBackgroundColor(selectedSeats, 'male-bg');
		}
	  });
	}

	function addBackgroundColor(selectedSeats, bgColorClass) {
	  selectedSeats.forEach(function(seat) {
		var seatLabel = $('#' + seat).parent();
		seatLabel.addClass(bgColorClass);
	  });
	}
	
	
		
    function getValue() {
            var checkboxes = document.getElementsByName('checkbox');
            var result = "";
            for (var i = 0; i < checkboxes.length; i++) {
                if (checkboxes[i].checked) {
                    result += checkboxes[i].value + ",";
				}
			}
			//alert(result);
			var len=result.length;
			//alert(len)
			var result = result.slice(0,len-1);
			var trip_no = '<?=$trip_no?>';
			
			const ResultmyArray = result.split(",");

			var empt = "\'";
			result1 = empt.concat(result,"\'");
			
			var elem = document.getElementById('update_results');
			elem.value = result1;
			
			var previous_list = '<?=$booked_seat?>';
			const previous_listArray = previous_list.split(",");
		
			const unique = [];
			
			for(var i = 0; i < ResultmyArray.length; i++){
				var found = false;

				for(var j = 0; j < previous_listArray.length; j++){
				 if(ResultmyArray[i] == previous_listArray[j]){
				  found = true;
				  break; 
						}
				}
			   if(found == false){
			   unique.push(ResultmyArray[i]);
			  }
			}
			
			var elem1 = document.getElementById('update_results_unique');
			elem1.value = unique;
			
}
		
    </script>

		
</body>

</html>