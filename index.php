<?php
    ob_start(); //stop redirecting
	include("blood_conn.php");
    include('header.php');
?>
<div class="hom">
  <div class="container">
    <div class="row">
      <div class="col-md-8" style="background-color:white;"> 
        <!--slider images-->
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
              <li data-target="#carousel-example-generic" data-slide-to="4"></li>
          </ol>
          
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active"> <img src="slider/1.jpg" style="height:300px;width:800px"alt="...">
              <div class="carousel-caption"> </div>
            </div>
            <div class="item"> <img src="slider/2.jpg" style="height:300px;width:800px" alt="...">
              <div class="carousel-caption"> </div>
            </div>
            <div class="item"> <img src="slider/3.png" style="height:300px;width:800px" alt="...">
              <div class="carousel-caption"> ... </div>
            </div>
            <div class="item"> <img src="slider/4.jpg" style="height:300px;width:800px"  alt="...">
              <div class="carousel-caption"> </div>
            </div>
            <div class="item"> <img src="slider/5.JPG" style="height:300px;width:800px" alt="...">
              <div class="carousel-caption"> </div>
            </div>
               <div class="item"> <img src="slider/6.jpg" style="height:300px;width:800px" alt="...">
              <div class="carousel-caption"> </div>
            </div>
          </div>
        </div>
        
        <!--end--> </div>
      <div class="col-md-4">
        <form class="form-signin" action="" method="post">
          <h2 class="form-signin-heading">Please sign in</h2>
          <label for="inputEmail" class="sr-only">Email address</label>
          <input type="text" id="inputEmail" class="form-control" name="username" placeholder="username" required autofocus>
          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
          <div class="checkbox">
            <label>
              <input type="checkbox" value="remember-me">
              Remember me </label>
          </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="login">Sign in</button>
        <?php
        $i=1;
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
		                  header('Location:userinfo.php');
                          $_SESSION['username']=$user;
		          }
		          else
		          {
			            echo "<span style='color:red'>Login Failed</span>";
		          }
	     }   
        ?>
        </form>
        <!-- /container -->
      </div>
    </div>
  </div>
</div>
</br>
<div class="hom1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-6">
          <div class="nabin">
            <h2>Welcome to the Blood Bank </h2>
            <p style="color:black">Every day, hundreds of people in Nepal require blood for a transfusion, a surgery or some medical procedure. In many cases, especially open heart surgery, there is need for fresh blood and therefore a need for donors.

If you are a healthy donor, and do not mind taking a little time out of your daily busy schedule to donate blood when someone is in an emergency, please REGISTER . You might be able to save a life or help ease the trauma for the kind of a patient. 

Nepali online Blood Donors tries to help victims,patients,those in need of blood. It is an attempt to reach out to these individuals in need of blood and connect them to those willing to donate.
</p>
          <p style="color:black">The approach is multi-pronged... Nepali/ online Blood Donors will serve as a public directory of voluntary donors The service allows those in need of blood to mention their needs which are then made visible to a wide audience A comprehensive database will help individuals locate the nearest Blood Bank It is also a myth dispeller / an informative resource on blood and blood donation 

You can go to the nearest government approved blood centre, which is based on voluntary non/remunerated blood donation and make your significant contribution to saving life of a patient by donating blood. Your contribution is extremely valuable to us.
 </p>
 </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
<?php
include('footer.php');
?>
