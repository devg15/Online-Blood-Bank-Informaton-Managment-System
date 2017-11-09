<?php
include('header.php');
?>
<div class="hom">
  <div class="container">
    <div class="row">
      <div class="col-md-8" style="border-style:dashed;background-color:silver;">
      <h1 style="font-family: courier;"><strong>Contact Us</strong></h1>
<p style="font-family: courier;">Online blood bank Nepal
</br>
Howiset Foundation</br>
Itahari,Sunsari</br>
Nepal</br>
</br>
<strong>General Enquries:</strong></br>
howiset@gmail.com</br>
<strong>Donors Contact</strong></br>
www.bims.com.np</br>
<strong>Contact Numbers</strong></br>
Members:</br>
Anisha Sapkota:-9842636363</br>
Devendra Giri:-9842585896</br>
Dhiraj Katwal:-9817383891</br>
Kamala Khatiwada:-9842656565</br>
</strong>
   </p>
      
      </div>
       <div class="col-md-4" style="width:360px; margin-left:30px">
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
      </div>
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