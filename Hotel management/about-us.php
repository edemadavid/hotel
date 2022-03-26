<?php
  include "mainheader.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.col {
  float: center;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
  height: 65%;
  margin-top: 5px;

  
}

.about-section {
  padding: 50px;
  text-align: center;
  background: #ececec;
  color: black;
 
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: black;
  background-color:#dc3545;
  text-align: center;
  cursor: pointer;
  width: 100%;
  border-radius: 5px;
}
.section{
  width: 50%;
  height: 500px;
  margin-top: 5%;
  margin-bottom: 5%;
  float:center;
}
.start{
  padding-top: 30px;
}
.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .col {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <div class="container px-3">
      <h1 class="my-3 py-3">About Us</h1>
  </div>
  <div class="">
    
  </div>
  
</div>
<div class="container my-5">
  <div class="row justify-content-around mb-5">
    
    <div class="col-lg-5">
      <div class="">
        <img src="https://walexbiznig.com/fileshare/wl/?id=fePGMXzv8vQspUZ8scXQ6bXWkmow9CWV&fmode=open" alt="" class="img-fluid">
      </div>
    </div>
    <div class="col-lg-5 d-flex align-items-center justify-content-center ">
      <div class="">
        <div class="">
            <p class=" my-3 text-muted d-flex align-items-center justify-content-center align-self-center" style="font-size: 18px; line-height: 2rem;">The JJDVC Hotel is a luxurious five-star hotel in the heart of the city. The hotel has many different amenities to offer including a fitness center, an indoor pool, and a luxurious spa. There are also many dining options available to guests, including three different restaurants and a bar. This hotel is perfect for anyone looking for a luxurious experience in Abuja.</p>
        </div>
      </div>
    </div>
  </div>
  
</div>

<!-- <div class="container">
  <div class="row my-5">
    <div class="col-lg-3 card">
      <div class="">
        <img src="https://walexbiznig.com/fileshare/wl/?id=NJYgFq2softglp7oKjyiHb38NrHo0RPR&fmode=open" alt="resturant" class="img-fluid">
      </div>
      <div class="">
        <h6 class="display-6">
          Resturant
        </h6>
        <p class="text-muted">
        Step into our elegant fine dining restaurant to enjoy mouth watering Nigerian delicacies and continental cousines.
        </p>
      </div>
    </div>
    <div class="col-lg-3 card">
      <div class="">
        <img src="https://walexbiznig.com/fileshare/wl/?id=QuVKOhSyLBuq1bDBkOtaoERNwSB4r6Ls&fmode=open" alt="resturant" class="img-fluid">
      </div>
      <div class="">
        <h6 class="display-6">
         Fitness Center
        </h6>
        <p class="text-muted">
        We offer a variety of services to help you get fit and stay healthy. We have a fully stocked weight room, including a large variety of free weights, machines, and other equipment.
        </p>
      </div>
    </div>
    <div class="col-lg-3 card">
      <div class="">
        <img src="https://walexbiznig.com/fileshare/wl/?id=sBlCW5XP7fuVmGvxqw3OLR6R0oVKwLML&fmode=open" alt="resturant" class="img-fluid">
      </div>
      <div class="">
        <h6 class="display-6">
          Casino
        </h6>
        <p class="text-muted">
        A place to chill and relax.
        </p>
      </div>
    </div>
  </div>
</div> -->

<div class="container my-5">
    <div class="row justify-content-around">
        <div class="col-lg-3">
              <div class="text-center">
                    <img src="https://walexbiznig.com/fileshare/wl/?id=NJYgFq2softglp7oKjyiHb38NrHo0RPR&fmode=open" class="card-img-top" alt="..." style="width: 300px; height: 260px;">
                    <div class="card-body">
                        <h5 class="card-title">Resturant</h5>
                        <p class="card-text"> Step into our elegant fine dining restaurant to enjoy mouth watering Nigerian delicacies and continental cousines.</p>
                    </div>
              </div>
        </div>
        <div class="col-lg-3">
            <div class="text-center">
              <img src="https://walexbiznig.com/fileshare/wl/?id=QuVKOhSyLBuq1bDBkOtaoERNwSB4r6Ls&fmode=open" class="card-img-top" alt="..."  style="width: 300px; height: 260px;">
              <div class="card-body">
                <h5 class="card-title">Fitness Center</h5>
                <p class="card-text">We offer a variety of services to help you get fit and stay healthy. We have a fully stocked weight room, including a large variety of free weights, machines, and other equipment.</p>
              </div>
            </div>
        </div>
        <div class="col-lg-3">
          <div class="text-center">
            <img src="https://walexbiznig.com/fileshare/wl/?id=sBlCW5XP7fuVmGvxqw3OLR6R0oVKwLML&fmode=open" class="card-img-top" alt="..."  style="width: 300px; height: 260px;">
            <div class="card-body">
              <h5 class="card-title">Casino</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            </div>
          </div>
        </div>
    </div>
</div>


<div class="start"><h2 style="text-align:center">Our Team</h2></div>
<div class="">
  <div class="container ">
      <div class="row justify-content-center">
        <div class="col-lg-4">
          <div class="card">
            <img src="assets/img/new1.png" alt="Daniel" style="width:100%"><img src=".\assets\img\flower-removebg-preview.png" alt="Mike" style="width:10%">
            <div class="container">
              <h4>Tony Stark</h4>
              <p class="title">CEO & Founder</p>
              <p>Some text that describes me lorem ipsum ipsum lorem.</p>
              <p>tony@example.com</p>
              <p><button class="button text-white">Contact</button></p>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="card">
            <img src="assets/img/new4.png" alt="Mike" style="width:100%"><img src=".\assets\img\flower-removebg-preview.png" alt="Mike" style="width:10%">
            <div class="container">
              <h4>Bruce Banner</h4>
              <p class="title">Art Director</p>
              <p>Some text that describes me lorem ipsum ipsum lorem.</p>
              <p>bruce@example.com</p>
              <p><button class="button text-white">Contact</button></p>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4">
          <div class="card">
            <img src="assets/img/new2.png" alt="Janelle" style="width:100%"><img src=".\assets\img\flower-removebg-preview.png" alt="Mike" style="width:10%">
            <div class="container">
              <h4>Natasha Romanoff</h4><br>
              <p class="title">Designer</p>
              <p>Some text that describes me lorem ipsum ipsum lorem.</p>
              <p>natasha@example.com</p>
              <p><button class="button text-white">Contact</button></p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card">
            <img src="assets/img/new3.png" alt="Janelle" style="width:100%"><img src=".\assets\img\flower-removebg-preview.png" alt="Mike" style="width:10%">
            <div class="container">
              <h4>Steve Rogers</h4>
              <p class="title">Chief Developer</p>
              <p>Some text that describes me lorem ipsum ipsum lorem.</p>
              <p>steve@example.com</p>
              <p><button class="button text-white">Contact</button></p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card">
            <img src="assets\img\new5.jpg" alt="Janelle" style="width:100%"><img src=".\assets\img\flower-removebg-preview.png" alt="Mike" style="width:10%">
            <div class="container">
              <h4>Stephen Strange</h4>
              <p class="title">Marketing Manager</p>
              <p>Some text that describes me lorem ipsum ipsum lorem.</p>
              <p>stephen@example.com</p>
              <p><button class="button text-white">Contact</button></p>
            </div>
          </div>
        </div>
      </div>
  </div>    
</div>


</body>
</html>
<?php
include "mainfooter.php";

?>
