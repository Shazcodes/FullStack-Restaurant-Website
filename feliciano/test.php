    <?php

if(isset($_POST['submit'])){
	$query = "select * from products where";
	$car_name = $_POST['car_name'];
	if($car_name != ""){
		$query .= "car_name = '$car_name'";
		}
		$car_color = $_POST['car_color'];
	if($car_color != ""){
		$query .= "AND car_color = '$car_color'";
		}
	$sqll = mysqli_query($db,$query);
	if(mysqli_num_rows($sqll) != 0){
		while($rows = mysqli_fetch_assoc($sqll)){
			$id = $rows['id'];
			$car_name = $rows['car_name'];
			$car_color = $rows['car_color'];
			echo "<div><h1>$car_name</h1></div><div> <h1>$car_color</h1></div>";
			}}
			else{
				echo"Not Found";
				}
	}
		
		
	
	
	

?>





























    <?php

if(isset($_POST['submit'])){
	
	
	$car_name = $_POST['car_name'];
	
		$car_color = $_POST['car_color'];
	
		
	if($car_name != ""  || $car_color != ""){
	$queryy = "select * from products where car_name = '$car_name' OR car_color = '$car_color'";
	$sqll = mysqli_query($db,$queryy);
	if(mysqli_num_rows($sqll) != 0){
		while($rows = mysqli_fetch_assoc($sqll)){
			$id = $rows['id'];
			$car_name = $rows['car_name'];
			$car_color = $rows['car_color'];
			echo "<div><h1>$car_name</h1></div><div> <h1>$car_color</h1></div>";
			}}
			else{
				echo"Not Found";
				}
	}
		
		}
	
	
	

?>