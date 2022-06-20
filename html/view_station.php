<!DOCTYPE html>
<html lang="en">
<?php include('base/head.php'); ?>


<style>
tr.h
ide-table-padding td {
  padding: 0;
}

.expand-button {
	position: relative;
}

.icon::before {
    display: inline-block;
    font-style: normal;
    font-variant: normal;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
  } 

.accordion-toggle .expand-button:after
{
  position: absolute;
  left:.75rem;
  top: 50%;
  transform: translate(0, -50%);
  font-family: "Font Awesome 5 Free";
    font-weight: 900;
  content: '\f107';
}




.accordion-toggle.collapsed .expand-button:after
{
  font-family: "Font Awesome 5 Free";
    font-weight: 900;
    content: "\f105";
}
    </style>







<body id="page-top">
    <!-- Page Wrapper -->
   
 <div id="wrapper"  >
<?php include("base/sidebar.php"); ?>
<?php include('base/top.php'); ?>

 <div class="container-fluid">

 <h1 class="h3 mb-15 text-gray-800" >View all your STATIONS</h1>
  <h6>This is your OMC list</h6>
 </div>
<hr>
<section style="background:white;border-radius:5px">
  
    <div class="container my-4" >
<div class="table-responsive">
    <div  style ="height:40%;overflow-y:scroll;">
  <table  class="table table-borderless" >
    <thead>
      <tr style="color:orange">
        <th scope="col" ><i class="fa fa-sun"></i></th>
        <th scope="col" class = "col-sm-6">OMC Logo</th>
        <th scope="col" class = "col-sm-6">OMC Name</th>
        
      </tr>
    </thead>
    <tbody>
      
<!--tr-->
<tr class="accordion-toggle collapsed" id="accordion1" data-toggle="collapse" data-parent="#accordion1" href="#collapseFive">
<td class="expand-button" style="width:10%;"></td>
<td style="width:10%;padding:0%"  class ="col"><img src="https://logos-world.net/wp-content/uploads/2020/11/Shell-Logo.png" class="rounded-circle" style="width:20%;"
  alt="logo" /></td>
<td class ="col">SHELL</td>
</tr>

<tr class="hide-table-padding">
<td></td>
<td colspan="9" class="col-sm-12" >
<div id="collapseFive" class="collapse in p-3" >
  <div class="row" >
    <div  style="width:100%;" class="accordion-toggle collapsed" id="accordion4" data-toggle="collapse" data-parent="#accordion1" href="#collapseFivesub1">
   <div class="row"  > 
    <div class="col-sm-1"><i class="fa fa-sun" style="color:orange"></i></div>
    <div class = "col" style="font-size:15px;font-weight:bold;color:orange;">STATION NAME</div>
    <div class = "col" style="font-size:15px;font-weight:bold;color:orange;">STATION BRANCH</div>
    <div class = "col" style="font-size:15px;font-weight:bold;color:orange;">STATION ADDRESS</div>
     <div class = "col" style="font-size:15px;font-weight:bold;color:orange;">STATION LONGITUDE</div>
    <div class = "col" style="font-size:15px;font-weight:bold;color:orange;">STATION LATITUDE</div>
    <div  class ="col"><a href ="#" class="text text-success" >EDIT</a></div>

</div>
<hr/>
</div> 
<!---->
<div  style="width:100%" class="accordion-toggle collapsed" id="accordion4" data-toggle="collapse" data-parent="#accordion1" href="#collapseFivesub1">
   <div class="row"  > 
    <div class="expand-button col-sm-1" ></div>
    <div class = "col" style="font-size:15px;font-weight:bold;">Station 1</div>
    <div class = "col" style="font-size:15px;font-weight:bold;">Ashongman</div>
    <div class = "col" style="font-size:15px;font-weight:bold;">P.O.BOX GP 2016</div>
        <div class = "col" style="font-size:15px;font-weight:bold;">29° 52' N</div>
    <div class = "col" style="font-size:15px;font-weight:bold;">2° 29' E</div>
<div  class ="col"><a href ="update_station.php" class="text text-success" ><i class="fa fa-pen" ></i></a></div>

</div>
<div class="hide-table-padding col" style="width:100%">
    <div> </div>
    <div colspan="12" > 
        <div id="collapseFivesub1" class="collapse in p-3">
    <div class="col-6" style="font-size:15px;font-weight:bold;color:orange">SERVICES</div>
    <hr>
 <div class="row">
   <div class="col-6">Super Market</div>
    <div class="col-4">Affordable </div>
  </div>
        </div>
    </div>
</div>
</div> 
<!---->

<!---->
<div  style="width:100%" class="accordion-toggle collapsed" id="accordion4" data-toggle="collapse" data-parent="#accordion1" href="#collapseFivesub2">
   <div class="row"  > 
    <div class="expand-button col-sm-1" ></div>
    <div class = "col" style="font-size:15px;font-weight:bold;">Station 2</div>
    <div class = "col" style="font-size:15px;font-weight:bold;">Dansoman</div>
    <div class = "col" style="font-size:15px;font-weight:bold;">P.O.BOX GP 2016</div>
        <div class = "col" style="font-size:15px;font-weight:bold;">29° 52' N</div>
    <div class = "col" style="font-size:15px;font-weight:bold;">2° 29' E</div>
<div  class ="col"><a href ="update_station.php" class="text text-success" ><i class="fa fa-pen" ></i></a></div>

</div>
<div class="hide-table-padding col" style="width:100%">
    <div> </div>
    <div colspan="12" > 
        <div id="collapseFivesub2" class="collapse in p-3">
    <div class="col-6" style="font-size:15px;font-weight:bold;color:orange">SERVICES</div>
    <hr>
 <div class="row">
   <div class="col-6">Super Market</div>
    <div class="col-4">Affordable </div>
  </div>
  <div class="row">
   <div class="col-6">Car Wash</div>
    <div class="col-4">GHC 12.00 </div>
  </div>
        </div>
    </div>
</div>
</div> 
<!---->



<!---->
<div  style="width:100%" class="accordion-toggle collapsed" id="accordion4" data-toggle="collapse" data-parent="#accordion1" href="#collapseFivesub3">
   <div class="row"  > 
    <div class="expand-button col-sm-1" ></div>
    <div class = "col" style="font-size:15px;font-weight:bold;">Station 3</div>
    <div class = "col" style="font-size:15px;font-weight:bold;">Agbogboa</div>
    <div class = "col" style="font-size:15px;font-weight:bold;">P.O.BOX GP 2016</div>
        <div class = "col" style="font-size:15px;font-weight:bold;">29° 52' N</div>
    <div class = "col" style="font-size:15px;font-weight:bold;">2° 29' E</div>
<div  class ="col"><a href ="update_station.php" class="text text-success" ><i class="fa fa-pen" ></i></a></div>

</div>
<div class="hide-table-padding col" style="width:100%">
    <div> </div>
    <div colspan="12" > 
        <div id="collapseFivesub3" class="collapse in p-3">
    <div class="col-6" style="font-size:15px;font-weight:bold;color:orange">SERVICES</div>
    <hr>
 <div class="row">
   <div class="col-6">Car Repairs</div>
    <div class="col-4">GHC 15.00</div>
  </div>
  <div class="row">
   <div class="col-6">Car Wash</div>
    <div class="col-4">GHC 12.00 </div>
  </div>
        </div>
    </div>
</div>
</div> 
<!---->

</div>
</div>
</td>
</tr>
<!--tr-->

   
<!--tr-->
<tr class="accordion-toggle collapsed" id="accordion2" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo">
<td class="expand-button" style="width:10%;"></td>
<td style="width:10%;padding:0%"  class ="col"><img src="https://www.ghanayello.com/img/gh/x/1528801315-22-ghana-oil-co-ltd-goil.jpg" class="rounded-circle" 
style="width:20%;"
  alt="logo" /></td>
<td class ="col">GOIL</td>
</tr>

<tr class="hide-table-padding">
<td></td>
<td colspan="9" class="col-sm-12" >
<div id="collapseTwo" class="collapse in p-3" >
  <div class="row" >
    <div  style="width:100%;" class="accordion-toggle collapsed" id="accordion4" data-toggle="collapse" data-parent="#accordion1" href="#collapseFivesub1">
   <div class="row"  > 
    <div class="col-sm-1"><i class="fa fa-sun" style="color:orange"></i></div>
    <div class = "col" style="font-size:15px;font-weight:bold;color:orange;">STATION NAME</div>
    <div class = "col" style="font-size:15px;font-weight:bold;color:orange;">STATION BRANCH</div>
    <div class = "col" style="font-size:15px;font-weight:bold;color:orange;">STATION ADDRESS</div>
     <div class = "col" style="font-size:15px;font-weight:bold;color:orange;">STATION LONGITUDE</div>
    <div class = "col" style="font-size:15px;font-weight:bold;color:orange;">STATION LATITUDE</div>
    <div  class ="col"><a href ="#" class="text text-success" >EDIT</a></div>

</div>
<hr/>
</div> 
<!---->
<div  style="width:100%" class="accordion-toggle collapsed" id="accordion4" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwosub1">
   <div class="row"  > 
    <div class="expand-button col-sm-1" ></div>
    <div class = "col" style="font-size:15px;font-weight:bold;">Station 1</div>
    <div class = "col" style="font-size:15px;font-weight:bold;">Ashongman</div>
    <div class = "col" style="font-size:15px;font-weight:bold;">P.O.BOX GP 2016</div>
        <div class = "col" style="font-size:15px;font-weight:bold;">29° 52' N</div>
    <div class = "col" style="font-size:15px;font-weight:bold;">2° 29' E</div>
    <div  class ="col"><a href ="update_station.php" class="text text-success" ><i class="fa fa-pen" ></i></a></div>


</div>
<div class="hide-table-padding col" style="width:100%">
    <div> </div>
    <div colspan="12" > 
        <div id="collapseTwosub1" class="collapse in p-3">
    <div class="col-6" style="font-size:15px;font-weight:bold;color:orange">SERVICES</div>
    <hr>
 <div class="row">
   <div class="col-6">Super Market</div>
    <div class="col-4">Affordable </div>
  </div>
        </div>
    </div>
</div>
</div> 
<!---->

<!---->
<div  style="width:100%" class="accordion-toggle collapsed" id="accordion4" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwosub2">
   <div class="row"  > 
    <div class="expand-button col-sm-1" ></div>
    <div class = "col" style="font-size:15px;font-weight:bold;">Station 2</div>
    <div class = "col" style="font-size:15px;font-weight:bold;">Dansoman</div>
    <div class = "col" style="font-size:15px;font-weight:bold;">P.O.BOX GP 2016</div>
        <div class = "col" style="font-size:15px;font-weight:bold;">29° 52' N</div>
    <div class = "col" style="font-size:15px;font-weight:bold;">2° 29' E</div>
    <div  class ="col"><a href ="update_station.php" class="text text-success" ><i class="fa fa-pen" ></i></a></div>


</div>
<div class="hide-table-padding col" style="width:100%">
    <div> </div>
    <div colspan="12" > 
        <div id="collapseTwosub2" class="collapse in p-3">
    <div class="col-6" style="font-size:15px;font-weight:bold;color:orange">SERVICES</div>
    <hr>
 <div class="row">
   <div class="col-6">Super Market</div>
    <div class="col-4">Affordable </div>
  </div>
  <div class="row">
   <div class="col-6">Car Wash</div>
    <div class="col-4">GHC 12.00 </div>
  </div>
        </div>
    </div>
</div>
</div> 
<!---->



<!---->
<div  style="width:100%" class="accordion-toggle collapsed" id="accordion4" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwosub3">
   <div class="row"  > 
    <div class="expand-button col-sm-1" ></div>
    <div class = "col" style="font-size:15px;font-weight:bold;">Station 3</div>
    <div class = "col" style="font-size:15px;font-weight:bold;">Agbogboa</div>
    <div class = "col" style="font-size:15px;font-weight:bold;">P.O.BOX GP 2016</div>
        <div class = "col" style="font-size:15px;font-weight:bold;">29° 52' N</div>
    <div class = "col" style="font-size:15px;font-weight:bold;">2° 29' E</div>
    <div  class ="col"><a href ="update_station.php" class="text text-success" ><i class="fa fa-pen" ></i></a></div>


</div>
<div class="hide-table-padding col" style="width:100%">
    <div> </div>
    <div colspan="12" > 
        <div id="collapseTwosub3" class="collapse in p-3">
    <div class="col-6" style="font-size:15px;font-weight:bold;color:orange">SERVICES</div>
    <hr>
 <div class="row">
   <div class="col-6">Car Repairs</div>
    <div class="col-4">GHC 15.00</div>
  </div>
  <div class="row">
   <div class="col-6">Car Wash</div>
    <div class="col-4">GHC 12.00 </div>
  </div>
        </div>
    </div>
</div>
</div> 
<!---->

</div>
</div>
</td>
</tr>
<!--tr-->



<!--tr-->
<tr class="accordion-toggle collapsed" id="accordion3" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree">
<td class="expand-button" style="width:10%;"></td>
<td style="width:10%;padding:0%"  class ="col"><img src="data:image/png;base64,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"
 class="rounded-circle" style="width:30%;"
  alt="logo" /></td>
<td class ="col">TELENERGY</td>
</tr>

<tr class="hide-table-padding">
<td></td>
<td colspan="9" class="col-sm-12" >
<div id="collapseThree" class="collapse in p-3" >
  <div class="row" >
    <div  style="width:100%;" class="accordion-toggle collapsed" id="accordion4" data-toggle="collapse" data-parent="#accordion1" href="#collapseFivesub1">
   <div class="row"  > 
    <div class="col-sm-1"><i class="fa fa-sun" style="color:orange"></i></div>
    <div class = "col" style="font-size:15px;font-weight:bold;color:orange;">STATION NAME</div>
    <div class = "col" style="font-size:15px;font-weight:bold;color:orange;">STATION BRANCH</div>
    <div class = "col" style="font-size:15px;font-weight:bold;color:orange;">STATION ADDRESS</div>
     <div class = "col" style="font-size:15px;font-weight:bold;color:orange;">STATION LONGITUDE</div>
    <div class = "col" style="font-size:15px;font-weight:bold;color:orange;">STATION LATITUDE</div>
    <div  class ="col"><a href ="#" class="text text-success" >EDIT</a></div>

</div>
<hr/>
</div> 
<!---->
<div  style="width:100%" class="accordion-toggle collapsed" id="accordion4" data-toggle="collapse" data-parent="#accordion1" href="#collapseThreesub1">
   <div class="row"  > 
    <div class="expand-button col-sm-1" ></div>
    <div class = "col" style="font-size:15px;font-weight:bold;">Station 1</div>
    <div class = "col" style="font-size:15px;font-weight:bold;">Ashongman</div>
    <div class = "col" style="font-size:15px;font-weight:bold;">P.O.BOX GP 2016</div>
        <div class = "col" style="font-size:15px;font-weight:bold;">29° 52' N</div>
    <div class = "col" style="font-size:15px;font-weight:bold;">2° 29' E</div>
    <div  class ="col"><a href ="update_station.php" class="text text-success" ><i class="fa fa-pen" ></i></a></div>


</div>
<div class="hide-table-padding col" style="width:100%">
    <div> </div>
    <div colspan="12" > 
        <div id="collapseThreesub1" class="collapse in p-3">
    <div class="col-6" style="font-size:15px;font-weight:bold;color:orange">SERVICES</div>
    <hr>
 <div class="row">
   <div class="col-6">Super Market</div>
    <div class="col-4">Affordable </div>
  </div>
        </div>
    </div>
</div>
</div> 
<!---->

<!---->
<div  style="width:100%" class="accordion-toggle collapsed" id="accordion4" data-toggle="collapse" data-parent="#accordion1" href="#collapseThreesub2">
   <div class="row"  > 
    <div class="expand-button col-sm-1" ></div>
    <div class = "col" style="font-size:15px;font-weight:bold;">Station 2</div>
    <div class = "col" style="font-size:15px;font-weight:bold;">Dansoman</div>
    <div class = "col" style="font-size:15px;font-weight:bold;">P.O.BOX GP 2016</div>
        <div class = "col" style="font-size:15px;font-weight:bold;">29° 52' N</div>
    <div class = "col" style="font-size:15px;font-weight:bold;">2° 29' E</div>
<div  class ="col"><a href ="update_station.php" class="text text-success" ><i class="fa fa-pen" ></i></a></div>

</div>
<div class="hide-table-padding col" style="width:100%">
    <div> </div>
    <div colspan="12" > 
        <div id="collapseThreesub2" class="collapse in p-3">
    <div class="col-6" style="font-size:15px;font-weight:bold;color:orange">SERVICES</div>
    <hr>
 <div class="row">
   <div class="col-6">Super Market</div>
    <div class="col-4">Affordable </div>
  </div>
  <div class="row">
   <div class="col-6">Car Wash</div>
    <div class="col-4">GHC 12.00 </div>
  </div>
        </div>
    </div>
</div>
</div> 
<!---->



<!---->
<div  style="width:100%" class="accordion-toggle collapsed" id="accordion4" data-toggle="collapse" data-parent="#accordion1" href="#collapseThreesub3">
   <div class="row"  > 
    <div class="expand-button col-sm-1" ></div>
    <div class = "col" style="font-size:15px;font-weight:bold;">Station 3</div>
    <div class = "col" style="font-size:15px;font-weight:bold;">Agbogboa</div>
    <div class = "col" style="font-size:15px;font-weight:bold;">P.O.BOX GP 2016</div>
        <div class = "col" style="font-size:15px;font-weight:bold;">29° 52' N</div>
    <div class = "col" style="font-size:15px;font-weight:bold;">2° 29' E</div>
<div  class ="col"><a href ="update_station.php" class="text text-success" ><i class="fa fa-pen" ></i></a></div>

</div>
<div class="hide-table-padding col" style="width:100%">
    <div> </div>
    <div colspan="12" > 
        <div id="collapseThreesub3" class="collapse in p-3">
    <div class="col-6" style="font-size:15px;font-weight:bold;color:orange">SERVICES</div>
    <hr>
 <div class="row">
   <div class="col-6">Car Repairs</div>
    <div class="col-4">GHC 15.00</div>
  </div>
  <div class="row">
   <div class="col-6">Car Wash</div>
    <div class="col-4">GHC 12.00 </div>
  </div>
        </div>
    </div>
</div>
</div> 
<!---->

</div>
</div>
</td>
</tr>
<!--tr-->



<!--tr-->
<tr class="accordion-toggle collapsed" id="accordion4" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour">
<td class="expand-button" style="width:10%;"></td>
<td style="width:10%;padding:0%"  class ="col"><img src="https://image.shutterstock.com/image-vector/pin-fuel-logo-template-design-260nw-1617775240.jpg" class="rounded-circle" style="width:30%;"
  alt="logo" /></td>
<td class ="col">PINFUEL</td>
</tr>

<tr class="hide-table-padding">
<td></td>
<td colspan="9" class="col-sm-12" >
<div id="collapseFour" class="collapse in p-3" >
  <div class="row" >
    <div  style="width:100%;" class="accordion-toggle collapsed" id="accordion4" data-toggle="collapse" data-parent="#accordion1" href="#collapseFoursub1">
   <div class="row"  > 
    <div class="col-sm-1"><i class="fa fa-sun" style="color:orange"></i></div>
    <div class = "col" style="font-size:15px;font-weight:bold;color:orange;">STATION NAME</div>
    <div class = "col" style="font-size:15px;font-weight:bold;color:orange;">STATION BRANCH</div>
    <div class = "col" style="font-size:15px;font-weight:bold;color:orange;">STATION ADDRESS</div>
     <div class = "col" style="font-size:15px;font-weight:bold;color:orange;">STATION LONGITUDE</div>
    <div class = "col" style="font-size:15px;font-weight:bold;color:orange;">STATION LATITUDE</div>
    <div  class ="col"><a href ="#" class="text text-success" >EDIT</a></div>

</div>
<hr/>
</div> 
<!---->
<div  style="width:100%" class="accordion-toggle collapsed" id="accordion4" data-toggle="collapse" data-parent="#accordion1" href="#collapseFoursub1">
   <div class="row"  > 
    <div class="expand-button col-sm-1" ></div>
    <div class = "col" style="font-size:15px;font-weight:bold;">Station 1</div>
    <div class = "col" style="font-size:15px;font-weight:bold;">Ashongman</div>
    <div class = "col" style="font-size:15px;font-weight:bold;">P.O.BOX GP 2016</div>
        <div class = "col" style="font-size:15px;font-weight:bold;">29° 52' N</div>
    <div class = "col" style="font-size:15px;font-weight:bold;">2° 29' E</div>
    <div  class ="col"><a href ="update_station.php" class="text text-success" ><i class="fa fa-pen" ></i></a></div>


</div>
<div class="hide-table-padding col" style="width:100%">
    <div> </div>
    <div colspan="12" > 
        <div id="collapseFoursub1" class="collapse in p-3">
    <div class="col-6" style="font-size:15px;font-weight:bold;color:orange">SERVICES</div>
    <hr>
 <div class="row">
   <div class="col-6">Super Market</div>
    <div class="col-4">Affordable </div>
  </div>
        </div>
    </div>
</div>
</div> 
<!---->

<!---->
<div  style="width:100%" class="accordion-toggle collapsed" id="accordion4" data-toggle="collapse" data-parent="#accordion1" href="#collapseFoursub2">
   <div class="row"  > 
    <div class="expand-button col-sm-1" ></div>
    <div class = "col" style="font-size:15px;font-weight:bold;">Station 2</div>
    <div class = "col" style="font-size:15px;font-weight:bold;">Dansoman</div>
    <div class = "col" style="font-size:15px;font-weight:bold;">P.O.BOX GP 2016</div>
        <div class = "col" style="font-size:15px;font-weight:bold;">29° 52' N</div>
    <div class = "col" style="font-size:15px;font-weight:bold;">2° 29' E</div>
    <div  class ="col"><a href ="update_station.php" class="text text-success" ><i class="fa fa-pen" ></i></a></div>


</div>
<div class="hide-table-padding col" style="width:100%">
    <div> </div>
    <div colspan="12" > 
        <div id="collapseFoursub2" class="collapse in p-3">
    <div class="col-6" style="font-size:15px;font-weight:bold;color:orange">SERVICES</div>
    <hr>
 <div class="row">
   <div class="col-6">Super Market</div>
    <div class="col-4">Affordable </div>
  </div>
  <div class="row">
   <div class="col-6">Car Wash</div>
    <div class="col-4">GHC 12.00 </div>
  </div>
        </div>
    </div>
</div>
</div> 
<!---->



<!---->
<div  style="width:100%" class="accordion-toggle collapsed" id="accordion4" data-toggle="collapse" data-parent="#accordion1" href="#collapseFoursub3">
   <div class="row"  > 
    <div class="expand-button col-sm-1" ></div>
    <div class = "col" style="font-size:15px;font-weight:bold;">Station 3</div>
    <div class = "col" style="font-size:15px;font-weight:bold;">Agbogboa</div>
    <div class = "col" style="font-size:15px;font-weight:bold;">P.O.BOX GP 2016</div>
        <div class = "col" style="font-size:15px;font-weight:bold;">29° 52' N</div>
    <div class = "col" style="font-size:15px;font-weight:bold;">2° 29' E</div>
    <div  class ="col"><a href ="update_station.php" class="text text-success" ><i class="fa fa-pen" ></i></a></div>


</div>
<div class="hide-table-padding col" style="width:100%">
    <div> </div>
    <div colspan="12" > 
        <div id="collapseFoursub3" class="collapse in p-3">
    <div class="col-6" style="font-size:15px;font-weight:bold;color:orange">SERVICES</div>
    <hr>
 <div class="row">
   <div class="col-6">Car Repairs</div>
    <div class="col-4">GHC 15.00</div>
  </div>
  <div class="row">
   <div class="col-6">Car Wash</div>
    <div class="col-4">GHC 12.00 </div>
  </div>
        </div>
    </div>
</div>
</div> 
<!---->

</div>
</div>
</td>
</tr>
<!--tr-->












    </tbody>
  </table>
</div>
   
      </div>


  
</section>

<?php include("base/end.php"); ?>

</div>

</div>


</body>

</html>