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
    </style>


<body id="page-top">
    <!-- Page Wrapper -->
   
 <div id="wrapper"  >
<?php include("base/sidebar.php"); ?>
<?php include('base/top.php'); ?>


 <div class="container-fluid">
   

<div
style="width:100%;padding:2%;background:white;border-radius:5px">
<div class="row">
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
<hr>
<div class="card" style="margin-bottom:2%;padding-bottom:2%;">
<div class="container"> 
    <div class="card-body">
        <div class="row">
    <div class="col-sm-9">
<p style = "font-size:21px;font-weight:bold;">Edit this Station<p>
    </div>
    <div class="col-sm-3" >
    <p class = "btn btn-danger">Delete OMC <i class="fa fa-trash"></i></p>
    </div>
    </div>
    <br>
    
    <div class="row">
        
     <div class="col-md-4 mb-4">
<div class="md-form">
<i class="fa fa-building prefix grey-text"></i>
<input type="text" id="OMC" class="form-control" value="SHELL">
<label for="OMC">OMC name</label>
    </div>
        </div>
        <div class="col-md-4 mb-4">
<div class="md-form" >
<i class="fa fa-image prefix grey-text"></i>
<input type="text"  id="logo" class="form-control" value="STATION 1"
 >
 <label for="OMC">Station name</label>

    </div>
        </div>

 <div class="col-md-4 mb-4">
<div class="md-form" >
<i class="fa fa-image prefix grey-text"></i>
<input type="text"  id="logo" class="form-control" value="ASSHONGMAN"
 >
 <label for="OMC">Station branch</label>

    </div>
        </div>   

         <div class="col-md-4 mb-4">
<div class="md-form" >
<i class="fa fa-image prefix grey-text"></i>
<input type="text"  id="logo" class="form-control" value="P.O.BOX GP 2016"
 >
 <label for="OMC">Station Address</label>

    </div>
        </div>

 <div class="col-md-4 mb-4">
<div class="md-form" >
<i class="fa fa-image prefix grey-text"></i>
<input type="text"  id="logo" class="form-control" value="29° 52' N"
 >
 <label for="OMC">Station Longitude</label>

    </div>
        </div>

     <div class="col-md-4 mb-4">
<div class="md-form" >
<i class="fa fa-image prefix grey-text"></i>
<input type="text"  id="logo" class="form-control" value="2° 29' E"
 >
 <label for="OMC">Station Latitude</label>

    </div>
        </div>
        </div>                                       
        
    

<section class="heading-1">
    <span> 
<i class="fa fa-cart-arrow-down" > Let's manage your services
</i>
</span>
</section>

<section style="padding-top:5%;">

<div class ="input_fields_wrap">

      <div class="row" >
        
     <div class="col-md-5 mb-4">
<div class="md-form">
<i class="fa fa-cube prefix grey-text"></i>
<input type="text" name="product[]" class="form-control" value="Car Wash">
<label for="Product">Service</label>
    </div>
        </div>
        <div class="col-md-3 mb-4">
<div class="md-form" >
<i class="fa fa-money prefix grey-text"></i>
<input type="text"  name="price[]" class="form-control" value="14.00" >
<label for="price">Pricing </label>  
</div>
</div>
<div style="height:0%;color:white;background:red" class="remove_field btn " >Del</div>
     </div> 

       <div class="row" >
     <div class="col-md-5 mb-4">
<div class="md-form">
<i class="fa fa-cube prefix grey-text"></i>
<input type="text" name="product[]" class="form-control" value="Car Repairs">
<label for="Product">Service</label>
    </div>
        </div>
        <div class="col-md-3 mb-4">
<div class="md-form" >
<i class="fa fa-money prefix grey-text"></i>
<input type="text"  name="price[]" class="form-control" value="16.00" >
<label for="price">Pricing</label>  
</div>
</div>

<div style="height:0%;backgwhite;background:red" class="remove_field btn  " >Del</div>
     </div> 

</div>
</section>


</div>
<div class="row" style="padding-left:2%">
     <div style="height:0%;color:white;" class="add_field_button btn btn-primary " >Add Service</div>

<div class="col-sm-6">
    <button type="Submit" class="btn btn-info">Update</button>
    </div>
    </div>
</form>
 </div></div>
<?php include("base/end.php"); ?>

</div>

</div>


</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/js/mdb.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
	var max_fields = 15;
	var wrapper = $(".input_fields_wrap");
	var add_button = $(".add_field_button");
	var x = 1; //initlal text box count
	$(add_button).click(function(e){
	e.preventDefault();
	if(x < max_fields){ 
	x++;
$(wrapper).append(' <div class="row" ><div class="col-md-5 mb-4"><div class="md-form"><i class="fa fa-cube prefix grey-text"></i><input type="text" name="product[]" class="form-control" ><label for="Product">Service</label></div></div><div class="col-md-3 mb-4"><div class="md-form" ><i class="fa fa-money prefix grey-text"></i><input type="text"  name="price[]" class="form-control"  ><label for="price">Pricing</label></div></div><div style="height:0%;backgwhite;background:red" class="remove_field btn  " >Del</div></div></div>')}});
	$(wrapper).on("click",".remove_field", function(e){ 
	e.preventDefault(); $(this).parent('div').remove(); x--;
	})
});
</script>

</html>