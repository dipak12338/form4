 <h1 class="text-primary"> View trainer</h1> 
              
              <hr>
            <input type="checkbox" name="id"> &nbsp; ID     &nbsp;&nbsp;
						<input type="checkbox" name="firstname"> &nbsp; First Name     &nbsp;&nbsp;
            <input type="checkbox" name="lastname" >&nbsp; Last Name    &nbsp;&nbsp;
            <input type="checkbox" name="email">&nbsp; Email     &nbsp;&nbsp;
						<input type="checkbox"  name="contact">&nbsp; Contact No.     &nbsp;&nbsp;
					  <input type="checkbox" name="gender">&nbsp; Gender     &nbsp;&nbsp;
						<input type="checkbox" name="dob">&nbsp; Date of Birth     &nbsp;&nbsp;
						 <br> <input type="checkbox" name="Country">&nbsp; Country    &nbsp;&nbsp;
						  <input type="checkbox" name="State">&nbsp; State     &nbsp;&nbsp;
						  <input type="checkbox" name="City">&nbsp; City       &nbsp;&nbsp;
						  <input type="checkbox" name="Tahshil">&nbsp; Tahshil       &nbsp;&nbsp;
						  <input type="checkbox" name="Ward">&nbsp; Ward       &nbsp;&nbsp;
						  <input type="checkbox" name="Profession">&nbsp; Profession       &nbsp;&nbsp;
						  <input type="checkbox" name="Hobbies">&nbsp; Hobbies       &nbsp;&nbsp;
						  <input type="checkbox" name="Training">&nbsp; Training       &nbsp;&nbsp;
              <input type="checkbox" name="Certification">&nbsp; Certification       &nbsp;&nbsp;

						  <input type="checkbox" name="Skills">&nbsp; Skills       &nbsp;&nbsp;
						  <input type="checkbox" name="Address">&nbsp; Address       &nbsp;&nbsp;

                          <hr/>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script>
        $("input:checkbox").attr("checked",false).click(function()
          {
           var shcolumn ="."+$(this).attr("name");
           $(shcolumn).toggle();
            });
           </script>

                                
        <table id="myTable" border="1" width="100%">
                        <thead>
                               <tr>
                                <th class ="id">ID</th>
                                   <th class ="firstname">First Name</th>
                                   <th class="lastname">Last Name</th>
                                    <th class="email">Email</th>
                                     
                                          <th class="contact">Contact No.</th>
                                             <th class="gender">Gender</th>
                                               <th class="dob">Date of Birth</th>
                                                
                                                <th class="Country">Country</th>
                                                <th class="State">State</th>
                                                <th class="City">City</th>
                                                <th class="Tahshil">Tahshil</th>
                                                <th class="Ward">Ward</th>
                                                <th class="Profession">Profession</th>
                                                <th class="Hobbies">Hobbies</th>
                                                <th class="Training">Training</th>
                                               <th class="Certification">Certification</th>
                                            <th class="Skills">Skills</th>
                                           <th class="Address">Address</th>
                                       
                                     </tr>
                                    </thead>
                                   <tbody>
                                    <?php 
                               $conn = mysqli_connect("localhost","root","","londry_db");

                                    //$sql = "SELECT * FROM admin where username ='user'";
                                     //$result = $conn->query($sql);

                                     $sql="SELECT * FROM trainer ORDER BY id DESC";
                                      $result = $conn->query($sql);

                                   while($row = $result->fetch_assoc()) { 
                                   //$sql1 = "SELECT * FROM  tbl_group where id  ='".$row['group_id']."'";
                                   //$result1 = $conn->query($sql1);
                                  //$row1 = $result1->fetch_assoc();
                                      ?>
                                  <tr>
                                  <td class ="id"><?php echo $row['id']; ?></td>

                                  <td class ="firstname"><?php echo $row['fname']; ?></td>
                                  <td class="lastname"><?php echo $row['lname']; ?></td>
                                  <td class="email"><?php echo $row['email']; ?></td>
                                 
                                  <td class="contact"><?php echo $row['contact']; ?></td>
                                  
                                  <td class="gender"><?php echo $row['gender']; ?></td>
                                  <td class="dob"><?php echo $row['dob']; ?></td>
                                  
                               <td class="Country"><?php echo $row['country']; ?></td>
                        <td class="State"><?php echo $row['state']; ?></td>
                        <td class="City"><?php echo $row['city']; ?></td>
                        <td class="Tahshil"><?php echo $row['tahshil']; ?></td>
                        <td class="Ward"><?php echo $row['ward']; ?></td>
                        <td class="Profession"><?php echo $row['profession']; ?></td>
                        <td class="Hobbies"><?php echo $row['hobbies']; ?></td>
                        <td class="Training"><?php echo $row['training']; ?></td>
                        <td class="Certification"><?php echo $row['certification']; ?></td>
                        <td class="Skills"><?php echo $row['skills']; ?></td>
                        <td class="Address"><?php echo $row['address']; ?></td>
                                            </tr>
                                          <?php } ?>
                                        </tbody>
                                    </table>
     