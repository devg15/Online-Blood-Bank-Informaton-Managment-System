<?php
ob_start();
include('header.php');
?>
<div class="hom">
  <div class="container">
    <div class="row">
      <div class="col-md-12"> 
        <!--slider images-->
     <!--end--> </div>
    </div>
  </div>
</div>
<style>
table
{
 float:left;  
 margin-left:-20px; 
 margin-right:10px;
 width:1230px;
 box-shadow:0px 0px 0px white;
}
tr
{
    box-shadow:0px 0px 0px white;
    height: 50px;
    width:1200px;
    margin-bottom: 0px;
    margin-top:0px;
    
}
td
{
    border:2px dashed black;
    width:170px;
    height:50px;
    box-shadow:0px 0px 0px white;
    margin-bottom:1px;
   margin-top:2px;
   padding-left:32px;
   float:left;
     padding-top: 0px;
  margin-top:10px;
  margin-left:1px;
  margin-bottom:0px;
  padding-bottom:0px;
  
}</style>
<div class="hom1">
  <div class="container">
    <div class="row">
      <div class="col-md-12"> 
      <div class="row">
        <div class="col-md-6">
        </br><table>
<tr style="color:red">
<td>First name</td>
<td>Last name</td>
<td>Gender</td>
<td>Blood</td>
<td>Phone</td>
<td>City</td>
</tr>
<?php
include("blood_conn.php");
if(isset($_POST['submit']))
{
    $blood=$_POST['blood'];
    $city=$_POST['city'];
    $query="select * from banking where city='$city' and blood='$blood' ";
    $result=mysqli_query($connect,$query);
    while($rs=mysqli_fetch_array($result))
    {    
    ?>
    <tr style="color:black">
    <td><?php echo $rs['fname'];?></td>
<td><?php echo $rs['lname']; ?></td>
<td><?php echo $rs['gender'];?></td>
<td><?php echo $rs['blood']; ?></td>
<td><?php echo $rs['phone'];?></td>
<td><?php echo $rs['city'];?></td>
</tr>
<?php
}
}
?>
</table>
</br>
      <div class="col-md-6"></div>
      </div>
    </div>
  </div>
</div>
<?php
include('footer.php');
?>
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