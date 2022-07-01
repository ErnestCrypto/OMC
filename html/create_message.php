<!DOCTYPE html>
<html lang="en">
<?php include('base/head.php'); ?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src=" https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
style="width:100%;padding:2%;background:white;border-radius:5px">
<div class="row">
  <div style="padding-left:20px">
<i class="fa fa-pagelines" style="font-size:60px;color:pink"></i>
    </div>
  <div class="col-sm-6">
 <h1 class="h3 mb-15 text-gray-800" >Write a new message</h1>
 <h6 class="h6 mb-15 text-gray-500" >Broadcast the message to others</h6>

 </div>
 </div>
</div>
<hr>
<div class="card" style="margin-bottom:2%;padding-bottom:2%;">
<div class="container"> 
    <div class="card-body">
<p style = "font-size:21px;font-weight:bold;">Write a new message...<p>
<form action="#" method="POST">
<div class="row">
       <div class="col-lg-3">
     <div class="button-group">
<button type="button" class="btn btn-default btn-lg dropdown-toggle" data-toggle="dropdown">OMC</button>
<ul class="dropdown-menu" style="padding:1%">
  <li><a href="#" class="small" data-value="option1" tabIndex="-1"><input type="checkbox"/> &nbsp;ALL OMCS</a></li>
  <li><a href="#" class="small" data-value="option2" tabIndex="-1"><input type="checkbox"/> &nbsp;SHELL</a></li>
  <li><a href="#" class="small" data-value="option3" tabIndex="-1"><input type="checkbox"/> &nbsp;GOIL</a></li>
  <li><a href="#" class="small" data-value="option4" tabIndex="-1"><input type="checkbox"/> &nbsp;TELENERGY</a></li>
  <li><a href="#" class="small" data-value="option5" tabIndex="-1"><input type="checkbox"/> &nbsp;PINFUEL</a></li>
  <li><a href="#" class="small" data-value="option6" tabIndex="-1"><input type="checkbox"/> &nbsp;FUEL</a></li>
</ul>
  </div>
</div>


<div class="col-lg-3">
     <div class="button-group">
<button type="button" class="btn btn-default btn-lg dropdown-toggle" data-toggle="dropdown">STATION</button>
<ul class="dropdown-menu" style="padding:1%">
  <li><a href="#" class="small" data-value="option1" tabIndex="-1"><input type="checkbox"/> &nbsp;ALL STATIONS</a></li>
  <li style="color:orange">SHELL</li>
    <li><a href="#" class="small" data-value="option3" tabIndex="-1"><input type="checkbox"/> &nbsp;STATION 1</a></li>
  <li><a href="#" class="small" data-value="option3" tabIndex="-1"><input type="checkbox"/> &nbsp;STATION 2</a></li>
  <li><a href="#" class="small" data-value="option3" tabIndex="-1"><input type="checkbox"/> &nbsp;STATION 3</a></li>
  <li  style="color:orange"> GOIl</li>
  <li><a href="#" class="small" data-value="option5" tabIndex="-1"><input type="checkbox"/> &nbsp;STATION 1</a></li>
  <li><a href="#" class="small" data-value="option6" tabIndex="-1"><input type="checkbox"/> &nbsp;STATION 2</a></li>
</ul>
  </div>
</div>



<div class="col-lg-3">
     <div class="button-group">
<button type="button" class="btn btn-default btn-lg dropdown-toggle" data-toggle="dropdown">ATTENDANTS</button>
<ul class="dropdown-menu" style="padding:1%">
  <li><a href="#" class="small" data-value="option1" tabIndex="-1"><input type="checkbox"/> &nbsp;ALL ATTENDANTS</a></li>
    <li><a href="#" class="small" data-value="option3" tabIndex="-1"><input type="checkbox"/> &nbsp;SHELL ATTENDANTS</a></li>
  <li><a href="#" class="small" data-value="option3" tabIndex="-1"><input type="checkbox"/> &nbsp;GOIL ATTENDANTS</a></li>
</ul>
  </div>
</div>





  </div> 
</div>     
</div>

	


<div class="media mt-3">
    <div class="col-sm-12">
       <h4>
                 <label for="file">
      <span class="fa fa-paperclip mr-2" aria-hidden="true" > Attachments</span>
      <input type="file" id="file" style="display:none" multiple>
</label></h4>
 <p class = "btn btn-info" onclick="FileDetails()"> Show Files</p>
 <p id="fp"></p>
<textarea class="wysihtml5 form-control" rows="9" placeholder=" Message..."></textarea>
                      </div>
                  </div>
<div class="text-right">
	<button type="submit" class="btn btn-primary waves-effect waves-light mt-3"><i class="fa fa-send mr-1"></i> Send</button>
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
var options = [];

$( '.dropdown-menu a' ).on( 'click', function( event ) {

   var $target = $( event.currentTarget ),
       val = $target.attr( 'data-value' ),
       $inp = $target.find( 'input' ),
       idx;

   if ( ( idx = options.indexOf( val ) ) > -1 ) {
      options.splice( idx, 1 );
      setTimeout( function() { $inp.prop( 'checked', false ) }, 0);
   } else {
      options.push( val );
      setTimeout( function() { $inp.prop( 'checked', true ) }, 0);
   }

   $( event.target ).blur();
      
   console.log( options );
   return false;
});
  </script>

<script>
    function FileDetails() {

        // GET THE FILE INPUT.
        var fi = document.getElementById('file');

        // VALIDATE OR CHECK IF ANY FILE IS SELECTED.
        if (fi.files.length > 0) {

            // THE TOTAL FILE COUNT.
            document.getElementById('fp').innerHTML =
                'Total Files: <b>' + fi.files.length + '</b></br >';

            // RUN A LOOP TO CHECK EACH SELECTED FILE.
            for (var i = 0; i <= fi.files.length - 1; i++) {

                var fname = fi.files.item(i).name;      // THE NAME OF THE FILE.
                var fsize = fi.files.item(i).size;      // THE SIZE OF THE FILE.

                // SHOW THE EXTRACTED DETAILS OF THE FILE.
                document.getElementById('fp').innerHTML =
                    document.getElementById('fp').innerHTML + '<br /> ' +
                        fname + ' (<b>' + fsize + '</b> bytes)';
            }
        }
        else { 
            alert('Please select a file.') 
        }
    }
</script>
</html>