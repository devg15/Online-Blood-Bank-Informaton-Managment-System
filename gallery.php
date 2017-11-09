<?php
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
<br/>
<br/>
<table>
<th style="text-align:left;font-size:30px">Gallery</th>
<tr>
<td>
<img src="New%20folder/1.jpg" />
</td>
<td>
<img src="New%20folder/2.jpg" />
</td>
<td>
<img src="New%20folder/3.jpg"/>
</td>
<td>
<img src="New%20folder/4.jpg"</td>
</tr>
<tr>
<td>
<img src="New%20folder/5.jpg" />
</td>
<td>
<img src="New%20folder/12.jpg" />
</td>
<td><img src="New%20folder/6.jpg" />
</td>
<td>
<img src="New%20folder/7.jpg" />
</td>
</tr>
<tr>
<td>
<img src="New%20folder/8.jpg" />
</td>
<td>
<img src="New%20folder/9.jpg" />
</td>
<td>
<img src="New%20folder/10.jpg" />
</td>
<td>
<img src="New%20folder/11.jpg" />
</td>
</tr>
</table>
<?php
include('footer.php');
?>

