
<?php
$con = mysqli_connect("localhost","root","","Tb_prd");

if(isset($_POST["submit"]))
{
  $name = $_POST["name"];
  $email = $_POST['email'];
  $Gen = $_POST['gen'];
  $cont = $_POST['mobile'];

$q = "insert into details (name,email,gender,contact) values('" . $name . "','" . $email . "','".$Gen . "','".$cont."')";

$res  =   mysqli_query($con,$q);
      if($res)
      {
      echo "ok";
      }
      else
      {
        echo "error". $res. " " . $con->error;
      }
}




?>

<style type="text/css">
	td
	{
		border: solid 1px;

	}
	table
	{
		width: 50%;
		height: 30%;
	}
</style>

<table style="border: solid 2px;">
	<tr>
		<td>Name</td>
		<td><?php  echo $name;   ?></td>
	</tr>
	
	<tr>
		<td>Gender</td>
		<td><?php  echo $Gen; ?></td>
	</tr>
	<tr>
		<td>Contact</td>
		<td> <?php   echo $cont; ?>  </td>
	</tr>
	<tr>
		<td>Email</td>
		<td> <?php   echo $email; ?>  </td>
	</tr>

		 
	 
	 ?>
</table>
<?php
	
		header("Content-Type:application/xls");
		header("Content-Disposition:attachment, filename=download.xls");

?>

