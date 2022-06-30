<!DOCTYPE html>
<html lang="en">
<?php include('base/head.php'); ?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

<style>
@import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css);
@import url(https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.3/css/mdb.min.css);

.hm-gradient {
    background-image: linear-gradient(to top, #f3e7e9 0%, #e3eeff 99%, #e3eeff 100%);
}
.darken-grey-text {
    color: #2E2E2E;
}
.danger-text {
    color: #ff3547; }
.default-text {
    color: #2BBBAD; 
}
.info-text {
    color: #33b5e5; 
}
.form-white .md-form label {
  color: #fff; 
}
.form-white input[type=text]:focus:not([readonly]) {
    border-bottom: 1px solid #fff;
    -webkit-box-shadow: 0 1px 0 0 #fff;
    box-shadow: 0 1px 0 0 #fff; 
}
.form-white input[type=text]:focus:not([readonly]) + label {
    color: #fff; 
}
.form-white input[type=password]:focus:not([readonly]) {
    border-bottom: 1px solid #fff;
    -webkit-box-shadow: 0 1px 0 0 #fff;
    box-shadow: 0 1px 0 0 #fff; 
}
.form-white input[type=password]:focus:not([readonly]) + label {
    color: #fff; 
}
.form-white input[type=password], .form-white input[type=text] {
    border-bottom: 1px solid #fff; 
}
.form-white .form-control:focus {
    color: #fff;
}
.form-white .form-control {
    color: #fff;
}
.form-white textarea.md-textarea:focus:not([readonly]) {
    border-bottom: 1px solid #fff;
    box-shadow: 0 1px 0 0 #fff;
    color: #fff; 
}
.form-white textarea.md-textarea  {
    border-bottom: 1px solid #fff;
    color: #fff;
}
.form-white textarea.md-textarea:focus:not([readonly])+label {
    color: #fff;
}
.ripe-malinka-gradient {
    background-image: linear-gradient(120deg, #f093fb 0%, #f5576c 100%);
}
.near-moon-gradient {
    background-image: linear-gradient(to bottom, #5ee7df 0%, #b490ca 100%);
}

.heading-1{
  position:relative;
  text-align: center;
 
}
.heading-1:before {
  content: "";
  display: block;
  border-top: solid 3px lightblue;
  width: 95%;
  height: 2px;
  position: absolute;
  top: 50%;
  left: 2%;
  z-index: 0;
}
.heading-1 span {
  background: #fff;
  padding: 2%;
  padding-left: 5%;
  padding-right: 5%;
  position: relative;
  z-index: 1;
  border: 1px solid lightblue;
  border-radius:5px;
  font-size:21px;
  font-weight:bold;
  

}

.select {
  font-family:
    'Roboto','Helvetica','Arial',sans-serif;
	position: relative;
	width: 350px;
}

.select-text {
	position: relative;
	font-family: inherit;
	background-color: transparent;
	width: 350px;
	padding: 10px 10px 10px 0;
	font-size: 18px;
	border-radius: 0;
	border: none;
	border-bottom: 1px solid rgba(0,0,0, 0.12);
}

/* Remove focus */
.select-text:focus {
	outline: none;
	border-bottom: 1px solid rgba(0,0,0, 0);
}

	/* Use custom arrow */
.select .select-text {
	appearance: none;
	-webkit-appearance:none
}

.select:after {
	position: absolute;
	top: 18px;
	right: 10px;
	/* Styling the down arrow */
	width: 0;
	height: 0;
	padding: 0;
	content: '';
	border-left: 6px solid transparent;
	border-right: 6px solid transparent;
	border-top: 6px solid rgba(0, 0, 0, 0.12);
	pointer-events: none;
}


/* LABEL ======================================= */
.select-label {
	color: rgba(0,0,0, 0.26);
	font-size: 18px;
	font-weight: normal;
	position: absolute;
	pointer-events: none;
	left: 0;
	top: 10px;
	transition: 0.2s ease all;
}

/* active state */
.select-text:focus ~ .select-label, .select-text:valid ~ .select-label {
	color: #2F80ED;
	top: -20px;
	transition: 0.2s ease all;
	font-size: 14px;
}

/* BOTTOM BARS ================================= */
.select-bar {
	position: relative;
	display: block;
	width: 350px;
}

.select-bar:before, .select-bar:after {
	content: '';
	height: 2px;
	width: 0;
	bottom: 1px;
	position: absolute;
	background: #2F80ED;
	transition: 0.2s ease all;
}

.select-bar:before {
	left: 50%;
}

.select-bar:after {
	right: 50%;
}

/* active state */
.select-text:focus ~ .select-bar:before, .select-text:focus ~ .select-bar:after {
	width: 50%;
}

/* HIGHLIGHTER ================================== */
.select-highlight {
	position: absolute;
	height: 60%;
	width: 100px;
	top: 25%;
	left: 0;
	pointer-events: none;
	opacity: 0.5;
}

.attendant{
    font-family: "Font Awesome 5 Free";
    font-size: 15px;
    
}



    </style>


<body id="page-top">
    <!-- Page Wrapper -->
   
 <div id="wrapper"  >
<?php include("base/sidebar.php"); ?>
<?php include('base/top.php'); ?>


 <div class="container-fluid">
   

<div
style="width:100%;padding:3%;background:white;border-radius:5px">
<div class="col-sm-12" style="padding-bottom:2%">
<div class = "row">
  <div class = "col-sm-1">
<i class="fa fa-cubes-stacked"></i>    </div>
  <div class="col-sm-6">
 <h1 class="h3 mb-15 text-gray-800" >PAYMEST HISTORY</h1>
<h6 class="h6 mb-15 text-gray-500" >View all payments made</h6>
</div>
</div>
</div>
 
<div class = "row" >
    <div class = "row">
        <div class = "col-sm-1">
<i class="fa fa-building prefix grey-text" style="font-size:30px"></i>
</div>
    <div class = "col-sm-4">
       
 <div class="select">
<select class="select-text" required>
<option value="" disabled selected></option>
<option value="1" class="attendant">SHELL</option>
<option value="2" class="attendant">GOIL</option>
<option value="3" class="attendant">TELENERGY</option>
</select>
<span class="select-highlight"></span>
<span class="select-bar"></span>
<label class="select-label">OMC</label>
</div>
</div>
</div>
<div class = "row">
<div class = "col-sm-1">
<i class="fa fa-image prefix grey-text" style="font-size:30px"></i>
</div>
    <div class = "col-sm-6">  
<div class="select">
<select class="select-text" required>
<option value="" disabled selected></option>
<option value="1" class="attendant">STATION 1</option>
<option value="2" class="attendant">STATION 2</option>
<option value="3" class="attendant">STATION 3</option>
</select>
<span class="select-highlight"></span>
<span class="select-bar"></span>
<label class="select-label">STATION</label>
</div>
</div>
</div>
<div>
<button class="btn btn-primary" type = "submit"> PAYMENTS </button>
</div>
 </div>
 </div>
<hr>
<div class="row" style="background:white;padding:2%;">
    <div class="col-sm-2" style="border-right:1px solid lightgray;display:flex;justify-content:center;align-items:center">
<img src="https://logos-world.net/wp-content/uploads/2020/11/Shell-Logo.png" class="rounded-circle" style="width:100%;"
  alt="logo" />
  </div>
  <div style="padding-left:1%"> 
 <h1 class="h3 mb-15 text-gray-800" >SHELL</h1>
  <h6>STATION 1</h6>
  </div>
  </div>
 </div>



<div style = "background:white"><table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col"><i class="fa fa-sun"></i></th>
      <th scope="col">Profile</th>
      <th scope="col">Customer</th>
      <th scope="col">Service</th>
      <th scope="col">Payment Date</th>
      <th scope="col">Payment Time</th>
      <th scope="col">Payment Type</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td style="width:10%;"><img src="https://www.w3schools.com/howto/img_avatar.png" class="rounded-circle" style="width:50%;"
  alt="profile" /></td>
      <td>Mark</td>
      <td>Otto</td>
      <td>23/09/2022</td>
      <td>05:33 pm</td>
      <td>Mobile Money</td>

    </tr>
    <tr>
      <th scope="row">2</th>
       <td style="width:10%;"><img src="https://www.w3schools.com/howto/img_avatar.png" class="rounded-circle" style="width:50%;"
  alt="profile" /></td>
      <td>Jacob</td>
      <td>Thornton</td>
     <td>23/09/2022</td>
      <td>01:12 pm</td>
      <td>Cash</td>

    </tr>
    <tr>
      <th scope="row">3</th>
      <td style="width:10%;"><img src="https://www.w3schools.com/howto/img_avatar.png" class="rounded-circle" style="width:50%;"
  alt="profile" /></td>
      <td>Larry</td>
      <td>Robenson</td>
    <td>23/09/2022</td>
      <td>05:13 pm</td>
      <td>Cash </td>

    </tr>
     <tr>
      <th scope="row">4</th>
       <td style="width:10%;"><img src="https://www.w3schools.com/howto/img_avatar.png" class="rounded-circle" style="width:50%;"
  alt="profile" /></td>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>23/09/2022</td>
      <td>02:33 pm</td>
      <td>Mobile Money</td>

    </tr>
     <tr>
      <th scope="row">5</th>
       <td style="width:10%;"><img src="https://www.w3schools.com/howto/img_avatar.png" class="rounded-circle" style="width:50%;"
  alt="profile" /></td>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>23/09/2022</td>
      <td>07:33 am</td>
      <td>Cash</td>

    </tr>
     <tr>
      <th scope="row">6</th>
       <td style="width:10%;"><img src="https://www.w3schools.com/howto/img_avatar.png" class="rounded-circle" style="width:50%;"
  alt="profile" /></td>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>23/09/2022</td>
      <td>05:33 pm</td>
      <td>Mobile Money</td>

    </tr>
     <tr>
      <th scope="row">7</th>
       <td style="width:10%;"><img src="https://www.w3schools.com/howto/img_avatar.png" class="rounded-circle" style="width:50%;"
  alt="profile" /></td>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>23/09/2022</td>
      <td>05:33pm </td>
      <td>Mobile Money</td>

    </tr>
     <tr>
      <th scope="row">8</th>
       <td style="width:10%;"><img src="https://www.w3schools.com/howto/img_avatar.png" class="rounded-circle" style="width:50%;"
  alt="profile" /></td>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>23/09/2022</td>
      <td>05:33 pm</td>
      <td>Mobile Money</td>

    </tr>
  </tbody>
</table>

</div>

<?php include("base/end.php"); ?>

</div>

</div>


</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/js/mdb.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</html>