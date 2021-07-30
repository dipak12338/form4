

<!doctype html>
<html>
<head>
  <style>
table {
  font-family: times new roman, sans-serif;
  
  width: 50%;
}

td, th {
  border: 1px ;
  text-align: left;
  padding: 5px;
}


</style>

<meta charset="utf-8">
<title>REGISTRATION FORM</title>
</head>
 
<body bgcolor="pink">
<form method="post" action="selfshow.php">
<center>
<table  border >
  


<tr> 
<td colspan="2"><h1 style="color:black">Personal Details</h1></td>
</tr>
<tr>
<td>Name:</td>
<td colspan="3"><input type="text" name="name" id="name" placeholder="enter your name" required ></td>
</tr>
<tr>

<td>Password:</td>
<td colspan="3"><input type="password" name="password" id="password" placeholder="enter password" required></td>
</tr>
 <tr>
<td>E-mail id:</td>
<td colspan="3"><input type="text" name="email" id="name" placeholder="enter E-mail" required></td>
</tr>

<tr>
<td>Gender:</td> 
 <td> <input type="radio" name="gen"  value="Male" id="radiogroup1"> Male</td>
 <td><input type="radio" name="gen" value="Female" id="radiogroup2"> Female</td>
 <td><input type="radio" name="gen" value="others" id="radiogroup3"> Others</td>
</tr>
<tr>

<td>Contact:</td>
<td colspan="3"><input type="text" name="mobile" id="mobile" required></td>
</tr>
<tr> 
<h3 style="color:brown">Educational Qualification</h3>
</tr>


<tr>      
    
<td>Engineering:</td>
<td  colspan="3"> <select name="eng" id="eng" required>
        <option selected>-- Select Group --</option>
        <option>CSE</option>
        <option>ECE</option>
        <option>CIVIL</option>
        <option>EEE</option>
		<option>ETC</option>
      </select>
</td>
</tr>


<tr>
<td><h3 style="color:black">Address</h3></td>

<td colspan="3"><textarea name="textarea" cols="35" rows="5" id="textarea"></textarea></td>
</tr>
<tr>
<td>Attach Resume:</td>
<td  colspan="3"> <input type="file" name="fileField" id="fileField"></td>
 
 <td><input type="submit" value="Submit" name="submit"></td>
</tr>
</center>
</table>



