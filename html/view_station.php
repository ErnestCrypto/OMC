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
        <th scope="col"><i class="fa fa-sun"></i></th>
        <th scope="col">OMC Logo</th>
        <th scope="col">OMC Name</th>
        
      </tr>
    </thead>
    <tbody>
      
<!--tr-->
<tr class="accordion-toggle collapsed" id="accordion1" data-toggle="collapse" data-parent="#accordion1" href="#collapseFive">
<td class="expand-button" style="width:10%;"></td>
<td style="width:10%;padding:0%"  class ="col"><img src="https://logos-world.net/wp-content/uploads/2020/11/Shell-Logo.png" class="rounded-circle" style="width:70%;"
  alt="logo" /></td>
<td class ="col">SHELL</td>
<td  class ="col"><a href ="update_omc.php" class="text text-success" ><i class="fa fa-pen" ></i></a></td>
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
style="width:80%;"
  alt="logo" /></td>
<td class ="col">GOIL</td>
<td  class ="col"><a href ="update_omc.php" class="text text-success" ><i class="fa fa-pen" ></i></a></td>
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