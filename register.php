<?php
    ob_start();
	include('blood_conn.php');
    include('header.php');
?>
<div class="hom">
  <div class="container">
    <div class="row">
      <div class="col-md-8" style="background-color: transparent;"> 
        <!--slider images-->
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
			 <li data-target="#carousel-example-generic" data-slide-to="5"></li>
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
          <input type="password" id="inputPassword" name="password"class="form-control" placeholder="Password" required>
          <div class="checkbox">
            <label>
              <input type="checkbox" value="remember-me">
              Remember me </label>
          </div>
          <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit" value="login">Sign in</button>
        <?php
        if(isset($_POST['submit'])&& $_POST['submit']=='login')
	       {
		          $user=$_POST['username'];
		          $pass=$_POST['password'];
		          $query="select * from banking where username='$user' and password='$pass' and active=1";
           	      //echo $query;
                  $rr=mysqli_query($query);
                  $result=mysqli_num_rows($rr);
                  if($result>0)
		          {
                        header('location:userinfo.php');
                         $_SESSION['username']=$user;
                        //echo "<span style='color:Green'><strong>login successful</strong>!!!!!</span>";
                        
                        
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
<br/>
<div class="hom1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-6" style="border: 2px dashed black;width:1170px;">
      <fieldset><legend style="color:black;font-family: arial;">Donor Future information</legend>
        <div class="form99">
<form action="" method="post">
<label>
first name:<input type="text" name="fname" placeholder="enter your first name" /></label>
<label>Last name:<input type="text" name="lname" placeholder="enter your last name"/></label>
<label>username:<input type="text" name="username" placeholder="enter username"/></label>
<label>Password:</td><td><input type="password" name="password" /></label>
<style>
</style>
<br>
</div>
</fieldset><br/>
              
<div class="form100">
<fieldset>
    <legend style="color:black;font-family: arial;">General infromation</legend>
<form action="register.php" method="post">
    <label for="dateofbirth">Date of birth:<input type="datetime" name="dateofbirth" placeholder="year/month/day"></label>
<br/><br/>
    
<label for="gender">
Gender: <br /><input type="radio" name="gender" value="male"> Male
  <input type="radio" name="gender" value="female"> Female
  <input type="radio" name="gender" value="others"> others  
  </label><br /><br />
  <label for="blood">
Blood group:<select name="blood"> 
 <option value="A+">A+</option>
 <option value="A-">A-</option>
  <option value="B+">B+</option>
 <option value="B-">B-</option>
  <option value="AB+">AB+</option>
       <option value="AB-">AB-</option>
      <option value="o+">O+</option>
  <option value="o-">O-</option>
 </select>
</label><br/><br/>
<label for="weight">
Weight:<input type="number" name="weight">
</label><br/>

    <label for="phone">Phone number:<input type="tel" name="phone"></label><br/>
    
<label for="city">
City:<select name="city">
<option value="Kathmandu">Kathmandu
</option>
<option value="Pokhara">Pokhara
</option>
<option value="Butwal">Butwal
</option>
<option value="Biratnagar">Biratnagae
</option>
<option value="Birgunj">Birgunj
</option>
<option value="Nepalgunj">Nepalgunj
</option>
<option value="Janakpur">Janakpur
</option>
<option value="Itahari">Itahari
</option>
<option value="Hetauda">Hetauda
</option>
<option value="Baglung">Baglung
</option>
<option value="Lalitpur">Lalitpur
</option>
<option value="Bhaktapur">Bhaktapur
</option>
<option value="Dharan">Dharan
</option>
<option value="Illam">Illam
</option>
<option value="Tansen">Tansen
</option>
<option value="Damauli">Damauli
</option>
<option value="Bharatpur">Bharatpur
</option>
<option value="Dulegauda">Dulegauda
</option>
</select>
</label><br/>
Last date of blood donation:<input type="datetime" name="donate"><br/>
<input type="checkbox" name="active" value="active">I accept the licensce aggrement and want to continue<br/><br/>
<label for="submit">
<input type="submit" name="submit" value="submit">
</label>
    </form>
              </fieldset>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
          
<?php
include("blood_conn.php");
if(isset($_POST['submit']))
{ 
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$user=$_POST['username'];
$pass=$_POST['password'];
$dob=$_POST['dateofbirth'];
$gender=$_POST['gender'];
$blood=$_POST['blood'];
$weight=$_POST['weight'];
$phone=$_POST['phone'];
$city=$_POST['city'];
$donate=$_POST['donate'];
$active=$_POST['active'];
$active=0;
if(isset($_POST['active'])) 
{
$active	= 1;
$check="select username from banking where username='$user'";
 $rr=mysqli_query($connect,$check);
 $res=mysqli_num_rows($rr);
 if($res>0)
{
       echo "<span style='color:red'><strong>username already exist</strong></span>";
       //header('location:register.php');
    
    
}
else
{
$query = "INSERT INTO banking VALUES ('$fname','$lname','$user','$pass','$dob','$gender','$blood','$weight','$phone','$city','$donate','$active')";
$result=mysqli_query($connect,$query);
if($result)
{
    echo "<span style='color:Green'><strong>Donor registration completed successfully</strong>!!!!!</span>";
}
else
{
        echo "<span style='color:red'>Donor registration not completed!!!!!</span>";
}
}
}
}
?>

<?php
include('footer.php');
?>

