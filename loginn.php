<?php
    ob_start();
	include("blood_conn.php");
	session_start();
?>
<!DOCTYPE html>
<head>
<link href="js/bootstrap.min.js"  rel="stylesheet" type="text/css"/>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="js/bootstrap.min.js" rel="stylesheet" type="text/css"/>
<link href="fonts/glyphicons-halflings-regular.eot" rel="stylesheet" type="text/css"/>
<link href="style.css" rel="stylesheet" type="text/css"/>
<title>Login</title>
</head>
<body>
<header class="header">
<div class="container">
<div class="row">
<div class="col-md-8">
  <marquee behavior=scroll direction="left" scrollamount="5">
  <h2>Tears of a mother cannot save her Child. But your Blood can..Donate blood </h2>
  </marquee>
</div>
<div class="col-md-4">
<ul class="nav nav-pills">

<li><a class="dropdown-toggle"
       data-toggle="dropdown"
       href="loginn.php">Donor Login</li>
</a>
<ul class="nav nav-pills">
  <li><a class="dropdown-toggle"
       data-toggle="dropdown"
       href="search.php">Search Donor?</li>
  </a>
  </nav></div>
  <!-- nav1-->
  </div>
  </div>
  </header>
  <div class="top">
    <div class="container">
      <div class="row">
        <div class="col-md-4"><img src="image1.jpg" alt="donate blood"/>
        </div>
        <div class="col-md-8">
          <h4>Be Someone's God.Give Blood</h4>
        </div>
      </div>
    </div>
  </div>
  <div class="nav">
  <div class="container">
  <div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-10">
  <ul class="nav nav-pills">
    <li><a class="dropdown-toggle"
       data-toggle="dropdown"
       href="blood.php">Home</li>
    </a>
    <li class="dropdown"> <a class="dropdown-toggle"
       data-toggle="dropdown"
       href=""> About Us <b class="caret"></b> </a>
      <ul class="dropdown-menu">
        <li><a href="">Mission And vision</a></li>
        <li>Facts and Figure</li>
        <!-- links -->
      </ul>
    </li>
    <!--2-->
    <li class="dropdown"> <a class="dropdown-toggle"
       data-toggle="dropdown"
       href="#"> News&Eventts <b class="caret"></b> </a>
      <ul class="dropdown-menu">
        <li>News</li>
        <li>Events</li>
        <!-- links -->
      </ul>
    </li>
    <li><a class="dropdown-toggle"
       data-toggle="dropdown"
       href="register.php">Donor Registration</li>
    </a>
    <li><a class="dropdown-toggle"
       data-toggle="dropdown"
       href="#">Gallery</li>
    </a>
    <li><a class="dropdown-toggle"
       data-toggle="dropdown"
       href="#">About Us</li>
    </a>
  </ul>
  </li>
</ul>
</div>
</div>
</div>
</div>
<div class="hom">
  <div class="container">
    <div class="row">
      <div class="col-md-12"> 
        <!--slider images--> 
     <!--end--> </div>
    </div>
  </div>
</div>
<div class="hom1">
  <div class="container">
    <div class="row">
      <div class="col-md-12"></br></br>
      <div class="row">
        <div class="col-md-6">
        <form name="form" action="loginn.php" method="post">
        <fieldset><legend>LOGIN</legend>
        Username:<input type="text" name="username"></br>
        Password:<input type="password" name="password"></br>
        <input type="submit" name="submit" value="login"></br>
        </form>
        <a href="forget.php" style="color:red ">forget password??</a>
        <?php
        	if(isset($_POST['submit'])&& $_POST['submit']=='login')
	       {
		          $user=$_POST['username'];
		          $pass=$_POST['password'];
		          $query="select * from banking where username='$user' and password='$pass' and active=1";
           	      //echo $query;
                  $rr=mysqli_query($connect,$query);
                  $result=mysqli_num_rows($rr);
                  if($result>0)
		          {
                        echo "<span style='color:Green'><strong>login successful</strong>!!!!!</span>";
			            $_SESSION['username']=$user;
                        //header('Location:loginn.php');
                        
		          }
		          else
		          {
			            echo "<span style='color:red'>Login Failed</span>";
		          }
	     }   
	?>
    </fieldset>
        <div class="col-md-6"></div>
      </div>
    </div>
  </div>
</div>
<footer class="footer">
<div class="contianer">
<div class="row">
<div class="col-md-12">
<div class="col-md-3"></div>
<div class="col-md-6">
<ul>
<li><a href="">Home</a></li>
<li><a href="">About Us</a></li>
<li><a href="">Gallery</a></li>
<li><a href="register.php">Donor Registration</a></li>
<li><a href="">contact us</a></li>
</ul><br />
nabin bagale
<div class="col-md-3"></div>
</div></div>
</div>
</div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script>
</body>
</html>
<style>
fieldset{
    padding:1em;
    width:500px;
    border:1px solid black;
    font:100% sans-serif;
}
legend {
  padding: 0.2em 0.5em;
  border:1px solid black;
  background-color:silver;
  color:black;
  font-size:100%;
  text-align:left;
  }
label{  
    color:black;
        }
</style>