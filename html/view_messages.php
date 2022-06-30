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

body{
background:#eee   
}
.email-app {
    display: flex;
    flex-direction: row;
    background: #fff;
    border: 1px solid #e1e6ef;
}

.email-app nav {
    flex: 0 0 200px;
    padding: 1rem;
    border-right: 1px solid #e1e6ef;
}

.email-app nav .btn-block {
    margin-bottom: 15px;
}

.email-app nav .nav {
    flex-direction: column;
}

.email-app nav .nav .nav-item {
    position: relative;
}

.email-app nav .nav .nav-item .nav-link,
.email-app nav .nav .nav-item .navbar .dropdown-toggle,
.navbar .email-app nav .nav .nav-item .dropdown-toggle {
    color: #151b1e;
    border-bottom: 1px solid #e1e6ef;
}

.email-app nav .nav .nav-item .nav-link i,
.email-app nav .nav .nav-item .navbar .dropdown-toggle i,
.navbar .email-app nav .nav .nav-item .dropdown-toggle i {
    width: 20px;
    margin: 0 10px 0 0;
    font-size: 14px;
    text-align: center;
}

.email-app nav .nav .nav-item .nav-link .badge,
.email-app nav .nav .nav-item .navbar .dropdown-toggle .badge,
.navbar .email-app nav .nav .nav-item .dropdown-toggle .badge {
    float: right;
    margin-top: 4px;
    margin-left: 10px;
}

.email-app main {
    min-width: 0;
    flex: 1;
    padding: 1rem;
}

.email-app .inbox .toolbar {
    padding-bottom: 1rem;
    border-bottom: 1px solid #e1e6ef;
}

.email-app .inbox .messages {
    padding: 0;
    list-style: none;
}

.email-app .inbox .message {
    position: relative;
    padding: 1rem 1rem 1rem 2rem;
    cursor: pointer;
    border-bottom: 1px solid #e1e6ef;
}

.email-app .inbox .message:hover {
    background: #f9f9fa;
}

.email-app .inbox .message .actions {
    position: absolute;
    left: 0;
    display: flex;
    flex-direction: column;
}

.email-app .inbox .message .actions .action {
    width: 2rem;
    margin-bottom: 0.5rem;
    color: #c0cadd;
    text-align: center;
}

.email-app .inbox .message a {
    color: #000;
}

.email-app .inbox .message a:hover {
    text-decoration: none;
}

.email-app .inbox .message.unread .header,
.email-app .inbox .message.unread .title {
    font-weight: bold;
}

.email-app .inbox .message .header {
    display: flex;
    flex-direction: row;
    margin-bottom: 0.5rem;
}

.email-app .inbox .message .header .date {
    margin-left: auto;
}

.email-app .inbox .message .title {
    margin-bottom: 0.5rem;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.email-app .inbox .message .description {
    font-size: 12px;
}

.email-app .message .toolbar {
    padding-bottom: 1rem;
    border-bottom: 1px solid #e1e6ef;
}

.email-app .message .details .title {
    padding: 1rem 0;
    font-weight: bold;
}

.email-app .message .details .header {
    display: flex;
    padding: 1rem 0;
    margin: 1rem 0;
    border-top: 1px solid #e1e6ef;
    border-bottom: 1px solid #e1e6ef;
}

.email-app .message .details .header .avatar {
    width: 40px;
    height: 40px;
    margin-right: 1rem;
}

.email-app .message .details .header .from {
    font-size: 12px;
    color: #9faecb;
    align-self: center;
}

.email-app .message .details .header .from span {
    display: block;
    font-weight: bold;
}

.email-app .message .details .header .date {
    margin-left: auto;
}

.email-app .message .details .attachments {
    padding: 1rem 0;
    margin-bottom: 1rem;
    border-top: 3px solid #f9f9fa;
    border-bottom: 3px solid #f9f9fa;
}

.email-app .message .details .attachments .attachment {
    display: flex;
    margin: 0.5rem 0;
    font-size: 12px;
    align-self: center;
}

.email-app .message .details .attachments .attachment .badge {
    margin: 0 0.5rem;
    line-height: inherit;
}

.email-app .message .details .attachments .attachment .menu {
    margin-left: auto;
}

.email-app .message .details .attachments .attachment .menu a {
    padding: 0 0.5rem;
    font-size: 14px;
    color: #e1e6ef;
}

@media (max-width: 767px) {
    .email-app {
        flex-direction: column;
    }
    .email-app nav {
        flex: 0 0 100%;
    }
}

@media (max-width: 575px) {
    .email-app .message .header {
        flex-flow: row wrap;
    }
    .email-app .message .header .date {
        flex: 0 0 100%;
    }
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
    <div style="padding-left:20px">
<i class="fa fa-pagelines" style="font-size:60px;color:pink"></i>
    </div>
    <div class = "col-sm-6">
 <h1 class="h3 mb-15 text-gray-800" >MESSAGES</h1>
<h6 class="h6 mb-15 text-gray-500" >Lets see all the messages you have recieved</h6>
</div>
</div>
</div>
 



<div style = "background:white"><table class="table">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container bootdey">
<div class="email-app mb-4">
   
    <main class="inbox">
        <ul class="messages">
            <li class="message unread">
                <a href="read_message.php">
                    <div class="actions">
                        <span class="action"><i class="fa fa-square-o"></i></span>
                        <span class="action"><i class="fa fa-star-o"></i></span>
                    </div>
                    <div class="header">
                        <span class="from">Lukasz Holeczek</span>
                        <span class="date">
                        <span class="fa fa-paper-clip"></span> Today, 3:47 PM</span>
                    </div>
                    <div class="title">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </div>
                    <div class="description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </div>
                </a>
            </li>
            <li class="message">
                <a href="read_message.php">
                    <div class="actions">
                        <span class="action"><i class="fa fa-square-o"></i></span>
                        <span class="action"><i class="fa fa-star-o"></i></span>
                    </div>
                    <div class="header">
                        <span class="from">Lukasz Holeczek</span>
                        <span class="date">
                        <span class="fa fa-paper-clip"></span> Today, 3:47 PM</span>
                    </div>
                    <div class="title">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </div>
                    <div class="description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </div>
                </a>
            </li>
            <li class="message">
                <a href="read_message.php">
                    <div class="actions">
                        <span class="action"><i class="fa fa-square-o"></i></span>
                        <span class="action"><i class="fa fa-star-o"></i></span>
                    </div>
                    <div class="header">
                        <span class="from">Lukasz Holeczek</span>
                        <span class="date">Today, 3:47 PM</span>
                    </div>
                    <div class="title">
                        Lorem ipsum dolor sit amet.
                    </div>
                    <div class="description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </div>
                </a>
            </li>
            <li class="message unread">
               <a href="read_message.php">
                    <div class="actions">
                        <span class="action"><i class="fa fa-square-o"></i></span>
                        <span class="action"><i class="fa fa-star-o"></i></span>
                    </div>
                    <div class="header">
                        <span class="from">Lukasz Holeczek</span>
                        <span class="date">Today, 3:47 PM</span>
                    </div>
                    <div class="title">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </div>
                    <div class="description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </div>
                </a>
            </li>
            <li class="message">
                <a href="read_message.php">
                    <div class="actions">
                        <span class="action"><i class="fa fa-square-o"></i></span>
                        <span class="action"><i class="fa fa-star-o"></i></span>
                    </div>
                    <div class="header">
                        <span class="from">Lukasz Holeczek</span>
                        <span class="date">Today, 3:47 PM</span>
                    </div>
                    <div class="title">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </div>
                    <div class="description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </div>

                </a>
            </li>
            <li class="message">
                <a href="read_message.php">
                    <div class="actions">
                        <span class="action"><i class="fa fa-square-o"></i></span>
                        <span class="action"><i class="fa fa-star-o"></i></span>
                    </div>
                    <div class="header">
                        <span class="from">Lukasz Holeczek</span>
                        <span class="date">Today, 3:47 PM</span>
                    </div>
                    <div class="title">
                        Lorem ipsum dolor sit amet.
                    </div>
                    <div class="description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </div>
                </a>
            </li>
            <li class="message unread">
                <a href="read_message.php">
                    <div class="actions">
                        <span class="action"><i class="fa fa-square-o"></i></span>
                        <span class="action"><i class="fa fa-star-o"></i></span>
                    </div>
                    <div class="header">
                        <span class="from">Lukasz Holeczek</span>
                        <span class="date">Today, 3:47 PM</span>
                    </div>
                    <div class="title">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </div>
                    <div class="description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </div>
                </a>
            </li>
            <li class="message">
                <a href="read_message.php">
                    <div class="actions">
                        <span class="action"><i class="fa fa-square-o"></i></span>
                        <span class="action"><i class="fa fa-star-o"></i></span>
                    </div>
                    <div class="header">
                        <span class="from">Lukasz Holeczek</span>
                        <span class="date">Today, 3:47 PM</span>
                    </div>
                    <div class="title">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </div>
                    <div class="description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </div>
                </a>
            </li>
            <li class="message">
                <a href="read_message.php">
                    <div class="actions">
                        <span class="action"><i class="fa fa-square-o"></i></span>
                        <span class="action"><i class="fa fa-star-o"></i></span>
                    </div>
                    <div class="header">
                        <span class="from">Lukasz Holeczek</span>
                        <span class="date">Today, 3:47 PM</span>
                    </div>
                    <div class="title">
                        Lorem ipsum dolor sit amet.
                    </div>
                    <div class="description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </div>
                </a>
            </li>
        </ul>
    </main>
</div>
</div>

</div>

<?php include("base/end.php"); ?>

</div>

</div>


</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/js/mdb.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


</html>