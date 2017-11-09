<?php
ob_start();
include('blood_conn.php');
include('session.php');
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
<style>
table{
    background-color:pink;    
    
}
td{

   width:300px;
   padding-left:0px;
   float:left;
   box-shadow:0px 0px 0px #white;
    }
</style>
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
<div style="position: absolute;border:2px groove;margin-bottom:10px;font-family:courier;background-color:silver">Welcome:<?php echo $_SESSION['username'];?></a><br /><a href="logout.php">Logout
  </a></div>
<!--<div class="col-md-12">
<ul class="nav nav-pills">
<li><a class="dropdown-toggle"
       data-toggle="dropdown"
       >Welcome:<?php echo $_SESSION['username'];?></a><a href="logout.php">Logout
  </a>
 </li>
  </nav>
  </div>-->
  <!-- nav1-->
  
  </div>
  </div>
  </header>
  <div class="top">
    <div class="container">
      <div class="row">
        <div class="col-md-4"><img src="blood.png" alt="donate blood" width="211"/> </div>
        <div class="col-md-2"><img src="donatenow.png" /></div><div class="col-mdm-2"><img src="g.png"/></div>
        <div class="col-md-4">
          <h4 style="font-family:courier">Be Someone's God.Give Blood</h4>
        </div>
      </div>
    </div>
  </div>
  <style>
  table
  {
    height: 900px;
    float:left;
  }
  td
{
    box-shadow: 0px 0px 0px #888888;
    font-family:courier;
    font-size:15px;
    margin-left:10px;
}
tr{
    margin-bottom: 1px;
}
th
{
    font-family:courier;
    font-size:25px;
    box-shadow: 0px 0px 0px #888888;
}
  </style>
<table>
<th style="color:blue;font-size:20px"><strong>
User information
</strong>
</th>
<tr>
<td style="font-color:black">
<fieldset><legend>Personal Details
</legend>
<br />
<?php
$username=$_SESSION['username'];
$query="select fname,lname,blood,phone,city,donate,dateofbirth from banking where username='$username' ";
$result=mysqli_query($connect,$query);
$rs=mysqli_fetch_array($result);
?>
Name:-<?php echo $rs['fname'];?>
<?php echo $rs['lname']; ?><br/>
Blood Group:<?php echo $rs['blood'];?><br/>
Date of Birth:<?php echo $rs['dateofbirth']; ?><br/>
Phone:<?php echo $rs['phone'];?></a><br/>
City:<?php echo $rs['city'];?><br />
<?php
    $query="select * from banking";
	$result=mysqli_query($connect,$query);
	($rs=mysqli_fetch_array($result))
	
?>
<a href="edit.php"id=<?php echo $rs['username']?>">Edit</a>
<?php

?>
                                                  
                                                  
</td>   
</fieldset>
<td style="margin-left:200px;font-size:20px">
<fieldset><legend>Member List</legend></fieldset> <!from line 129-141 inserting for list of members>
<?php
$username=$_SESSION['username'];
$query="select fname from banking order by phone";
$result=mysqli_query($connect,$query);


while($rs = mysqli_fetch_array($result)){
	echo "<b>".$rs['fname']."</b><br>";
}
?>


<?php
    $query="select * from banking";
	$result=mysqli_query($connect,$query);
	($rs=mysqli_fetch_array($result))
	
?>
</td>
                                            <?php
   /* $query="select * from banking";
	$result=mysqli_query($connect,$query);
	($rs=mysqli_fetch_array($result))*/
	
	
?>
<tr>
<td>
<fieldset>
<legend>
Request List
</legend></fieldset>
</td>
</tr>
</table>