<?php

include ('db.php');


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
            	<span class='subheading'>Volar Vegas</span>
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
            	<span class='subheading'>Volar Vegas</span>
              <h1 class='mb-4'>Nutritious &amp; Tasty</h1>
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
            	<span class='subheading'>Volar Vegas</span>
              <h1 class='mb-4'>Delicious Specialties</h1>
            </div>

          </div>
        </div>
      </div>";
		          
	              
				  ?>