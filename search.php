<?php
include('header.php');
?>
<div class="search">
<style>
td
{
    box-shadow: 0px 0px 0px #888888;
    font-family:courier;
    font-size:15px;
}
th
{
    font-family:courier;
    font-size:25px;
    box-shadow: 0px 0px 0px #888888;
}
</style>
<table>
<th>Search Donor</th>
<tr>
<td>
Find a Donor:<form name="form" action="table.php" method="post">
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
</select><br />
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
</br>
        <input type="submit" name="submit" value="submit"></br>
<?php
include("blood_conn.php");
if(isset($_POST['submit']))
{
     $blood=$_POST['bloood'];
    $city=$_POST['city'];
    $query="select * from banking where city='$city' and blood='$blood' ";
    //echo $query;
    $rr=mysqli_query($connect,$query);
    $result=mysqli_num_rows($rr);
    if($result>0)
    {
        header('location:table.php');
    }
    else
    {
    echo "search not found";
    header('location:search.php');
    }
}
?>
</td>
</tr></table>
</div>
<?php
include('footer.php');
?>