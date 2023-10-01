<?php 

function slider(){
global $db;			       
		          
		    
	  $sql = "select * from slider order by 1 DESC LIMIT 0,1";
	  $query = mysqli_query($db,$sql);
	  $row = mysqli_fetch_array($query);
		  $slider_name= $row['slider_name'];
		  $slider_img =$row['slider_img'];
		  echo "
		  <div class='slider-item js-fullheight item active' style='background-image: url(images/$slider_img);'>
      	<div class='overlay'></div>
        <div class='container'>
          <div class='row slider-text js-fullheight justify-content-center align-items-center' data-scrollax-parent='true'>

            <div class='col-md-12 col-sm-12 text-center ftco-animate'>
            	<span class='subheading'>Feliciano</span>
              <h1 class='mb-4'>Best Restaurant</h1>
            </div>

          </div>
        </div>
      </div>";
	  
	  
	  
	  
	  
	  $sql = "select * from slider order by 1 DESC LIMIT 1,2";
	  $query = mysqli_query($db,$sql);
	  $row = mysqli_fetch_array($query);
		  $slider_name= $row['slider_name'];
		  $slider_img =$row['slider_img'];
		  echo "
		  <div class='slider-item js-fullheight item active' style='background-image: url(images/$slider_img);'>
      	<div class='overlay'></div>
        <div class='container'>
          <div class='row slider-text js-fullheight justify-content-center align-items-center' data-scrollax-parent='true'>

            <div class='col-md-12 col-sm-12 text-center ftco-animate'>
            	<span class='subheading'>Feliciano</span>
              <h1 class='mb-4'>Best Restaurant</h1>
            </div>

          </div>
        </div>
      </div>";
	  
	  
	  
	  
	  
	  $sql = "select * from slider order by 1 DESC LIMIT 2,3";
	  $query = mysqli_query($db,$sql);
	  $row = mysqli_fetch_array($query);
		  $slider_name= $row['slider_name'];
		  $slider_img =$row['slider_img'];
		  echo "
		  <div class='slider-item js-fullheight item active' style='background-image: url(images/$slider_img);'>
      	<div class='overlay'></div>
        <div class='container'>
          <div class='row slider-text js-fullheight justify-content-center align-items-center' data-scrollax-parent='true'>

            <div class='col-md-12 col-sm-12 text-center ftco-animate'>
            	<span class='subheading'>Feliciano</span>
              <h1 class='mb-4'>Best Restaurant</h1>
            </div>

          </div>
        </div>
      </div>";
		          
	              }












function getpro(){
	global $db;
    
									$sql = "select * from products order by 1 DESC LIMIT 0,1";
									$query = mysqli_query($db,$sql);
									$row = mysqli_fetch_array($query);
										$product_id=$row['product_id'];
										$product_name= $row['product_title'];
										$product_img =$row['product_img'];
										$product_price = $row['product_price'];
										$product_disc= $row['product_desc'];
										echo "
        	<div class='col-md-12 col-lg-6 d-flex align-self-stretch'>
        		<div class='menus d-sm-flex ftco-animate align-items-stretch'>
              <div class='menu-img img'  style='background-image: url(admin_area/product_images/$product_img);'>
			  </div>
              <div class='text d-flex align-items-center'>
								<div>
	              	<div class='d-flex'>
		                <div class='one-half'>
		                  <h3>$product_name</h3>
		                </div>
		                <div class='one-forth'>
		                  <span class='price'>$$product_price</span>
		                </div>
		              </div>
		              <p><span>$product_disc</span></p>
		              <p><a href='#' class='btn btn-primary'>Order now</a></p>
	              </div>
              </div>
            </div>
        	</div>";
			
			
			
			$sql = "select * from products order by 1 DESC LIMIT 1,2";
									$query = mysqli_query($db,$sql);
									$row = mysqli_fetch_array($query);
										$product_id=$row['product_id'];
										$product_name= $row['product_title'];
										$product_img =$row['product_img'];
										$product_price = $row['product_price'];
										$product_disc= $row['product_desc'];
										echo "
        	<div class='col-md-12 col-lg-6 d-flex align-self-stretch'>
        		<div class='menus d-sm-flex ftco-animate align-items-stretch'>
              <div class='menu-img img'  style='background-image: url(admin_area/product_images/$product_img);'>
			  </div>
              <div class='text d-flex align-items-center'>
								<div>
	              	<div class='d-flex'>
		                <div class='one-half'>
		                  <h3>$product_name</h3>
		                </div>
		                <div class='one-forth'>
		                  <span class='price'>$$product_price</span>
		                </div>
		              </div>
		              <p><span>$product_disc</span></p>
		              <p><a href='#' class='btn btn-primary'>Order now</a></p>
	              </div>
              </div>
            </div>
        	</div>";
			
			
			
			
			
			$sql = "select * from products order by 1 DESC LIMIT 2,3";
									$query = mysqli_query($db,$sql);
									$row = mysqli_fetch_array($query);
										$product_id=$row['product_id'];
										$product_name= $row['product_title'];
										$product_img =$row['product_img'];
										$product_price = $row['product_price'];
										$product_disc= $row['product_desc'];
										echo "
        	<div class='col-md-12 col-lg-6 d-flex align-self-stretch'>
        		<div class='menus d-sm-flex ftco-animate align-items-stretch'>
              <div class='menu-img img order-md-last'  style='background-image: url(admin_area/product_images/$product_img);'>
			  </div>
              <div class='text d-flex align-items-center'>
								<div>
	              	<div class='d-flex'>
		                <div class='one-half'>
		                  <h3>$product_name</h3>
		                </div>
		                <div class='one-forth'>
		                  <span class='price'>$$product_price</span>
		                </div>
		              </div>
		              <p><span>$product_disc</span></p>
		              <p><a href='#' class='btn btn-primary'>Order now</a></p>
	              </div>
              </div>
            </div>
        	</div>";
			
			
			
			
			$sql = "select * from products order by 1 DESC LIMIT 3,4";
									$query = mysqli_query($db,$sql);
									$row = mysqli_fetch_array($query);
										$product_id=$row['product_id'];
										$product_name= $row['product_title'];
										$product_img =$row['product_img'];
										$product_price = $row['product_price'];
										$product_disc= $row['product_desc'];
										echo "
        	<div class='col-md-12 col-lg-6 d-flex align-self-stretch'>
        		<div class='menus d-sm-flex ftco-animate align-items-stretch'>
              <div class='menu-img img order-md-last'  style='background-image: url(admin_area/product_images/$product_img);'>
			  </div>
              <div class='text d-flex align-items-center'>
								<div>
	              	<div class='d-flex'>
		                <div class='one-half'>
		                  <h3>$product_name</h3>
		                </div>
		                <div class='one-forth'>
		                  <span class='price'>$$product_price</span>
		                </div>
		              </div>
		              <p><span>$product_disc</span></p>
		              <p><a href='#' class='btn btn-primary'>Order now</a></p>
	              </div>
              </div>
            </div>
        	</div>";
			
			
			
			
			
			
			$sql = "select * from products order by 1 DESC LIMIT 4,5";
									$query = mysqli_query($db,$sql);
									$row = mysqli_fetch_array($query);
										$product_id=$row['product_id'];
										$product_name= $row['product_title'];
										$product_img =$row['product_img'];
										$product_price = $row['product_price'];
										$product_disc= $row['product_desc'];
										echo "
        	<div class='col-md-12 col-lg-6 d-flex align-self-stretch'>
        		<div class='menus d-sm-flex ftco-animate align-items-stretch'>
              <div class='menu-img img'  style='background-image: url(admin_area/product_images/$product_img);'>
			  </div>
              <div class='text d-flex align-items-center'>
								<div>
	              	<div class='d-flex'>
		                <div class='one-half'>
		                  <h3>$product_name</h3>
		                </div>
		                <div class='one-forth'>
		                  <span class='price'>$$product_price</span>
		                </div>
		              </div>
		              <p><span>$product_disc</span></p>
		              <p><a href='#' class='btn btn-primary'>Order now</a></p>
	              </div>
              </div>
            </div>
        	</div>";
			
			
			
			
			
			$sql = "select * from products order by 1 DESC LIMIT 5,6";
									$query = mysqli_query($db,$sql);
									$row = mysqli_fetch_array($query);
										$product_id=$row['product_id'];
										$product_name= $row['product_title'];
										$product_img =$row['product_img'];
										$product_price = $row['product_price'];
										$product_disc= $row['product_desc'];
										echo "
        	<div class='col-md-12 col-lg-6 d-flex align-self-stretch'>
        		<div class='menus d-sm-flex ftco-animate align-items-stretch'>
              <div class='menu-img img'  style='background-image: url(admin_area/product_images/$product_img);'>
			  </div>
              <div class='text d-flex align-items-center'>
								<div>
	              	<div class='d-flex'>
		                <div class='one-half'>
		                  <h3>$product_name</h3>
		                </div>
		                <div class='one-forth'>
		                  <span class='price'>$$product_price</span>
		                </div>
		              </div>
		              <p><span>$product_disc</span></p>
		              <p><a href='#' class='btn btn-primary'>Order now</a></p>
	              </div>
              </div>
            </div>
        	</div>";
									
}
?>