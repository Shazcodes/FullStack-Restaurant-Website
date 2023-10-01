<?php

include ('include/db.php');
									$sql = "select * from products LIMIT 0,1";
									$query = mysqli_query($db,$sql);
									$row = mysqli_fetch_array($query);
										$product_name= $row['product_title'];
										$product_img =$row['product_img'];
										echo '<div class="item">
										<img src="images/$product_img"
											 </div>'
									
									 ?>