<?php
include('header.php');
?>
<div class="hom">
  <div class="container">
    <div class="row">
      <div class="col-md-8" style="border-style:dashed;background-color:silver;">
      <h1 style="font-family: courier;"><strong>About Us</strong></h1>
<p style="font-family: courier;"><strong>LACK OF BLOOD is same PROBLEM whole over the Nepal. So that We are going to organize a Nepal wide centralized database of blood donors. In this database we are going to store the identity of all the blood donors from each corner of Nepal. The main prospective of this campaign is that any organization or a people can add details for blood's donor database. The bunch of people collected by this campaign may eradicate the problem some how. From this campaign the patient will be benefited, the rare blood group and else other blood group which are not available in the blood bank can be found through donor database. Mainly we want to focus on the donation of fresh blood. The gap between the donor and the recipient  will be bridged through this campaign. 
   </strong>
   </p>
      </div>
      </div>
      </div>
      </div>
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