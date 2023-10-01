<section class="home-slider owl-carousel js-fullheight">
      <div class="slider-item js-fullheight">
      <?php
	  $sql = "select * from slider LIMIT 0,1";
	  $query = mysqli_query($db,$sql);
	  while($row = mysqli_fetch_array($query)){
		  $slider_name= $row['slider_name'];
		  $slider_img =$row['slider_img'];
		  echo "<div class='item active'>
		       <img src='images/$slider_img'>
		      </div>";
		  }
	   ?>

      	<div class="overlay">
        <div class="container">
          <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-12 col-sm-12 text-center ftco-animate">
            	<span class="subheading">Volar Vegas</span>
              <h1 class="mb-4">Best Restaurant</h1>
            </div>
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item js-fullheight">
      <?php
	  $sql = "select * from slider LIMIT 1,2";
	  $query = mysqli_query($db,$sql);
	  while($row = mysqli_fetch_array($query)){
		  $slider_name= $row['slider_name'];
		  $slider_img =$row['slider_img'];
		  echo "<div class='item';>
		       <img src='images/$slider_img'>
		      </div>";
		  }
	   ?>
      	<div class="overlay">
        <div class="container">
          <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-12 col-sm-12 text-center ftco-animate">
            	<span class="subheading">Volar Vegas</span>
              <h1 class="mb-4">Nutritious &amp; Tasty</h1>
            </div>
          </div>
          </div>
        </div>
      </div>

      <div class="slider-item js-fullheight">
      <?php
	  $sql = "select * from slider LIMIT 2,3";
	  $query = mysqli_query($db,$sql);
	  while($row = mysqli_fetch_array($query)){
		  $slider_name= $row['slider_name'];
		  $slider_img =$row['slider_img'];
		  echo "<div class='item';>
		       <img src='images/$slider_img'>
		      </div>";
		  }
	   ?>
      	<div class="overlay">
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-12 col-sm-12 text-center ftco-animate">
            	<span class="subheading">Volar Vegas</span>
              <h1 class="mb-4">Delicious Specialties</h1>
            </div>
           </div>
          </div>
        </div>
      </div>
    </section>