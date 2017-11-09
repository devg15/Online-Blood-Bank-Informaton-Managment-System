<?php
    ob_start();
	include("blood_conn.php");
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="js/bootstrap.min.js" rel="stylesheet" type="text/css"/>
<link href="js/carousel.js" rel="stylesheet" type="text/css"/>
<link href="fonts/glyphicons-halflings-regular.eot" rel="stylesheet" type="text/css"/>
<link href="js/collapse.js" rel="stylesheet" type="text/css"/>
<link href="style.css" rel="stylesheet" type="text/css"/>
<title>Home</title>
</head>
<body style="background-color:silver">
<header class="header">
<div class="container">
<div class="row">
<div class="col-md-8">
  <marquee behavior=scroll direction="left" scrollamount="5">
  <h2></h2>
  </marquee>
</div>
<div class="col-md-4">
<ul class="nav nav-pills">
<li><a class="dropdown-toggle"
       "dropdown" style="margin-bottom:1px"></a>
       </li>
</a>
<ul class="nav nav-pills">
  <li><a href="register.php">Register</li>
  </a>
  </nav>
  </div>
  <!-- nav1-->
  
  </div>
  </div>
  </header>
  <div class="top">
    <div class="container">
      <div class="row">
        <div class="col-md-4"><img src="logod.png" alt="donate blood" width="211"/> </div>
        
          
        <div class="col-md-4">
          <h4 style="font-family:courier">Let's Donate Let's Save Life</h4>
            
        </div>
      </div>
    </div>
  </div>
  <div class="nav">
  <div class="container">
  <div class="row" style="height:50px;width:auto">
  <div class="col-md-2"></div>
  <div class="col-md-10">
  <ul class="nav nav-pills">
    <li><a class="dropdown-toggle"
       href="index.php">Home</li>
    </a>
    <li class="dropdown"> <a class="dropdown-toggle"
    data-toggle="dropdown"
       href=""> About Us <b class="caret"></b> </a>
      <ul class="dropdown-menu">
        <li><a href="mission.php">Mission And vision</a></li>
        
      </ul>
    </li>
    <!--2-->
    <li class="dropdown"> <a class="dropdown-toggle" 
       href="news.php"> News& Events </li> </a>
     
    
    <li><a class="dropdown-toggle"
       href="register.php">Donor Registration</li>
    </a>
    <li><a class="dropdown-toggle"
       href="gallery.php">Gallery</li>
    </a>
    <li><a class="dropdown-toggle"
       href="contact.php">Conatct Us</li>
    </a> 
    <li><a class="dropdown-toggle"
       href="search.php">Search Donor</li>
    </a>
    <!-- links -->
  </ul>
  </li>
</ul>
</div>
</div>
</div>
</div>