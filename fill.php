
            <input type="checkbox" name="id"> &nbsp; ID     &nbsp;&nbsp;
            <input type="checkbox" name="name"> &nbsp; First Name     &nbsp;&nbsp;
            <input type="checkbox" name="gender" >&nbsp; Gender    &nbsp;&nbsp;
            <input type="checkbox" name="email">&nbsp; Email     &nbsp;&nbsp;
      <hr>
            <br>
<style type="text/css">
  td
  {
    border: solid 1px;
  }
  table
  {
    width: 50%;
  }
</style>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script>
        $("input:checkbox").attr("checked",false).click(function()
          {
           var shcolumn ="."+$(this).attr("name");
           $(shcolumn).toggle();
            });
</script>
<table style="border: solid 2px;">
  <tr>
    <td class="id">ID</td>
    <td class="name">Name</td>
    <td class="gender">Gender</td>
    <td class="email">Email</td>
  </tr>

<?php
$con = mysqli_connect("localhost","root","","tb_prd");
   $res=mysqli_query($con,"select * from details");

   while($row=mysqli_fetch_array($res))
   {
    ?>
     <tr>
     <td class="id"><?php echo $row["id"] ?></td>
     <td class="name"><?php echo  $row["Name"]  ?></td>
     <td class="gender"><?php echo $row["Gender"]  ?></td>
     <td class="email"><?php echo  $row["email"]  ?></td>
    </tr>
      <?php
   }       
   ?>



</table>



</form>
</body>
</html>